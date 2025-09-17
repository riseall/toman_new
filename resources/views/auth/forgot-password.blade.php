<div class="login-form login-forgot py-11" style="display:none;">
    <form method="POST" action="{{ route('password.email') }}" id="kt_login_forgot_form">
        @csrf
        <!-- Title -->
        <div class="text-center pb-8">
            <h2 class="fw-bolder text-dark fs-2">Lupa Password?</h2>
            <span class="text-muted fs-6">Silakan masukkan alamat email Anda.</span>
        </div>

        <!-- Input Email -->
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg fs-6" type="email"
                placeholder="Email" name="email" autocomplete="off" required />
            @error('email')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Buttons -->
        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
            <button type="submit" class="btn btn-primary fw-bolder fs-6 px-8 py-4 my-3 mx-3">Kirim</button>
            <button type="button" id="kt_login_forgot_cancel"
                class="btn btn-light-danger fw-bolder fs-6 px-8 py-4 my-3">Batal</button>
        </div>
    </form>
</div>
