<!-- Modal Content Start -->
<div class="modal fade" id="permintaanForm" tabindex="-1" aria-labelledby="permintaanFormTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="permintaanFormTitle">Form Permohonan Toll-Manufacturing</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="card">
                        {{-- <div class="card-header">
            <h2 class="fw-bold">Form Permohonan Toll-Manufacturing</h2>
        </div> --}}
                        <div class="card-body">
                            <form action="{{ route('permintaan.store') }}" method="post" enctype="multipart/form-data"
                                id="createPermintaan">
                                @csrf
                                <div class="row">
                                    <h5 class="mb-3 fw-bold">Data Produk</h5>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="company_name" class="form-label req-label">Nama
                                                Perusahaan</label>
                                            <input type="text" class="form-control" id="company_name"
                                                name="company_name"
                                                value="{{ Auth::user()->entity->entity_name ?? '' }}" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="company_address" class="form-label req-label">Alamat
                                                Perusahaan</label>
                                            <input type="text" class="form-control" id="company_address"
                                                name="company_address"
                                                value="{{ Auth::user()->entity->entity_address_line_1 ?? '' }} {{ Auth::user()->entity->entity_address_line_2 ?? '' }}"
                                                disabled required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="pic_name" class="form-label req-label">Nama Anda</label>
                                            <input type="text" class="form-control" id="pic_name" name="pic_name"
                                                value="{{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? '' }}"
                                                disabled required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="pic_email" class="form-label req-label">E-mail Anda</label>
                                            <input type="email" class="form-control" id="pic_email" name="pic_email"
                                                value="{{ Auth::user()->email ?? '' }}" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="pic_phone" class="form-label req-label">No. Telepon / HP /
                                                Whatsapp</label>
                                            <input type="text" class="form-control" id="pic_phone" name="pic_phone"
                                                value="{{ Auth::user()->phone ?? '' }}" disabled required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="prod_name" class="form-label req-label">Nama
                                            Produk</label>
                                        <input type="text" class="form-control" id="prod_name" name="prod_name"
                                            required>

                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="act_ingredient" class="form-label req-label">Kandungan Bahan
                                            Aktif</label>
                                        <input type="text" class="form-control" id="act_ingredient"
                                            name="act_ingredient" required>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    {{-- Golongan Bahan Aktif --}}
                                    <label for="act_ingredient_group" class="form-label">Golongan Bahan Aktif</label>
                                    @include('user.permintaan.partial.actgroup')

                                    {{-- Kategori Produk --}}
                                    <label for="prod_category" class="form-label">Kategori Produk</label>
                                    @include('user.permintaan.partial.category')

                                    {{-- Lingkup Pekerjaan --}}
                                    <label for="work_scope" class="form-label">Lingkup Pekerjaan</label>
                                    @include('user.permintaan.partial.workscope')

                                    <hr>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="req_name" class="form-label req-label">Jenis Permintaan</label>
                                            <select class="form-select" id="req_name" name="req_name" required>
                                                <option value="">Pilih Jenis Permintaan</option>
                                                <option value="Tablet">Tablet</option>
                                                <option value="Kapsul">Kapsul</option>
                                                <option value="Parental">Parental</option>
                                                <option value="Cairan">Cairan</option>
                                                <option value="Powder">Powder</option>
                                                <option value="Semisolid">Semisolid</option>
                                            </select>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="req_date" class="form-label req-label">Tanggal
                                                Permintaan</label>
                                            <input type="date" class="form-control" id="req_date"
                                                name="req_date" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div id="dynamic-form" style="display: none">

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Karakteristik Produk</h5>

                                        {{-- Form Tablet --}}
                                        @include('user.permintaan.partial.tablet')

                                        {{-- Form Kapsul --}}
                                        @include('user.permintaan.partial.kapsul')

                                        {{-- Form Parental --}}
                                        @include('user.permintaan.partial.parental')

                                        {{-- Form Cairan --}}
                                        @include('user.permintaan.partial.cairan')

                                        {{-- Form Powder --}}
                                        @include('user.permintaan.partial.powder')

                                        {{-- Form Semisolid --}}
                                        @include('user.permintaan.partial.semisolid')

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Persyaratan Khusus</h5>
                                        {{-- Persyaratan Khusus --}}
                                        @include('user.permintaan.partial.spec')

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Karakteristik Kemasan</h5>
                                        @include('user.permintaan.partial.package')

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Penyedia RM / PM</h5>

                                        <div class="mb-3" for="penyedia_rm_pm">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="penyedia_rm_pm"
                                                    id="penyedia_rm_pm1" value="Phapros">
                                                <label for="penyedia_rm_pm1" class="form-check-label">Phapros</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="penyedia_rm_pm"
                                                    id="penyedia_rm_pm2" value="Principal">
                                                <label for="penyedia_rm_pm2"
                                                    class="form-check-label">Principal</label>
                                            </div>
                                        </div>

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Flowchart Proses</h5>

                                        <div class="mb-3" for="flowchart_process">
                                            <input type="text" class="form-control" id="flowchart_process"
                                                name="flowchart_process">
                                        </div>

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Cakupan Pekerjaan</h5>
                                        @include('user.permintaan.partial.coverage')

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Informasi Harga & Forecast</h5>
                                        @include('user.permintaan.partial.price')

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Catatan Lain-lain (Opsional)</h5>

                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="any_note"
                                                id="any_note">
                                        </div>

                                        <hr>

                                        <h5 class="mb-3 fw-bold">Lampiran Dokumen (Opsional, Max 1mb/file)</h5>
                                        @include('user.permintaan.partial.doc')

                                        <div class="mb-3">
                                            <input type="checkbox" name="" id="privacy-policy">
                                            <label for="privacy-policy" class="form-label">Please confirm that you
                                                agree to our
                                                <a href="#">Privacy Policy</a>.</label>
                                        </div>

                                        {{-- <button type="submit" class="btn btn-success" id="submit"
                                            disabled>Kirim</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="submit" disabled>Kirim</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Content End -->

<script src="{{ asset('js/permintaan.js') }}"></script>

@push('scripts')
    <script>
        $(document).ready(function() {
            const permintaanModal = $('#permintaanForm');
            const permintaanForm = $('#createPermintaan');

            // Event Listener saat close modal
            permintaanModal.on('hidden.bs.modal', function() {
                permintaanForm[0].reset();
                permintaanForm.find('.is-invalid').removeClass('is-invalid');
                permintaanForm.find('.invalid-feedback').html('');
                permintaanForm.find('#dynamic-form').prop('style', 'display:none');
                permintaanModal.find('#submit').prop('disabled', true);
            });

            // Create Permintaan
            $('#submit').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Mohon Tunggu',
                    text: 'Sedang mengirim permintaan...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                // ambil data dari form
                let formData = $('#createPermintaan').serialize();
                let url = "{{ route('permintaan.store') }}";

                // kirim data ke server
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Permintaan berhasil dikirim',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        }).then(() => {
                            permintaanModal.modal('hide');
                            permintaanModal.one('hidden.bs.modal', function() {
                                location.reload();
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
                            // Tambahkan pesan error umum di atas
                            Swal.fire({
                                icon: 'error',
                                title: 'Validasi Gagal',
                                text: 'Silakan periksa kembali data yang Anda masukkan.',
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Terjadi Kesalahan',
                                text: 'Tidak dapat terhubung ke server.',
                            });
                        }
                    }
                })
            })
        });
    </script>
@endpush
