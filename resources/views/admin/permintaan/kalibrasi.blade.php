@extends('admin.layouts.app', [
    'title' => 'Kalibrasi',
])

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data Permintaan Kalibrasi</h6>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="klTable">
                            <thead>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Total Permintaan Kalibrasi</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($kalibrasi as $kali)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kali->entity_name }}</td>
                                        <td>{{ $kali->entity_address_line_1 }} {{ $kali->entity_kota }}</td>
                                        <td>{{ $kali->kalibrasis_count }}</td>
                                        <td>
                                            <a href="{{ route('kalibrasi.show', $kali->entity_code) }}"
                                                class="btn btn-icon btn-outline-primary"><span
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
            $('#klTable').DataTable({})
        });
    </script>
@endpush
