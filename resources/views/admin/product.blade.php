@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Daftar Produk</h1>

        <!-- Button trigger modal Add -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
            Tambah Produk
        </button>
        <!-- Modal Add-->
        <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
            @include('admin.Product.add')
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark align-middle">
                <th>No</th>
                <th>Nama Produk</th>
                <th>Bets Size (Pcs)</th>
                <th>ED Product</th>
                <th>Kemasan</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $dt->prod_name }}</td>
                        <td>{{ $dt->prod_bets_size }}</td>
                        <td>{{ $dt->prod_exp_yr }}</td>
                        <td>{{ $dt->prod_package }}</td>
                        <td class="text-center">
                            @if ($dt->prod_is_active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-danger">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <!-- Tombol Edit dengan modal unik -->
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#updateProduct{{ $dt->id }}">Edit</button>
                            <form action="{{ route('product.destroy', $dt->id) }}" method="POST"
                                style="display:inline-block;"
                                onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Update unik per produk -->
                    <div class="modal fade" id="updateProduct{{ $dt->id }}" tabindex="-1"
                        aria-labelledby="updateProductLabel{{ $dt->id }}" aria-hidden="true">
                        @include('admin.Product.update', ['product' => $dt])
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
