@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Daftar User</h1>

        <!-- Button trigger modal Add -->
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addUser">
            Tambah User
        </button>
        <!-- Modal Add-->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
            @include('admin.user.create')
        </div>

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="table-dark align-middle">
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telp / HP / WA</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $dt->username }}</td>
                        <td>{{ $dt->first_name }} {{ $dt->last_name }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>{{ $dt->phone }}</td>
                        <td class="text-center">
                            @if ($dt->is_active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-danger">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <!-- Tombol Edit-->
                            <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#updateUser{{ $dt->id }}">Edit</button>
                            {{-- <form action="{{ route('product.destroy', $dt->id) }}" method="POST"
                                style="display:inline-block;"
                                onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>

                    <!-- Modal Update -->
                    <div class="modal fade" id="updateUser{{ $dt->id }}" tabindex="-1"
                        aria-labelledby="updateUserLabel{{ $dt->id }}" aria-hidden="true">
                        @include('admin.user.update', [
                            'user' => $dt,
                            'roles' => $roles,
                            'userRole' => $dt->roles->first() ? $dt->roles->first()->name : null,
                        ])
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
