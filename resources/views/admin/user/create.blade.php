<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content rounded shadow border-0">
        <div class="modal-header border-bottom">
            <h5 class="modal-title fw-bold" id="addUserLabel">Tambah User</h5>
            <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                    class="uil uil-times fs-4 text-dark"></i></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('user.store') }}" method="POST" id="addUserForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">Nama Depan</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    placeholder="Nama Depan" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Nama Belakang</label>
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                    placeholder="Nama Belakang" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Username" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telepon</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Telepon" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Password" required>
                                    <span id="togglePassword" onclick="togglePassword('password', 'eyeIcon')"
                                        class="input-group-text bg-light text-muted border-1" style="cursor:pointer;">
                                        <span id="eyeIcon" class="mdi mdi-eye-outline"></span>
                                    </span>
                                </div>
                                <div class="invalid-feedback" id="password-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="Konfirmasi Password" required>
                                    <span id="togglePasswordConfirm"
                                        onclick="togglePassword('password_confirmation', 'eyeIconConfirm')"
                                        class="input-group-text bg-light text-muted border-1" style="cursor:pointer;">
                                        <span id="eyeIconConfirm" class="mdi mdi-eye-outline"></span>
                                    </span>
                                </div>
                                <div class="invalid-feedback" id="password_confirmation-feedback"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="role" class="form-label">Role:</label>
                                <select class="form-select" id="role" name="role" required>
                                    <option value="">-- Pilih Role --</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="entity_search" class="form-label">Perusahaan</label>
                                <input type="text" id="entity_search" class="form-control"
                                    placeholder="Cari perusahaan...">
                                <input type="hidden" name="entity_code" id="entity_code">
                                <div id="entitySuggestions" class="list-group mt-1"></div>
                            </div>
                        </div>

                        {{-- Form tambah perusahaan baru --}}
                        <div id="newEntityInput" class="mt-3 d-none">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="entity_name" class="form-label">Nama Perusahaan</label>
                                    <input type="text" name="entity_name" id="entity_name" class="form-control"
                                        placeholder="Nama Perusahaan">
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="entity_email" class="form-label">Email</label>
                                        <input type="email" name="entity_email" id="entity_email"
                                            class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="entity_phone" class="form-label">Telepon</label>
                                        <input type="text" name="entity_phone" id="entity_phone"
                                            class="form-control" placeholder="Telepon">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="entity_address_line_1" class="form-label">Alamat</label>
                                    <textarea name="entity_address_line_1" id="entity_address_line_1" cols="30" rows="2"
                                        class="form-control" placeholder="Alamat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="entity_kota" class="form-label">Kota</label>
                                    <input type="text" name="entity_kota" id="entity_kota" class="form-control"
                                        placeholder="Kota">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-3 col-lg-1 form-check-label" for="is_active">Active</label>
                            <div class="col-2 form-check form-switch">
                                <input type="hidden" name="is_active" value="0">
                                <input type="checkbox" name="is_active" class="form-check-input" id="is_active"
                                    value="1" checked>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success" id="saveUser">Simpan</button>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/search-company.js') }}"></script>
    <script>
        $(document).ready(function() {
            const addUserModal = $('#addUserModal');
            const addUserForm = $('#addUserForm');

            // Event Listener saat close modal
            addUserModal.on('hidden.bs.modal', function() {
                addUserForm[0].reset();
                addUserForm.find('.is-invalid').removeClass('is-invalid');
                addUserForm.find('.invalid-feedback').html('');
            });

            // Create Permintaan
            $('#saveUser').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Mohon Tunggu',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                // ambil data dari form
                let formData = $('#addUserForm').serialize();
                let url = "{{ route('user.store') }}";

                // kirim data ke server
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success,
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        }).then(() => {
                            addUserModal.modal('hide');
                            addUserModal.one('hidden.bs.modal', function() {
                                $('#userTable').DataTable().ajax.reload(null,
                                    false);
                            });
                        });
                    },
                    error: function(xhr) {
                        Swal.close();

                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
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
                })
            })

            $('#addUserForm').on('input change', 'input, textarea, select', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').html('');
            });
        });
    </script>
@endpush
