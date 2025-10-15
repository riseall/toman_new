<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="updateProductLabel{{ $product->id }}">Edit Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container">
            <form action="{{ route('product.update', $product->id) }}" method="POST" class="mb-4"
                id="updateProdForm">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3">
                        <label for="prod_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="prod_name" name="prod_name"
                            placeholder="Nama Produk" value="{{ $product->prod_name }}" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="prod_bets_size" class="form-label">Bets Size</label>
                            <input type="text" class="form-control" id="prod_bets_size" name="prod_bets_size"
                                placeholder="Bets Size" value="{{ $product->prod_bets_size }}" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="prod_exp_yr" class="form-label">ED Product</label>
                            <input type="text" class="form-control" id="prod_exp_yr" name="prod_exp_yr"
                                placeholder="ED Product" value="{{ $product->prod_exp_yr }}" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="prod_package" class="form-label">Kemasan</label>
                        <input type="text" class="form-control" id="prod_package" name="prod_package"
                            placeholder="Kemasan" value="{{ $product->prod_package }}" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="prod_img" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="prod_img" name="prod_img"
                            placeholder="Gambar Produk" value="{{ $product->prod_img }}" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="row">
                        <label class="col-3 col-lg-1 form-check-label" for="prod_is_active">Active</label>
                        <div class="col-2 form-check form-switch">
                            <input type="hidden" name="prod_is_active" value="0">
                            <input type="checkbox" name="prod_is_active" class="form-check-input" id="prod_is_active"
                                value="1"
                                {{ old('prod_is_active', $product->prod_is_active ?? 1) ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" id="updateProd">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const updateProdModal = $('#updateProdModal');
        const updateProdForm = $('#updateProdForm');

        updateProdModal.on('hidden.bs.modal', function() {
            updateProdForm[0].reset();
            updateProdForm.find('.is-invalid').removeClass('is-invalid');
            updateProdForm.find('.invalid-feedback').html('');
        });

        $('#updateProd').on('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Mohon Tunggu',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            let form = $('#updateProdForm');
            let url = form.attr('action');
            let formData = new FormData(form[0]);

            $.ajax({
                url: url,
                type: 'POST',
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
                        updateProdModal.modal('hide');
                        updateProdModal.one('hidden.bs.modal', function() {
                            $('#productTable').DataTable().ajax.reload(null,
                                false);
                        });
                    });
                },
                error: function(xhr) {
                    Swal.close();

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, val) {
                            let inputField = updateProdForm.find(`#${key}`);
                            if (inputField.length) {
                                inputField.addClass('is-invalid');
                                inputField.next('.invalid-feedback').html(val[0]);
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
        $('#updateProdForm').on('input change', 'input, textarea, select', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').html('');
        });
    });
</script>
