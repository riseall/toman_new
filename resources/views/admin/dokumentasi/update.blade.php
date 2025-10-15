<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="updateDokLabel{{ $dok->id }}">Edit Dokumentasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container">
            <form action="{{ route('dok.update', $dok->id) }}" method="POST" class="mb-4" id="updateDokForm">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Judul"
                            value="{{ $dok->title }}" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Dokumentasi</label>
                        <input type="file" class="form-control" id="image" name="image"
                            placeholder="Dokumentasi" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="row">
                        <label class="col-3 col-lg-1 form-check-label" for="is_active">Active</label>
                        <div class="col-2 form-check form-switch">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" class="form-check-input" id="is_active"
                                value="1" {{ old('is_active', $dok->is_active ?? 1) ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" id="updateDok">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const updateDokModal = $('#updateDokModal');
        const updateDokForm = $('#updateDokForm');

        updateDokModal.on('hidden.bs.modal', function() {
            updateDokForm[0].reset();
            updateDokForm.find('.is-invalid').removeClass('is-invalid');
            updateDokForm.find('.invalid-feedback').html('');
        });

        $('#updateDok').on('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Mohon Tunggu',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            let form = $('#updateDokForm');
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
                        updateDokModal.modal('hide');
                        updateDokModal.one('hidden.bs.modal', function() {
                            $('#dokTable').DataTable().ajax.reload(
                                null,
                                false);
                        });
                    });
                },
                error: function(xhr) {
                    Swal.close();

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, val) {
                            let inputField = updateDokForm.find(`#${key}`);
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
        $('#updateDokForm').on('input change', 'input, textarea, select', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').html('');
        });
    });
</script>
