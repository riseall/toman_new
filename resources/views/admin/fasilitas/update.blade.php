<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="updateFasLabel{{ $fasilitas->id }}">Edit Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container">
            <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" class="mb-4"
                id="updateFasForm">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3">
                        <label for="dosage_form" class="form-label">Nama Fasilitas</label>
                        <input type="text" class="form-control" id="dosage_form" name="dosage_form"
                            placeholder="Nama Fasilitas" value="{{ $fasilitas->dosage_form }}" required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Jenis</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Jenis"
                                value="{{ $fasilitas->type }}" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <select name="unit" id="unit" class="form-select" required>
                                <option value="">-- Pilih Unit --</option>
                                <option value="Tablet" {{ $fasilitas->unit == 'Tablet' ? 'selected' : '' }}>Tablet
                                </option>
                                <option value="Capsule" {{ $fasilitas->unit == 'Capsule' ? 'selected' : '' }}>Kapsul
                                </option>
                                <option value="Ampoule" {{ $fasilitas->unit == 'Ampoule' ? 'selected' : '' }}>Ampul
                                </option>
                                <option value="Vial" {{ $fasilitas->unit == 'Vial' ? 'selected' : '' }}>Vial</option>
                                <option value="Bottle" {{ $fasilitas->unit == 'Bottle' ? 'selected' : '' }}>Botol
                                </option>
                                <option value="Tube" {{ $fasilitas->unit == 'Tube' ? 'selected' : '' }}>Tube</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-3 col-lg-1 form-check-label" for="is_active">Active</label>
                        <div class="col-2 form-check form-switch">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" class="form-check-input" id="is_active"
                                value="1" {{ old('is_active', $fasilitas->is_active ?? 1) ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" id="updateFas">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const updateFasModal = $('#updateFasModal');
        const updateFasForm = $('#updateFasForm');

        updateFasModal.on('hidden.bs.modal', function() {
            updateFasForm[0].reset();
            updateFasForm.find('.is-invalid').removeClass('is-invalid');
            updateFasForm.find('.invalid-feedback').html('');
        });

        $('#updateFas').on('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Mohon Tunggu',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            let form = $('#updateFasForm');
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
                        updateFasModal.modal('hide');
                        updateFasModal.one('hidden.bs.modal', function() {
                            $('#fasTable').DataTable().ajax.reload(
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
        $('#updateFasForm').on('input change', 'input, textarea, select', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').html('');
        });
    });
</script>
