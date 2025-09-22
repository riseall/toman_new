@extends('admin.layouts.app', [
    'title' => 'Pesan',
])

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card p-4 shadow-lg rounded-md">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 fs-5 fw-bold">Data Pesan Masuk</h6>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-striped table-hover w-100 fs-7" id="pTable">
                            <thead>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Nama Pengirim</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Pesan</th>
                                <th>Tanggal Kirim</th>
                            </thead>
                            <tbody>
                                @foreach ($pesan as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $p->company }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->address }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->phone }}</td>
                                        <td>{{ $p->message }}</td>
                                        <td>{{ $p->created_at->format('d F Y, H:i') }}</td>
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
            $('#pTable').DataTable({})
        });
    </script>
@endpush
