@extends('layouts.app', [
    'title' => 'Kalibrasi dan Lain-lain',
    'desc' => '',
])
@section('bg', '807A0749.jpg')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Riwayat Permintaan Kalibrasi</h3>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#kalibrasiModal" class="btn btn-primary mt-3">
                        <i class="uil uil-file-plus-alt"></i> Buat Permintaan Kalibrasi Baru
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
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
                                <th>Nama Perusahaan</th>
                                <th>Alamat Perusahaan</th>
                                <th>N.P.W.P</th>
                                <th>Alamat N.P.W.P</th>
                                <th>Telepon</th>
                                <th>Penanggung Jawab</th>
                                <th>Email</th>
                                <th>Nama Alat</th>
                                <th>Merk Alat</th>
                                <th>No Seri Alat</th>
                                <th>Cetak</th>
                            </tr>
                        </thead>
                    </table><!--end table-->
                </div>
            </div>
        </div>
    </div>

    @include('user.permintaan.createKali')
@endsection

@push('scripts')
    <script>
        let pdfRoute = "{{ route('kalibrasi.export_pdf', ':id') }}";

        $(function() {
            $('#permintaanTable').DataTable({
                processing: true,
                ajax: "{{ route('cal.data') }}",
                columns: [{
                        data: 'no',
                        className: 'text-center'
                    },
                    {
                        data: 'entity_name',
                    },
                    {
                        data: 'entity_address',
                    },
                    {
                        data: 'npwp'
                    },
                    {
                        data: 'alamat_npwp'
                    },
                    {
                        data: 'telepon'
                    },
                    {
                        data: 'pic'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'nama_alat'
                    },
                    {
                        data: 'merk_alat'
                    },
                    {
                        data: 'no_seri'
                    },
                    {
                        data: null,
                        className: 'text-center',
                        render: function(data) {
                            let link = pdfRoute.replace(':id', data.id);
                            return `<a href="${link}" target="_blank" class="btn btn-icon btn-info bg-gradient">
                                <i class="uil uil-print"></i>
                            </a>`;
                        }
                    },
                ]
            });
        });
    </script>
@endpush
