@extends('admin.layouts.app', [
    'title' => 'Detail Permintaan Toll In',
])

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h6 class="mb-0 fs-5 fw-bold">Detail Permintaan Toll In</h6>
                            <span class="fw-semibold text-primary">{{ $company->entity_name }}</span>
                        </div>

                        <div class="mb-0 position-relative">
                            <button type="button" class="btn btn-primary fs-7"
                                onclick="window.location.href='{{ route('companies.index') }}'"> Kembali
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="permintaanTable">
                            <thead>
                                <th>No</th>
                                <th>Jenis Permintaan</th>
                                <th>Tanggal Permintaan</th>
                                <th>Nama Produk</th>
                                <th>Lingkup Pekerjaan</th>
                                <th>PIC</th>
                                <th>Dokumen CPOB</th>
                                <th>Dokumen Ijin Industri</th>
                                <th>Dokumen SIUP</th>
                                <th>Dokumen TDP</th>
                                <th>Dokumen NPWP</th>
                                <th>Dokumen PKP</th>
                                <th>Dokumen Drawing Kemasan Primer</th>
                                <th>Dokumen COA Bahan</th>
                                <th>Dokumen MSDS Bahan</th>
                                <th>Dokumen Protap Metoda Analisa dan Spesifikasi Produk</th>
                                <th>Dokumen Proses</th>
                                <th>Dokumen Lainnya</th>
                                <th>Cetak</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Preview Dokumen</h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="uil uil-times fs-4 text-dark"></i>
                    </button>
                </div>
                <div class="modal-body" style="height: 80vh;">
                    <iframe id="pdfViewer" src="" width="100%" height="100%" style="border:none;"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            let url = '{{ route('companies.data', $company->entity_code) }}';

            $('#permintaanTable').DataTable({
                scrollX: true,
                scrollY: "50vh",
                scrollCollapse: true,
                processing: true,
                serverSide: false,
                ajax: url,
                columns: [{
                        data: 'no',
                        className: 'text-center'
                    },
                    {
                        data: 'req_name',
                    },
                    {
                        data: 'req_date',
                    },
                    {
                        data: 'prod_name',
                    },
                    {
                        data: 'work_scope',
                    },
                    {
                        data: 'user',
                    },
                    {
                        data: 'doc_cpob',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_permiss',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_siup',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_tdp',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_npwp',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_pkp',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_prmy_draw',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_coa',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_msds',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_protap',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'doc_process',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'any_doc',
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return `<span class="badge bg-soft-dark">No File</span>`;
                            }

                            return `
                                <button class="btn btn-icon btn-outline-danger view-pdf" 
                                        data-url="${data}">
                                    <i class="mdi mdi-file-eye fs-5"></i>
                                </button>`;
                        }
                    },
                    {
                        data: 'id',
                        className: 'text-center',
                        render: function(id) {
                            return `<a href="/permintaan/${id}/pdf" target="_blank" class="btn btn-icon btn-outline-success"><span class="mdi mdi-printer-outline fs-5"></span></a>`;
                        }
                    },
                ]
            });

            $(document).on('click', '.view-pdf', function() {
                let fileUrl = $(this).data('url');
                $('#pdfViewer').attr('src', fileUrl);
                $('#pdfModal').modal('show');
            });

            // reset iframe ketika modal ditutup (biar ga nge-load terus)
            $('#pdfModal').on('hidden.bs.modal', function() {
                $('#pdfViewer').attr('src', '');
            });
        })
    </script>
@endpush
