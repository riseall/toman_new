@extends('admin.layouts.app', [
    'title' => 'Company',
])
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data Perusahaan</h6>

                        <div class="mb-0 position-relative">
                            <button type="button" class="btn btn-primary fs-7" data-bs-toggle="modal"
                                data-bs-target="#addCModal"> Tambah Perusahaan
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="companyTable">
                            <thead>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Aksi</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal Add-->
            <div class="modal fade" id="addCModal" data-backdrop="static" tabindex="-1" aria-labelledby="addUserLabel"
                aria-hidden="true">
                @include('admin.company.create')
            </div>
            <!-- Modal Update -->
            <div class="modal fade" id="updateCModal" tabindex="-1" aria-labelledby="updateCModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content" id="updateCContent">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#companyTable').DataTable({
                scrollX: true,
                scrollY: "50vh",
                scrollCollapse: true,
                processing: true,
                serverSide: false,
                ajax: "{{ route('company.data') }}",
                columns: [{
                        data: 'no',
                        className: 'text-center'
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
                        data: 'address',
                    },
                    {
                        data: 'city',
                    },
                    {
                        data: 'entity_code',
                        className: 'text-center',
                        render: function(entity_code) {
                            return `<button class="btn btn-icon btn-outline-info btn-edit-company" data-entity_code="${entity_code}"><span class="mdi mdi-lead-pencil fs-6"></span></button>`;
                        }
                    }
                ]
            });
        });

        $(document).on('click', '.btn-edit-company', function() {
            let entity_code = $(this).data('entity_code');
            let url = '/company/' + entity_code + '/edit';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#updateCContent').html(response);
                    $('#updateCModal').modal('show');
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Gagal mengambil data perusahaan.',
                    });
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endpush
