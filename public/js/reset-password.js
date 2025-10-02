(function () {
    // Render reCAPTCHA for this page (if grecaptcha available)
    function renderResetRecaptcha() {
        if (typeof grecaptcha === "undefined" || !grecaptcha.render) {
            setTimeout(renderResetRecaptcha, 300);
            return;
        }
        var el = document.querySelector(".g-recaptcha[data-sitekey]");
        if (!el) return;
        if (el.querySelector("iframe")) return;
        try {
            window._resetRecaptchaWidget = grecaptcha.render(el, {
                sitekey: "{{ config('services.recaptcha.site_key') }}",
            });
        } catch (e) {}
    }
    renderResetRecaptcha();

    // helper: bersihkan pesan error field
    function clearFieldErrors($form) {
        $form.find(".is-invalid").removeClass("is-invalid");
        $form.find(".invalid-feedback.ajax-error").remove();
    }

    // helper: tampilkan pesan error per-field (errors: { field: [msg,...], ... })
    function showFieldErrors($form, errors) {
        Object.keys(errors).forEach(function (field) {
            var msgs = errors[field];
            if (!Array.isArray(msgs)) msgs = [String(msgs)];
            var $input = $form.find('[name="' + field + '"]');
            if (!$input.length) {
                // jika input tidak ditemukan, skip
                return;
            }
            $input.addClass("is-invalid");
            // gabungkan pesan jadi satu paragraf
            var html =
                '<div class="invalid-feedback ajax-error d-block">' +
                msgs.join("<br>") +
                "</div>";
            // sisipkan setelah input atau di akhir form-group jika ada
            var $insertAfter = $input;
            var $formGroup = $input.closest(".form-group, .mb-3, .input-group");
            if ($formGroup.length) {
                // jika ada input-group, letakkan setelah grup
                $insertAfter = $formGroup;
            }
            $insertAfter.after(html);
        });
    }

    // bind click pada tombol reset (hindari submit form HTML)
    $(function () {
        var $form = $("#kt_reset_password_form");
        var $btn = $("#btn_reset_password");
        if (!$form.length || !$btn.length) return;

        $btn.on("click", function (e) {
            e.preventDefault();

            clearFieldErrors($form);

            var formData = {
                _token: $form.find('input[name="_token"]').val(),
                token: $form.find('input[name="token"]').val(),
                email: $form.find('input[name="email"]').val(),
                password: $form.find('input[name="password"]').val(),
                password_confirmation: $form
                    .find('input[name="password_confirmation"]')
                    .val(),
            };

            // --- client-side basic validation ---
            var localErrors = {};
            if (!formData.password || formData.password.trim() === "") {
                localErrors.password = ["Password harus diisi."];
            }
            if (
                !formData.password_confirmation ||
                formData.password_confirmation.trim() === ""
            ) {
                localErrors.password_confirmation = [
                    "Konfirmasi password harus diisi.",
                ];
            }
            if (
                formData.password &&
                formData.password_confirmation &&
                formData.password !== formData.password_confirmation
            ) {
                localErrors.password_confirmation = [
                    "Konfirmasi password tidak cocok.",
                ];
            }
            if (Object.keys(localErrors).length) {
                showFieldErrors($form, localErrors);
                Swal.fire("Gagal", "Periksa isian form.", "error");
                return;
            }
            // ---------------------------------------

            // ambil recaptcha response dengan aman
            var captcha = "";
            try {
                if (typeof grecaptcha !== "undefined") {
                    if (typeof window._resetRecaptchaWidget !== "undefined") {
                        captcha = grecaptcha.getResponse(
                            window._resetRecaptchaWidget
                        );
                    } else {
                        captcha = grecaptcha.getResponse();
                    }
                }
            } catch (err) {
                captcha = "";
            }

            if (!captcha) {
                Swal.fire(
                    "Oops!",
                    "Silakan selesaikan captcha terlebih dahulu.",
                    "error"
                );
                return;
            }
            formData["g-recaptcha-response"] = captcha;

            $.ajax({
                url: $form.attr("action"),
                method: "POST",
                data: formData,
                dataType: "json",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                },
                beforeSend: function () {
                    $btn.prop("disabled", true);
                    Swal.fire({
                        title: "Mohon tunggu...",
                        text: "Sedang memproses permintaan reset password",
                        allowOutsideClick: false,
                        didOpen: function () {
                            Swal.showLoading();
                        },
                    });
                },
                success: function (res) {
                    clearFieldErrors($form);
                    var message = res.message || "Password berhasil direset.";
                    Swal.fire({
                        title: "Berhasil",
                        text: message,
                        icon: "success",
                        allowOutsideClick: false,
                    }).then(function () {
                        var redirect = res.redirect || "{{ route('login') }}";
                        window.location = redirect;
                    });
                },
                error: function (xhr) {
                    var msg = "Terjadi kesalahan. Silakan coba lagi.";
                    try {
                        if (xhr && xhr.responseJSON) {
                            var json = xhr.responseJSON;
                            if (json.message) msg = json.message;
                            // jika ada errors per-field dari Laravel validator
                            if (json.errors) {
                                showFieldErrors($form, json.errors);
                                // jangan override msg jika ada pesan umum
                                if (!json.message) msg = "Periksa isian form.";
                            }
                        } else if (xhr.responseText) {
                            try {
                                msg =
                                    JSON.parse(xhr.responseText).message || msg;
                            } catch (e) {}
                        }
                    } catch (e) {}
                    Swal.fire("Gagal", msg, "error");
                },
                complete: function () {
                    $btn.prop("disabled", false);
                    try {
                        if (typeof grecaptcha !== "undefined") {
                            if (
                                typeof window._resetRecaptchaWidget !==
                                "undefined"
                            )
                                grecaptcha.reset(window._resetRecaptchaWidget);
                            else grecaptcha.reset();
                        }
                    } catch (e) {}
                },
            });
        });
    });
})();
