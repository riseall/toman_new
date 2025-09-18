<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content rounded shadow border-0">
        <div class="modal-header border-bottom">
            <h5 class="modal-title fw-bold" id="addProdLabel">Tambah Produk</h5>
            <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                    class="uil uil-times fs-4 text-dark"></i></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('product.store') }}" method="POST" id="addProdForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="prod_name" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="prod_name" name="Nama Produk"
                                placeholder="Nama Produk" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="prod_bets_size" class="form-label">Bets Size</label>
                                <input type="text" class="form-control" id="prod_bets_size" name="Bets Size"
                                    placeholder="Bets Size" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="prod_exp_yr" class="form-label">ED Product</label>
                                <input type="text" class="form-control" id="prod_exp_yr" name="ED Product"
                                    placeholder="ED Product" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="prod_package" class="form-label">Kemasan</label>
                            <input type="text" class="form-control" id="prod_package" name="Kemasan"
                                placeholder="Kemasan" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="prod_img" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" id="prod_img" name="Gambar Produk"
                                placeholder="Gambar Produk" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="row">
                            <label class="col-3 col-lg-1 form-check-label" for="prod_is_active">Active</label>
                            <div class="col-2 form-check form-switch">
                                <input type="hidden" name="prod_is_active" value="0">
                                <input type="checkbox" name="prod_is_active" class="form-check-input" id="is_active"
                                    value="1" checked>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success" id="saveProduct">Simpan</button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            const addProdModal = $('#addProdModal');
            const addProdForm = $('#addProdForm');

            // Event Listener saat close modal
            addProdModal.on('hidden.bs.modal', function() {
                addProdForm[0].reset();
                addProdForm.find('.is-invalid').removeClass('is-invalid');
                addProdForm.find('.invalid-feedback').html('');
            });

            // Create Permintaan
            $('#saveProduct').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Mohon Tunggu',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                let form = $('#addProdForm');
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
                            addProdModal.modal('hide');
                            addProdModal.one('hidden.bs.modal', function() {
                                $('#productTable').DataTable().ajax.reload(null,
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

            $('#addProdForm').on('input change', 'input, textarea, select', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').html('');
            });
        });
    </script>
@endpush
