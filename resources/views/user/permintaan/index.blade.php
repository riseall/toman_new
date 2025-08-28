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

        <a href="{{ route('permintaan.create') }}" class="btn btn-primary">Tambah Permintaan</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Perusahaan</th>
                    <th scope="col">Tanggal Permohonan</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telp / HP / WA</th>
                    <th scope="col">Jenis Permintaan</th>
                    <th scope="col">Cetak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permintaan as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->user->entity_name }}</td>
                        <td>{{ $item->req_date }}</td>
                        <td>{{ $item->user->first_name }} {{ $item->user->last_name }}</td>
                        <td>{{ $item->user->email }}</td>
                        <td>{{ $item->user->phone }}</td>
                        <td>{{ $item->req_name }}</td>
                        <td>
                            <a href="{{ route('permintaan.export_pdf', $item->id) }}" target="_blank"
                                class="btn btn-warning"><img src="{{ asset('icon/cetak.svg') }}" alt="Cetak"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
