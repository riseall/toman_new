@extends('admin.layouts.app', [
    'title' => 'Permintaan',
])

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data Permintaan</h6>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="cpTable">
                            <thead>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Total Permintaan</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($company as $cp)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cp->entity_name }}</td>
                                        <td>{{ $cp->entity_address_line_1 }} {{ $cp->entity_kota }}</td>
                                        <td>{{ $cp->permintaans_count }}</td>
                                        <td>
                                            <a href="{{ route('companies.show', $cp->entity_code) }}"
                                                class="btn btn-icon btn-primary"><span
                                                    class="mdi mdi-eye-outline fs-5"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#cpTable').DataTable({})
        });
    </script>
@endpush
