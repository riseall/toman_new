@extends('admin.layouts.app', [
    'title' => 'Detail Permintaan Kalibrasi',
])

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h6 class="mb-0 fs-5 fw-bold">Detail Permintaan Kalibrasi</h6>
                            <span class="fw-semibold text-primary">{{ $kalibrasi->entity_name }}</span>
                        </div>

                        <div class="mb-0 position-relative">
                            <button type="button" class="btn btn-primary fs-7"
                                onclick="window.location.href='{{ route('kalibrasi.index') }}'"> Kembali
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="kaliTable">
                            <thead>
                                <th>No</th>
                                <th>N.P.W.P</th>
                                <th>Alamat N.P.W.P</th>
                                <th>Nama Alat</th>
                                <th>Merk Alat</th>
                                <th>Model Alat</th>
                                <th>No Seri Alat</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Cetak</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            let url = '{{ route('kalibrasi.data', $kalibrasi->entity_code) }}';
            let pdfRoute = '{{ route('kalibrasi.export_pdf', ':id') }}';

            $('#kaliTable').DataTable({
                scrollX: true,
                scrollY: "50vh",
                scrollCollapse: true,
                processing: true,
                serverSide: false,
                ajax: url,
                columns: [{
                        data: 'no',
                        className: 'text-center'
                    },
                    {
                        data: 'npwp',
                    },
                    {
                        data: 'alamat_npwp',
                    },
                    {
                        data: 'nama_alat',
                    },
                    {
                        data: 'merk_alat',
                    },
                    {
                        data: 'model_alat',
                    },
                    {
                        data: 'no_seri',
                    },
                    {
                        data: 'tanggal',
                    },
                    {
                        data: 'id',
                        className: 'text-center',
                        render: function(id) {
                            let link = pdfRoute.replace(':id', id);
                            return `<a href="${link}" target="_blank" class="btn btn-icon btn-outline-success"><span class="mdi mdi-printer-outline fs-5"></span></a>`;
                        }
                    },
                ]
            });
        })
    </script>
@endpush
