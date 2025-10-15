<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content rounded shadow border-0">
        <div class="modal-header border-bottom">
            <h5 class="modal-title fw-bold" id="addPorLabel">Tambah Portofolio</h5>
            <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                    class="uil uil-times fs-4 text-dark"></i></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('porto.store') }}" method="POST" id="addPorForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Judul"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="desc" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="desc" name="desc" rows="2" placeholder="Deskripsi" required></textarea>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Portofolio</label>
                            <input type="file" class="form-control" id="image" name="image"
                                placeholder="Gambar Portofolio" required>
                            <div class="invalid-feedback"></div>
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
            <button type="submit" class="btn btn-success" id="savePor">Simpan</button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            const addPorModal = $('#addPorModal');
            const addPorForm = $('#addPorForm');

            // Event Listener saat close modal
            addPorModal.on('hidden.bs.modal', function() {
                addPorForm[0].reset();
                addPorForm.find('.is-invalid').removeClass('is-invalid');
                addPorForm.find('.invalid-feedback').html('');
            });

            // Create Permintaan
            $('#savePor').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Mohon Tunggu',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                let form = $('#addPorForm');
                let url = form.attr('action');
                let formData = new FormData(form[0]);

                // kirim data ke server
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success,
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        }).then(() => {
                            addPorModal.modal('hide');
                            addPorModal.one('hidden.bs.modal', function() {
                                $('#porTable').DataTable().ajax.reload(null,
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

            $('#addPorForm').on('input change', 'input, textarea, select', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').html('');
            });
        });
    </script>
@endpush
