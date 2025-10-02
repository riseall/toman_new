<!-- Modal Content Start -->
<div class="modal fade" id="kalibrasiModal" tabindex="-1" aria-labelledby="kalibrasiTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="kalibrasiTitle">Form Pendaftaran Layanan Jasa Kalibrasi</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('kalibrasi.store') }}" method="POST" id="kalibrasiForm"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <h5 class="mb-3 fw-bold">Data Perusahaan</h5>
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
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="npwp" class="form-label req-label">N.P.W.P</label>
                                            <input type="text" class="form-control" id="npwp" name="npwp"
                                                value="{{ isset(Auth::user()->kalibrasis) ? Auth::user()->kalibrasis->first()->npwp ?? '' : '' }}">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="npwp_address" class="form-label req-label">Alamat
                                                N.P.W.P</label>
                                            <input type="text" class="form-control" id="npwp_address"
                                                name="npwp_address"
                                                value="{{ isset(Auth::user()->kalibrasis) ? Auth::user()->kalibrasis->first()->npwp_address ?? '' : '' }}">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="entity_phone" class="form-label req-label">Telp.</label>
                                            <input type="text" class="form-control" id="entity_phone"
                                                name="entity_phone"
                                                value="{{ Auth::user()->entity->entity_phone ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="fax" class="form-label req-label">Fax.</label>
                                            <input type="text" class="form-control" id="fax" name="fax"
                                                value="{{ isset(Auth::user()->kalibrasis) ? Auth::user()->kalibrasis->first()->fax ?? '' : '' }}">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pic_name" class="form-label req-label">Contact Person /
                                                Penanggung Jawab</label>
                                            <input type="text" class="form-control" id="pic_name" name="pic_name"
                                                value="{{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? '' }}"
                                                disabled required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pic_email" class="form-label req-label">E-mail</label>
                                            <input type="email" class="form-control" id="pic_email" name="pic_email"
                                                value="{{ Auth::user()->email ?? '' }}" disabled required>
                                        </div>
                                    </div>

                                    <hr class="my-3">

                                    <h5 class="mb-3 fw-bold">Data Alat</h5>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tool_name" class="form-label req-label">Nama Alat</label>
                                            <input type="text" class="form-control" id="tool_name"
                                                name="tool_name">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tool_brand" class="form-label req-label">Merk Alat</label>
                                            <input type="text" class="form-control" id="tool_brand"
                                                name="tool_brand">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tool_spec" class="form-label req-label">Spesifikasi Alat (rentang
                                            ukur, ketelitian, kelas, dll.)</label>
                                        <textarea name="tool_spec" class="form-control" id="tool_spec" cols="20" rows="3"></textarea>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="tool_type" class="form-label req-label">Model / Type
                                                Alat</label>
                                            <input type="text" class="form-control" id="tool_type"
                                                name="tool_type">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="tool_no" class="form-label req-label">No. Seri Alat</label>
                                            <input type="text" class="form-control" id="tool_no"
                                                name="tool_no">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="tool_amount" class="form-label req-label">Jumlah Alat</label>
                                            <input type="text" class="form-control" id="tool_amount"
                                                name="tool_amount">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="certif_cp" class="form-label req-label">Copy Sertifikat
                                                Terakhir</label>
                                            <input type="text" class="form-control" id="certif_cp"
                                                name="certif_cp">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="certif_no" class="form-label req-label">No. Akreditasi
                                                KAN</label>
                                            <input type="text" class="form-control" id="certif_no"
                                                name="certif_no">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="cal_range" class="form-label req-label">Rentang Ukur Kalibrasi
                                            yang Diminta</label>
                                        <input type="text" class="form-control" id="cal_range" name="cal_range">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="certif_name" class="form-label req-label">Nama Pemilik Alat
                                                pada Sertifikat</label>
                                            <input type="text" class="form-control" id="certif_name"
                                                name="certif_name">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="certif_address" class="form-label req-label">Alamat Pemilik
                                                Alat pada Sertifikat</label>
                                            <input type="text" class="form-control" id="certif_address"
                                                name="certif_address">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <input type="checkbox" name="" id="privacy-policy">
                                        <label for="privacy-policy" class="form-label">Please confirm that you
                                            agree to our
                                            <a href="#" onclick="togglePolicy()">Privacy Policy</a>.</label>
                                    </div>

                                    <div id="policy"
                                        style="display:none; margin-top:10px; max-height:300px; overflow:auto; border:1px solid #ccc; padding:10px;">
                                        @include('user.privacy-policy')
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="submitKalibrasi" disabled>Kirim</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const privacyPolicy = document.getElementById("privacy-policy");
        const submitButton = document.getElementById("submitKalibrasi");

        // Atur status awal tombol submit
        submitButton.disabled = !privacyPolicy.checked;

        // Event listener untuk checkbox privacy policy
        privacyPolicy.addEventListener("change", function() {
            submitButton.disabled = !this.checked;
        });

        $(document).ready(function() {
            const kalibrasiModal = $('#kalibrasiModal');
            const kalibrasiForm = $('#kalibrasiForm');

            // Event Listener saat close modal
            kalibrasiModal.on('hidden.bs.modal', function() {
                kalibrasiForm[0].reset();
                kalibrasiForm.find('.is-invalid').removeClass('is-invalid');
                kalibrasiForm.find('.invalid-feedback').html('');
                kalibrasiModal.find('#submitKalibrasi').prop('disabled', true);
            });

            // Create Permintaan
            $('#submitKalibrasi').click(function(e) {
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
                let formElement = document.getElementById("kalibrasiForm");
                let formData = new FormData(formElement);
                let url = "{{ route('kalibrasi.store') }}";

                // kirim data ke server
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Permintaan berhasil dikirim',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        }).then(() => {
                            kalibrasiModal.modal('hide');
                            kalibrasiModal.one('hidden.bs.modal', function() {
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
                                title: 'Terjadi Kesalahan',
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

            $('#kalibrasiForm').on('input change', 'input, textarea, select', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').html('');
            });
        });
    </script>
    <script>
        function togglePolicy() {
            const el = document.getElementById("policy");
            el.style.display = el.style.display === "none" ? "block" : "none";
        }
    </script>
@endpush
