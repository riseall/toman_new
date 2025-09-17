<div class="modal-header">
    <h5 class="modal-title" id="updateCLabel{{ $company->entity_code }}">Edit Perusahaan</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="container">
        <form action="{{ route('company.update', $company->entity_code) }}" method="POST" id="updateCForm">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3">
                    <label for="entity_name" class="form-label">Nama Perusahaan</label>
                    <input type="text" name="entity_name" id="entity_name" class="form-control"
                        value="{{ $company->entity_name }}" placeholder="Nama Perusahaan" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="entity_email" class="form-label">Email</label>
                        <input type="email" name="entity_email" id="entity_email" class="form-control"
                            value="{{ $company->entity_email }}" placeholder="Email" required>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="entity_phone" class="form-label">Telepon</label>
                        <input type="text" name="entity_phone" id="entity_phone" class="form-control"
                            value="{{ $company->entity_phone }}" placeholder="Telepon" required>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="entity_address_line_1" class="form-label">Alamat</label>
                    <textarea name="entity_address_line_1" class="form-control" id="entity_address_line_1" cols="30" rows="2"
                        placeholder="Alamat" required>{{ $company->entity_address_line_1 }}</textarea>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="mb-3">
                    <label for="entity_kota" class="form-label">Kota</label>
                    <input type="text" name="entity_kota" id="entity_kota" class="form-control"
                        value="{{ $company->entity_kota }}" placeholder="Kota" required>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success" id="updateC">Simpan</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const updateCModal = $('#updateCModal');
        const updateCForm = $('#updateCForm');

        updateCModal.on('hidden.bs.modal', function() {
            updateCForm[0].reset();
            updateCForm.find('.is-invalid').removeClass('is-invalid');
            updateCForm.find('.invalid-feedback').html('');
        });

        $('#updateC').on('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Mohon Tunggu',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            let form = $('#updateCForm');
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
                        updateCModal.modal('hide');
                        updateCModal.one('hidden.bs.modal', function() {
                            $('#companyTable').DataTable().ajax.reload(null,
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
        $('#updateCForm').on('input change', 'input, textarea, select', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').html('');
        });
    });
</script>
