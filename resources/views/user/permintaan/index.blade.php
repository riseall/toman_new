@extends('layouts.app', [
    'title' => 'Permintaan Toll',
    'desc' => '',
])
@section('bg', '807A0494.jpg')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Riwayat Permintaan</h3>
                    <p class="text-muted mx-auto para-desc mb-0">Pantau semua transaksi permintaan Anda dengan mudah dan
                        cepat.</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#permintaanForm" class="btn btn-primary mt-3">
                        <i class="uil uil-file-plus-alt"></i> Buat Permintaan Baru
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container">
        {{-- <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 col-12 mt-4">
                <div class="card pricing pricing-primary business-rate text-center border-0 rounded shadow-sm">
                    <div class="card-body">
                        <i class="uil uil-receipt-alt text-primary display-5"></i>
                        <h6 class="mt-2">Total Permintaan</h6>
                        <span class="fs-4 fw-bold counter-value" data-target="{{ $totalPermintaan }}">0</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4">
                <div class="card pricing pricing-warning business-rate text-center border-0 rounded shadow-sm">
                    <div class="card-body">
                        <i class="uil uil-hourglass text-warning display-5"></i>
                        <h6 class="mt-2">Diproses</h6>
                        <span class="fs-4 fw-bold counter-value" data-target="25">0</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4">
                <div class="card pricing pricing-success business-rate text-center border-0 rounded shadow-sm">
                    <div class="card-body">
                        <span class="mdi mdi-checkbox-marked-circle-outline text-success display-5"></span>
                        <h6 class="mt-2">Selesai</h6>
                        <span class="fs-4 fw-bold counter-value" data-target="95">0</span>
                    </div>
                </div>
            </div>
        </div><!--end row--> --}}
    </div>

    <div class="container mt-50">

        {{-- <a href="{{ route('permintaan.create') }}" class="btn btn-primary">Tambah Permintaan</a> --}}
        <div class="row justify-content-center">
            <div class="card p-4  shadow-lg rounded-md">
                <h4 class="mb-3">Data Permintaan</h4>
                <div class="table-responsive">
                    <table class="table mb-0 table-nowrap table-striped table-hover" id="permintaanTable">
                        <thead>
                            <tr class="fw-medium">
                                <th>No.</th>
                                <th>Jenis Permintaan</th>
                                <th>Tanggal Permohonan</th>
                                <th>Nama Produk</th>
                                <th>Lingkup Pekerjaan</th>
                                <th>PIC</th>
                                <th>Telp / HP / WA</th>
                                <th>Cetak</th>
                            </tr>
                        </thead>
                    </table><!--end table-->
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-50">
        @include('user.monitoring.pantau')
    </div>

    @include('user.permintaan.create')
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#permintaanTable').DataTable({
                processing: true,
                ajax: "{{ route('permintaan.data') }}",
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // auto numbering
                        },
                        className: 'text-center'
                    },
                    {
                        data: 'req_name',
                    },
                    {
                        data: 'req_date',
                    },
                    {
                        data: 'prod_name',
                    },
                    {
                        data: 'work_scope',
                    },
                    {
                        data: 'user_name',
                    },
                    {
                        data: 'phone'
                    },
                    {
                        data: null,
                        className: 'text-center',
                        render: function(data) {
                            return `<a href="/permintaan/${data.id}/pdf" target="_blank" class="btn btn-icon btn-info bg-gradient">
                                <i class="uil uil-print"></i>
                            </a>`;
                        }
                    },
                ]
            });
        });
    </script>
@endpush
