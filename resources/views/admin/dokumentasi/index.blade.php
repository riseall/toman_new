@extends('admin.layouts.app', [
    'title' => 'Dokumentasi',
])
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data Dokumentasi</h6>

                        <div class="mb-0 position-relative">
                            <button type="button" class="btn btn-primary fs-7" data-bs-toggle="modal"
                                data-bs-target="#addDokModal"> Tambah Dokumentasi
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="dokTable">
                            <thead>
                                <th>No</th>
                                <th>Image</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal Add-->
            <div class="modal fade" id="addDokModal" data-backdrop="static" tabindex="-1" aria-labelledby="addDokLabel"
                aria-hidden="true">
                @include('admin.dokumentasi.create')
            </div>
            <!-- Modal Update -->
            <div class="modal fade" id="updateDokModal" tabindex="-1" aria-labelledby="updateDokModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content" id="updateDokContent">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#dokTable').DataTable({
                scrollX: true,
                scrollY: "50vh",
                scrollCollapse: true,
                processing: true,
                serverSide: false,
                ajax: "{{ route('dok.data') }}",
                columns: [{
                        data: 'no',
                        className: 'text-center'
                    },
                    {
                        data: 'gambar',
                        className: 'text-center',
                        render: function(data) {
                            if (data) {
                                return `<img src="${data}" alt="Portofolio" width="70" class="img-thumbnail p-0">`;
                            }
                            return `<span class="text-muted">-</span>`;
                        }
                    },
                    {
                        data: 'judul',
                    },
                    {
                        data: 'status',
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
                            return `<button class="btn btn-icon btn-outline-info btn-edit-prod" data-id="${id}"><span class="mdi mdi-lead-pencil fs-5"></span></button>
                            <button class="btn btn-icon btn-outline-danger btn-delete-prod" data-id="${id}"><span class="mdi mdi-delete fs-5"></span></button>`;
                        }
                    }
                ]
            });
        });

        $(document).on('click', '.btn-edit-prod', function() {
            let id = $(this).data('id');
            let url = '{{ route('dok.edit', ':id') }}'.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#updateDokContent').html(response);
                    $('#updateDokModal').modal('show');
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Gagal mengambil data dokumentasi.',
                    });
                    console.error(xhr.responseText);
                }
            });
        });

        $(document).on('click', '.btn-delete-prod', function() {
            let id = $(this).data('id');
            let url = '{{ route('dok.destroy', ':id') }}'.replace(':id', id);
            Swal.fire({
                title: 'Hapus Dokumentasi',
                text: "Apakah anda yakin ingin menghapus dokumentasi ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $('#dokTable').DataTable().ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Data dokumentasi berhasil dihapus.',
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true
                            });
                        },
                        error: function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Gagal menghapus data dokumentasi.',
                            });
                        }
                    });
                }
            });
        });
    </script>
@endpush
