<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content rounded shadow border-0">
        <div class="modal-header border-bottom">
            <h5 class="modal-title fw-bold" id="addCLabel">Tambah Perusahaan</h5>
            <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                    class="uil uil-times fs-4 text-dark"></i></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('company.store') }}" method="POST" id="addCForm">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="entity_name" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="entity_name" id="entity_name" class="form-control"
                                placeholder="Nama Perusahaan" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="entity_email" class="form-label">Email</label>
                                <input type="email" name="entity_email" id="entity_email" class="form-control"
                                    placeholder="Email" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="entity_phone" class="form-label">Telepon</label>
                                <input type="text" name="entity_phone" id="entity_phone" class="form-control"
                                    placeholder="Telepon" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="entity_address_line_1" class="form-label">Alamat</label>
                            <textarea name="entity_address_line_1" class="form-control" id="entity_address_line_1" cols="30" rows="2"
                                placeholder="Alamat" required></textarea>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="entity_kota" class="form-label">Kota</label>
                            <input type="text" name="entity_kota" id="entity_kota" class="form-control"
                                placeholder="Kota" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success" id="saveCompany">Simpan</button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            const addCModal = $('#addCModal');
            const addCForm = $('#addCForm');

            // Event Listener saat close modal
            addCModal.on('hidden.bs.modal', function() {
                addCForm[0].reset();
                addCForm.find('.is-invalid').removeClass('is-invalid');
                addCForm.find('.invalid-feedback').html('');
            });

            // Create Permintaan
            $('#saveCompany').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Mohon Tunggu',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                let form = $('#addCForm');
                let data = form.serialize();
                let url = form.attr('action');

                // kirim data ke server
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data,
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
                            addCModal.modal('hide');
                            addCModal.one('hidden.bs.modal', function() {
                                $('#companyTable').DataTable().ajax.reload(null,
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

            $('#addCForm').on('input change', 'input, textarea, select', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').html('');
            });
        });
    </script>
@endpush
