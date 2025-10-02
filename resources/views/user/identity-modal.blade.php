<!-- Modal Lengkapi Identitas -->
<div class="modal fade" data-bs-backdrop="static" id="identityModal" tabindex="-1" aria-labelledby="identityModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lengkapi Identitas Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <form id="identityForm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="phone" placeholder="Telepon"
                            value="{{ Auth::user()->phone ?? '' }}" required>
                    </div>

                    <div class="mb-2">
                        <label for="entity_search" class="form-label">Perusahaan</label>
                        <input type="text" id="entity_search" class="form-control" placeholder="Cari perusahaan...">
                        <input type="hidden" name="entity_code" id="entity_code">
                        <div id="entitySuggestions" class="list-group mt-1"></div>
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
                                    <input type="email" name="entity_email" id="entity_email" class="form-control"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="entity_phone" class="form-label">Telepon</label>
                                    <input type="text" name="entity_phone" id="entity_phone" class="form-control"
                                        placeholder="Telepon">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="entity_address_line_1" class="form-label">Alamat</label>
                                <textarea name="entity_address_line_1" id="entity_address_line_1" cols="30" rows="2" class="form-control"
                                    placeholder="Alamat"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="entity_kota" class="form-label">Kota</label>
                                <input type="text" name="entity_kota" id="entity_kota" class="form-control"
                                    placeholder="Kota">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Nanti Saja</button>
                <button class="btn btn-primary" id="saveIdentity">Simpan</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.Laravel = {
            url: "{{ route('entities.search') }}"
        };
    </script>
    <script src="{{ asset('js/search-company.js') }}"></script>
    <script>
        $('#saveIdentity').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('profile.identity.save') }}",
                type: "POST",
                data: $('#identityForm').serialize(),
                success: function(res) {
                    if (res.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: res.success
                        }).then(() => {
                            // localStorage.setItem('showPermintaanAfterReload', '1');
                            $('#identityModal').modal('hide');
                            location.reload();
                        });
                    }
                },
                // complete: function() {
                //     // Setelah reload, buka modal permintaan
                //     $(window).on('load', function() {
                //         $('#permintaanForm').modal('show');
                //     });
                // },
                error: function(xhr) {
                    let message = 'Terjadi kesalahan.';
                    if (xhr.responseJSON) {
                        if (xhr.responseJSON.message) message = xhr.responseJSON.message;
                        else if (xhr.responseJSON.errors) {
                            // ambil pesan error pertama bila ada validasi
                            const firstKey = Object.keys(xhr.responseJSON.errors)[0];
                            message = xhr.responseJSON.errors[firstKey][0];
                        }
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: message
                    })
                }
            });
        });
    </script>
    {{-- <script>
        // cek flag saat halaman dimuat ulang — kalau ada, buka modal permintaan dan hapus flag
        document.addEventListener('DOMContentLoaded', function() {
            if (localStorage.getItem('showPermintaanAfterReload') === '1') {
                localStorage.removeItem('showPermintaanAfterReload');
                var permintaanEl = document.getElementById('permintaanForm');
                if (permintaanEl) {
                    var permintaanModal = new bootstrap.Modal(permintaanEl);
                    permintaanModal.show();
                }
            }
        });
    </script> --}}
@endpush
