@extends('admin.layouts.app', [
    'title' => 'Produk',
])
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data Produk</h6>

                        <div class="mb-0 position-relative">
                            <button type="button" class="btn btn-primary fs-7" data-bs-toggle="modal"
                                data-bs-target="#addProdModal"> Tambah Produk
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="productTable">
                            <thead>
                                <th>No</th>
                                <th>Image</th>
                                <th>Nama Produk</th>
                                <th>Bets Size (Pcs)</th>
                                <th>ED Product</th>
                                <th>Kemasan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal Add-->
            <div class="modal fade" id="addProdModal" data-backdrop="static" tabindex="-1" aria-labelledby="addUserLabel"
                aria-hidden="true">
                @include('admin.product.add')
            </div>
            <!-- Modal Update -->
            <div class="modal fade" id="updateProdModal" tabindex="-1" aria-labelledby="updateProdModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content" id="updateProdContent">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#productTable').DataTable({
                scrollX: true,
                scrollY: "50vh",
                scrollCollapse: true,
                processing: true,
                serverSide: false,
                ajax: "{{ route('product.data') }}",
                columns: [{
                        data: 'no',
                        className: 'text-center'
                    },
                    {
                        data: 'image',
                        className: 'text-center',
                        render: function(data) {
                            if (data) {
                                return `<img src="/images/product/${data}" alt="Produk" width="70" class="img-thumbnail">`;
                            }
                            return `<span class="text-muted">-</span>`;
                        }
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'bets_size',
                    },
                    {
                        data: 'ed_product',
                    },
                    {
                        data: 'package',
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
                            return `<button class="btn btn-icon btn-outline-info btn-edit-prod" data-id="${id}"><span class="mdi mdi-lead-pencil fs-6"></span></button>`;
                        }
                    }
                ]
            });
        });

        $(document).on('click', '.btn-edit-prod', function() {
            let id = $(this).data('id');
            let url = '/product/' + id + '/edit';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#updateProdContent').html(response);
                    $('#updateProdModal').modal('show');
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Gagal mengambil data produk.',
                    });
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endpush
