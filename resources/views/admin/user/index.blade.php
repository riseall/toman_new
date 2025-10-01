@extends('admin.layouts.app', [
    'title' => 'User',
])
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data User</h6>

                        <div class="mb-0 position-relative">
                            <button type="button" class="btn btn-primary fs-7" data-bs-toggle="modal"
                                data-bs-target="#addUserModal"> Tambah User
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="userTable">
                            <thead>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telp / HP / WA</th>
                                <th>Role</th>
                                <th>Perusahaan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal Add-->
            <div class="modal fade" id="addUserModal" data-backdrop="static" tabindex="-1" aria-labelledby="addUserLabel"
                aria-hidden="true">
                @include('admin.user.create')
            </div>
            <!-- Modal Update -->
            <div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content" id="updateUserContent">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#userTable').DataTable({
                scrollX: true,
                scrollY: "50vh",
                scrollCollapse: true,
                processing: true,
                serverSide: false,
                ajax: "{{ route('user.data') }}",
                columns: [{
                        data: 'no',
                        className: 'text-center'
                    },
                    {
                        data: 'username',
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'email',
                    },
                    {
                        data: 'phone',
                    },
                    {
                        data: 'role',
                    },
                    {
                        data: 'company',
                    },
                    {
                        data: 'is_active',
                        className: 'text-center',
                        render: function(data) {
                            return data == 1 ?
                                '<span class="badge rounded-pill bg-soft-success">Aktif</span>' :
                                '<span class="badge rounded-pill bg-soft-danger">Tidak Aktif</span>';
                        }
                    },
                    {
                        data: 'id',
                        className: 'text-center',
                        render: function(id) {
                            return `<button class="btn btn-icon btn-outline-info btn-edit-user" data-id="${id}"><span class="mdi mdi-lead-pencil fs-6"></span></button>`;
                        }
                    }
                ]
            });
        });

        $(document).on('click', '.btn-edit-user', function() {
            let userId = $(this).data('id');
            let url = '{{ route('user.edit', ':id') }}'.replace(':id', userId);
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#updateUserContent').html(response);
                    $('#updateUserModal').modal('show');
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Gagal mengambil data user.',
                    });
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endpush
