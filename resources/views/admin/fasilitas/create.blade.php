<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content rounded shadow border-0">
        <div class="modal-header border-bottom">
            <h5 class="modal-title fw-bold" id="addFasLabel">Tambah Fasilitas</h5>
            <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                    class="uil uil-times fs-4 text-dark"></i></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('fasilitas.store') }}" method="POST" id="addFasForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="dosage_form" class="form-label">Nama Fasilitas</label>
                            <input type="text" class="form-control" id="dosage_form" name="dosage_form"
                                placeholder="Nama Fasilitas" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="type" class="form-label">Jenis</label>
                                <input type="text" class="form-control" id="type" name="type"
                                    placeholder="Jenis" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="unit" class="form-label">Unit</label>
                                <select name="unit" id="unit" class="form-select" required>
                                    <option value="">-- Pilih Unit --</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Capsule">Kapsul</option>
                                    <option value="Ampoule">Ampul</option>
                                    <option value="Vial">Vial</option>
                                    <option value="Bottle">Botol</option>
                                    <option value="Tube">Tube</option>

                                </select>
                                <div class="invalid-feedback"></div>
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
            <button type="submit" class="btn btn-success" id="saveFas">Simpan</button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            const addFasModal = $('#addFasModal');
            const addFasForm = $('#addFasForm');

            // Event Listener saat close modal
            addFasModal.on('hidden.bs.modal', function() {
                addFasForm[0].reset();
                addFasForm.find('.is-invalid').removeClass('is-invalid');
                addFasForm.find('.invalid-feedback').html('');
            });

            // Create Permintaan
            $('#saveFas').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Mohon Tunggu',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                let form = $('#addFasForm');
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
                            addFasModal.modal('hide');
                            addFasModal.one('hidden.bs.modal', function() {
                                $('#fasTable').DataTable().ajax.reload(null,
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

            $('#addFasForm').on('input change', 'input, textarea, select', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').html('');
            });
        });
    </script>
@endpush
