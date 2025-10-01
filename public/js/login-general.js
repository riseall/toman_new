"use strict";

// Class Definition
var KTLogin = (function () {
    var _login;

    var _recaptchaSignInWidget = null;
    var _recaptchaForgotWidget = null;

    var _renderRecaptchas = function () {
        // tunggu grecaptcha tersedia
        if (typeof grecaptcha === "undefined") {
            setTimeout(_renderRecaptchas, 300);
            return;
        }
        var siteKey = window.recaptchaSiteKey || null;
        if (!siteKey) return;
        if (
            document.getElementById("recaptcha-signin") &&
            _recaptchaSignInWidget === null
        ) {
            _recaptchaSignInWidget = grecaptcha.render("recaptcha-signin", {
                sitekey: siteKey,
            });
        }
        if (
            document.getElementById("recaptcha-forgot") &&
            _recaptchaForgotWidget === null
        ) {
            _recaptchaForgotWidget = grecaptcha.render("recaptcha-forgot", {
                sitekey: siteKey,
            });
        }
    };

    var _showForm = function (form) {
        var cls = "login-" + form + "-on";
        var form = "kt_login_" + form + "_form";

        _login.removeClass("login-forgot-on");
        _login.removeClass("login-signin-on");
        _login.removeClass("login-signup-on");

        _login.addClass(cls);
    };

    var _handleSignInForm = function () {
        // Handle forgot button
        $("#kt_login_forgot").on("click", function (e) {
            e.preventDefault();
            _showForm("forgot");
        });
    };

    var _handleForgotForm = function () {
        // Handle cancel button
        $("#kt_login_forgot_cancel").on("click", function (e) {
            e.preventDefault();
            _showForm("signin");
        });

        // Handle submit button
        $("#kt_login_forgot_submit").on("click", function (e) {
            e.preventDefault();

            let email = $("#email").val();

            if (!email) {
                Swal.fire("Oops!", "Email harus diisi.", "error");
                return;
            }

            var captchaToken = "";
            try {
                if (
                    typeof grecaptcha !== "undefined" &&
                    _recaptchaForgotWidget !== null
                ) {
                    captchaToken = grecaptcha.getResponse(
                        _recaptchaForgotWidget
                    );
                }
            } catch (err) {
                captchaToken = "";
            }

            if (!captchaToken) {
                Swal.fire(
                    "Oops!",
                    "Silakan selesaikan captcha terlebih dahulu.",
                    "error"
                );
                return;
            }

            // ambil token CSRF dari form
            let token = $("#kt_login_forgot_form input[name='_token']").val();

            $.ajax({
                url: window.Laravel.passwordEmailUrl,
                type: "POST",
                data: {
                    _token: token,
                    email: email,
                    "g-recaptcha-response": captchaToken,
                },
                beforeSend: function () {
                    Swal.fire({
                        title: "Mohon Tunggu...",
                        text: "Sedang mengirim email reset password",
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        },
                    });
                },
                success: function (response) {
                    Swal.fire(
                        "Berhasil!",
                        response.message ||
                            "Link reset password sudah dikirim ke email kamu.",
                        "success"
                    );

                    // reset form
                    $("#kt_login_forgot_form")[0].reset();
                    try {
                        grecaptcha.reset(_recaptchaForgotWidget);
                    } catch (e) {}
                },
                error: function (xhr) {
                    let err = xhr.responseJSON;
                    let msg =
                        (err &&
                            (err.message ||
                                (err.errors &&
                                    err.errors.email &&
                                    err.errors.email[0]))) ||
                        "Gagal mengirim email. Coba lagi.";
                    Swal.fire("Oops!", msg, "error");
                    try {
                        grecaptcha.reset(_recaptchaForgotWidget);
                    } catch (e) {}
                },
            });
        });
    };

    // Public Functions
    return {
        // public functions
        init: function () {
            _login = $("#kt_login");

            _renderRecaptchas();
            _handleSignInForm();
            _handleForgotForm();
        },
    };
})();

// Class Initialization
jQuery(document).ready(function () {
    KTLogin.init();
});
