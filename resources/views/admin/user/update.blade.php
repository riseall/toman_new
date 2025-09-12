<div class="modal-header">
    <h5 class="modal-title" id="updateUserLabel{{ $user->id }}">Edit User</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="container">
        <form action="{{ route('user.update', $user->id) }}" method="POST" id="updateUserForm">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nama Depan</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Nama Belakang</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control"
                            value="{{ old('username', $user->username) }}">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telepon</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <input type="password" name="password" id="password{{ $user->id }}" class="form-control"
                                placeholder="Password" required>
                            <span id="togglePassword"
                                onclick="togglePassword('password{{ $user->id }}', 'eyeIcon{{ $user->id }}')"
                                class="input-group-text bg-light text-muted border-1" style="cursor:pointer;">
                                <span id="eyeIcon{{ $user->id }}" class="mdi mdi-eye-outline"></span>
                            </span>
                        </div>
                        <div class="invalid-feedback" id="password-feedback"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <div class="input-group">
                            <input type="password" name="password_confirmation"
                                id="password_confirmation{{ $user->id }}" class="form-control"
                                placeholder="Konfirmasi Password" required>
                            <span id="togglePasswordConfirm"
                                onclick="togglePassword('password_confirmation{{ $user->id }}', 'eyeIconConfirm{{ $user->id }}')"
                                class="input-group-text bg-light text-muted border-1" style="cursor:pointer;">
                                <span id="eyeIconConfirm{{ $user->id }}" class="mdi mdi-eye-outline"></span>
                            </span>
                        </div>
                        <div class="invalid-feedback" id="password_confirmation-feedback"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="role" class="form-label">Role:</label>
                        <select class="form-select" id="role" name="role">
                            <option value="">-- Pilih Role --</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}"
                                    {{ old('role', $userRole) == $role->name ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="entity_code" class="form-label">Perusahaan</label>
                        <select name="entity_code" id="entity_code" class="form-select" required>
                            <option value="">-- Pilih Perusahaan --</option>
                            @foreach ($entities as $entity)
                                <option value="{{ $entity->entity_code }}"
                                    {{ old('entity_code', $userEntity) == $entity->entity_code ? 'selected' : '' }}>
                                    {{ $entity->entity_name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-1 form-check-label" for="is_active_{{ $user->id }}">Active</label>
                    <div class=" col-2 form-check form-switch">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active"
                            id="is_active_{{ $user->id }}" value="1"
                            {{ old('is_active', $user->is_active ?? 1) ? 'checked' : '' }}>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success" id="updateUser">Simpan</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const updateUserModal = $('#updateUserModal');
        const updateUserForm = $('#updateUserForm');

        updateUserModal.on('hidden.bs.modal', function() {
            updateUserForm[0].reset();
            updateUserForm.find('.is-invalid').removeClass('is-invalid');
            updateUserForm.find('.invalid-feedback').html('');
        });

        $('#updateUser').on('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Mohon Tunggu',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            let form = $('#updateUserForm');
            let url = form.attr('action');
            let data = form.serialize();

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: response.success,
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true
                    }).then(() => {
                        updateUserModal.modal('hide');
                        updateUserModal.one('hidden.bs.modal', function() {
                            $('#userTable').DataTable().ajax.reload(null,
                                false);
                        });
                    });
                },
                error: function(xhr) {
                    Swal.close();

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, val) {
                            let inputField = $(`#${key}`);
                            if (inputField.length) {
                                inputField.addClass('is-invalid');
                                inputField.next('.invalid-feedback').html(value[0]);
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Terjadi kesalahan saat menyimpan data.',
                        });
                    }
                }
            });
        });
        $('#updateUserForm').on('input change', 'input, textarea, select', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').html('');
        });
    });
</script>
