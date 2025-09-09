@extends('admin.layouts.app', [
    'title' => 'User',
])
@section('content')
    <div class="row justify-content-center">
        <div class="card p-4  shadow-lg rounded-md">
            <h4 class="mb-3">Data Permintaan</h4>

            <div class="col-12">
                <!-- Button trigger modal Add -->
                <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addUser">
                    Tambah User
                </button>
                <!-- Modal Add-->
                <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
                    @include('admin.user.create')
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-nowrap table-striped table-hover" id="userTable">
                    <thead class="table-primary">
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
        </div>
    </div>
@endsection

{{-- @push('scripts')
    <script>
        $(function() {
            $('#userTable').DataTable({
                processing: true,
                ajax: "{{ route('user.data') }}",
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
                            return `<a href="/permintaan/${data.id}/pdf" target="_blank" class="btn btn-icon btn-info bg-gradient">
                                <i class="uil uil-print"></i>
                            </a>`;
                        }
                    },
                ]
            });
        });
    </script>
@endpush --}}
