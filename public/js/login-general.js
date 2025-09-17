"use strict";

// Class Definition
var KTLogin = (function () {
    var _login;

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

            // ambil token CSRF dari form
            let token = $("#kt_login_forgot_form input[name='_token']").val();

            $.ajax({
                url: "/forgot-password", // sesuai route('password.email')
                type: "POST",
                data: {
                    _token: token,
                    email: email,
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
                },
            });
        });
    };

    // Public Functions
    return {
        // public functions
        init: function () {
            _login = $("#kt_login");

            _handleSignInForm();
            _handleForgotForm();
        },
    };
})();

// Class Initialization
jQuery(document).ready(function () {
    KTLogin.init();
});
