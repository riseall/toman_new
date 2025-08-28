@extends('layouts.app', [
    'title' => 'Permintaan',
    'desc' => '',
])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Riwayat Permintaan</h3>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container mt-50">

        {{-- <a href="{{ route('permintaan.create') }}" class="btn btn-primary">Tambah Permintaan</a> --}}
        <div class="row justify-content-center">
            <div class="table-responsive shadow-lg rounded-md p-4">
                <table class="table mb-0 table-nowrap table-striped table-hover" id="permintaanTable">
                    <thead>
                        <tr class="fw-medium">
                            <th>No.</th>
                            <th>Perusahaan</th>
                            <th>Tanggal Permohonan</th>
                            <th>PIC</th>
                            <th>Email</th>
                            <th>Telp / HP / WA</th>
                            <th>Jenis Permintaan</th>
                            <th>Cetak</th>
                        </tr>
                    </thead>

                    {{-- <tbody>
                        @foreach ($permintaan as $item)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}.</td>
                                <td>{{ $item->user->entity_name }}</td>
                                <td>{{ $item->req_date }}</td>
                                <td>{{ $item->user->first_name }} {{ $item->user->last_name }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->user->phone }}</td>
                                <td>{{ $item->req_name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('permintaan.export_pdf', $item->id) }}" target="_blank"
                                        class="btn btn-icon btn-primary"><i class="uil uil-print"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table><!--end table-->
            </div>
        </div>
    </div>
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
                        data: 'entity_name',
                        defaultContent: '-'
                    },
                    {
                        data: 'req_date',
                        defaultContent: '-'
                    },
                    {
                        data: 'user_name',
                        defaultContent: '-'
                    },
                    {
                        data: 'email',
                        defaultContent: '-'
                    },
                    {
                        data: 'phone',
                        defaultContent: '-'
                    },
                    {
                        data: 'req_name',
                        defaultContent: '-',
                        className: 'text-center'
                    },
                    {
                        data: null,
                        className: 'text-center',
                        render: function(data) {
                            return `<a href="/permintaan/${data.id}/pdf" target="_blank" class="btn btn-icon btn-primary">
                                <i class="uil uil-print"></i>
                            </a>`;
                        }
                    },
                ]
            });
        });
    </script>
@endpush
