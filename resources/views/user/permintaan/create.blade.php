@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @include('user.partial.alert')

                <div class="card">
                    <div class="card-header">
                        <h2 class="fw-bold">Form Permohonan Toll-Manufacturing</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('permintaan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-3 fw-bold">Data Produk</h5>
                            <div class="mb-3">
                                <label for="company_name" class="form-label req-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="company_name" name="company_name"
                                    value="{{ Auth::user()->entity_name ?? '' }}" disabled required>
                            </div>
                            <div class="mb-3">
                                <label for="company_address" class="form-label req-label">Alamat Perusahaan</label>
                                <input type="text" class="form-control" id="company_address" name="company_address"
                                    value="{{ Auth::user()->address_line_1 ?? '' }}" disabled required>
                            </div>
                            <div class="mb-3">
                                <label for="pic_name" class="form-label req-label">Nama Anda</label>
                                <input type="text" class="form-control" id="pic_name" name="pic_name"
                                    value="{{ Auth::user()->username ?? '' }}" disabled required>
                            </div>
                            <div class="mb-3">
                                <label for="pic_email" class="form-label req-label">E-mail Anda</label>
                                <input type="email" class="form-control" id="pic_email" name="pic_email"
                                    value="{{ Auth::user()->email ?? '' }}" disabled required>
                            </div>
                            <div class="mb-3">
                                <label for="pic_phone" class="form-label req-label">No. Telepon / HP / Whatsapp</label>
                                <input type="text" class="form-control" id="pic_phone" name="pic_phone"
                                    value="{{ Auth::user()->phone ?? '' }}" disabled required>
                            </div>
                            <div class="mb-3">
                                <label for="prod_name" class="form-label req-label">Nama Produk</label>
                                <input type="text" class="form-control" id="prod_name" name="prod_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="act_ingredient" class="form-label req-label">Kandungan Bahan Aktif</label>
                                <input type="text" class="form-control" id="act_ingredient" name="act_ingredient"
                                    required>
                            </div>

                            {{-- Golongan Bahan Aktif --}}
                            <label for="act_ingredient_group" class="form-label">Golongan Bahan Aktif</label>
                            @include('user.partial.actgroup')

                            {{-- Kategori Produk --}}
                            <label for="prod_category" class="form-label">Kategori Produk</label>
                            @include('user.partial.category')

                            {{-- Lingkup Pekerjaan --}}
                            <label for="work_scope" class="form-label">Lingkup Pekerjaan</label>
                            @include('user.partial.workscope')

                            <hr>

                            <div class="mb-3">
                                <label for="req_name" class="form-label req-label">Jenis Permintaan</label>
                                <select class="form-select" id="req_name" name="req_name" required>
                                    <option value="">Pilih Jenis Permintaan</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Kapsul">Kapsul</option>
                                    <option value="Parental">Parental</option>
                                    <option value="Cairan">Cairan</option>
                                    <option value="Powder">Powder</option>
                                    <option value="Semisolid">Semisolid</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="req_date" class="form-label req-label">Tanggal Permintaan</label>
                                <input type="date" class="form-control" id="req_date" name="req_date" required>
                            </div>

                            <div id="dynamic-form" style="display: none">

                                <hr>

                                <h5 class="mb-3 fw-bold">Karakteristik Produk</h5>

                                {{-- Form Tablet --}}
                                @include('user.partial.tablet')

                                {{-- Form Kapsul --}}
                                @include('user.partial.kapsul')

                                {{-- Form Parental --}}
                                @include('user.partial.parental')

                                {{-- Form Cairan --}}
                                @include('user.partial.cairan')

                                {{-- Form Powder --}}
                                @include('user.partial.powder')

                                {{-- Form Semisolid --}}
                                @include('user.partial.semisolid')

                                <hr>

                                <h5 class="mb-3 fw-bold">Persyaratan Khusus</h5>
                                {{-- Persyaratan Khusus --}}
                                @include('user.partial.spec')

                                <hr>

                                <h5 class="mb-3 fw-bold">Karakteristik Kemasan</h5>
                                @include('user.partial.package')

                                <hr>

                                <h5 class="mb-3 fw-bold">Penyedia RM / PM</h5>

                                <div class="mb-3" for="penyedia_rm_pm">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="penyedia_rm_pm"
                                            id="penyedia_rm_pm1" value="Phapros">
                                        <label for="penyedia_rm_pm1" class="form-check-label">Phapros</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="penyedia_rm_pm"
                                            id="penyedia_rm_pm2" value="Principal">
                                        <label for="penyedia_rm_pm2" class="form-check-label">Principal</label>
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Flowchart Proses</h5>

                                <div class="mb-3" for="flowchart_process">
                                    <input type="text" class="form-control" id="flowchart_process"
                                        name="flowchart_process">
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Cakupan Pekerjaan</h5>
                                @include('user.partial.coverage')

                                <hr>

                                <h5 class="mb-3 fw-bold">Informasi Harga & Forecast</h5>
                                @include('user.partial.price')

                                <hr>

                                <h5 class="mb-3 fw-bold">Catatan Lain-lain (Opsional)</h5>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="any_note" id="any_note">
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Lampiran Dokumen (Opsional, Max 1mb/file)</h5>
                                @include('user.partial.doc')

                                <div class="mb-3">
                                    <input type="checkbox" name="" id="privacy-policy">
                                    <label for="privacy-policy" class="form-label">Please confirm that you agree to our
                                        <a href="#">Privacy Policy</a>.</label>
                                </div>

                                <button type="submit" class="btn btn-success" id="submit" disabled>Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
