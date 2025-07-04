@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <table class="table table-bordered table-striped">
                <thead class="table-dark align-middle">
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Bets Size</th>
                    <th>ED Product</th>
                    <th>Kemasan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $dt->nama_produk }}</td>
                            <td>{{ $dt->bets_size }}</td>
                            <td>{{ $dt->ed_produk }}</td>
                            <td>{{ $dt->kemasan }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
