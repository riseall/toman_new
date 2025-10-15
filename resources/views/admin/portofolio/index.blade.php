@extends('admin.layouts.app', [
    'title' => 'Portofolio',
])
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data Portofolio</h6>

                        <div class="mb-0 position-relative">
                            <button type="button" class="btn btn-primary fs-7" data-bs-toggle="modal"
                                data-bs-target="#addPorModal"> Tambah Portofolio
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="porTable">
                            <thead>
                                <th>No</th>
                                <th>Image</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal Add-->
            <div class="modal fade" id="addPorModal" data-backdrop="static" tabindex="-1" aria-labelledby="addPorLabel"
                aria-hidden="true">
                @include('admin.portofolio.create')
            </div>
            <!-- Modal Update -->
            <div class="modal fade" id="updatePorModal" tabindex="-1" aria-labelledby="updatePorModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content" id="updatePorContent">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#porTable').DataTable({
                scrollX: true,
                scrollY: "50vh",
                scrollCollapse: true,
                processing: true,
                serverSide: false,
                ajax: "{{ route('porto.data') }}",
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
                        data: 'deskripsi',
                        className: 'text-wrap',
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
                            return `<button class="btn btn-icon btn-outline-info btn-edit-prod" data-id="${id}"><span class="mdi mdi-lead-pencil fs-5"></span></button>`;
                        }
                    }
                ]
            });
        });

        $(document).on('click', '.btn-edit-prod', function() {
            let id = $(this).data('id');
            let url = '{{ route('porto.edit', ':id') }}'.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#updatePorContent').html(response);
                    $('#updatePorModal').modal('show');
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Gagal mengambil data portofolio.',
                    });
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endpush
