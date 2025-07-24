@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Riwayat Permintaan</h1>

        @include('user.partial.alert')

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
                        <td>{{ $item->user->username }}</td>
                        <td>{{ $item->user->email }}</td>
                        <td>{{ $item->user->phone }}</td>
                        <td>{{ $item->req_name }}</td>
                        <td>
                            <a href="{{ route('permintaan.show', $item->id) }}" class="btn btn-warning"><img
                                    src="{{ asset('icon/cetak.svg') }}" alt="Cetak"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
