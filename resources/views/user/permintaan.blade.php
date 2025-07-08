@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="fw-bold">Form Permohonan Toll-Manufacturing</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('permintaan.add') }}" method="post">
                            @csrf
                            <h5 class="mb-3 fw-bold">Data Produk</h5>
                            <div class="mb-3">
                                <label for="company_name" class="form-label req-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="company_address" class="form-label req-label">Alamat Perusahaan</label>
                                <input type="text" class="form-control" id="company_address" name="company_address"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="pic_name" class="form-label req-label">Nama Anda</label>
                                <input type="text" class="form-control" id="pic_name" name="pic_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="pic_email" class="form-label req-label">E-mail Anda</label>
                                <input type="email" class="form-control" id="pic_email" name="pic_email" required>
                            </div>
                            <div class="mb-3">
                                <label for="pic_phone" class="form-label req-label">No. Telepon / HP / Whatsapp</label>
                                <input type="text" class="form-control" id="pic_phone" name="pic_phone" required>
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
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="act_ingredient_group"
                                        id="act_ingredient_group1" value="Betalactam">
                                    <label class="form-check-label" for="act_ingredient_group1">Betalactam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="act_ingredient_group"
                                        id="act_ingredient_group2" value="Penicillin">
                                    <label class="form-check-label" for="act_ingredient_group2">Penicillin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="act_ingredient_group"
                                        id="act_ingredient_group3" value="Non-Penicillin">
                                    <label class="form-check-label" for="act_ingredient_group3">Non-Penicillin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="act_ingredient_group"
                                        id="act_ingredient_group4" value="Hormon Corticosteroid">
                                    <label class="form-check-label" for="act_ingredient_group4">Hormon
                                        Corticosteroid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="act_ingredient_group"
                                        id="act_ingredient_group5" value="Hormon Non-corticosteroid">
                                    <label class="form-check-label" for="act_ingredient_group5">Hormon
                                        Non-corticosteroid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="act_ingredient_group"
                                        id="act_ingredient_group6" value="Multivitamin">
                                    <label class="form-check-label" for="act_ingredient_group6">Multivitamin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="act_ingredient_group"
                                        id="act_ingredient_group7" value="Lainnya">
                                    <label class="form-check-label" for="act_ingredient_group7">Lainnya</label>
                                </div>
                            </div>

                            {{-- Kategori Produk --}}
                            <label for="prod_category" class="form-label">Kategori Produk</label>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="prod_category"
                                        id="prod_category1" value="Ethical">
                                    <label class="form-check-label" for="prod_category1">Ethical</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="prod_category"
                                        id="prod_category3" value="Generik">
                                    <label class="form-check-label" for="prod_category3">Generik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="prod_category"
                                        id="prod_category2" value="OTC">
                                    <label class="form-check-label" for="prod_category2">OTC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="prod_category"
                                        id="prod_category4" value="Lainnya">
                                    <label class="form-check-label" for="prod_category4">Lainnya</label>
                                </div>
                            </div>

                            {{-- Lingkup Pekerjaan --}}
                            <label for="work_scope" class="form-label">Lingkup Pekerjaan</label>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="work_scope" id="work_scope1"
                                        value="Toll in murni">
                                    <label class="form-check-label" for="work_scope1">Toll in murni</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="work_scope" id="work_scope2"
                                        value="Toll in beli">
                                    <label class="form-check-label" for="work_scope2">Toll in beli</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="work_scope" id="work_scope3"
                                        value="Toll in sd ruahan">
                                    <label class="form-check-label" for="work_scope3">Toll in sd ruahan</label>
                                </div>
                            </div>

                            <hr>

                            <div class="mb-3">
                                <label for="req_name" class="form-label">Jenis Permintaan</label>
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
                                <label for="req_date" class="form-label">Tanggal Permintaan</label>
                                <input type="date" class="form-control" id="req_date" name="req_date" required>
                            </div>

                            <div id="dynamic-form" style="display: none">

                                <hr>

                                <h5 class="mb-3 fw-bold">Karakteristik Produk</h5>

                                {{-- Form Tablet --}}
                                <div id="form-tablet" class="form-specific">
                                    <div class="mb-3">
                                        <label for="bentuk" class="form-label">Bentuk</label>
                                        <input type="text" class="form-control" id="bentuk" name="bentuk">
                                    </div>
                                    <div class="mb-3">
                                        <label for="color" class="form-label">Warna</label>
                                        <input type="text" class="form-control" id="color" name="color">
                                    </div>
                                    <div class="mb-3">
                                        <label for="bobot_range_bobot" class="form-label">Bobot / Range Bobot</label>
                                        <input type="text" class="form-control" id="bobot_range_bobot"
                                            name="bobot_range_bobot">
                                    </div>
                                    <div class="mb-3">
                                        <label for="diameter" class="form-label">Diameter</label>
                                        <input type="text" class="form-control" id="diameter" name="diameter">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tebal" class="form-label">Tebal</label>
                                        <input type="text" class="form-control" id="tebal" name="tebal">
                                    </div>
                                    <label for="tablet_type" class="form-label">Tipe Tablet</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tablet_type"
                                                id="tablet_type1" value="Plain">
                                            <label class="form-check-label" for="tablet_type1">Plain</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tablet_type"
                                                id="tablet_type2" value="Film Coated">
                                            <label class="form-check-label" for="tablet_type2">Film Coated</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tablet_type"
                                                id="tablet_type3" value="Sugar Coated">
                                            <label class="form-check-label" for="tablet_type3">Sugar Coated</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_air" class="form-label">Kadar Air</label>
                                        <input type="text" class="form-control" id="kadar_air" name="kadar_air">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_zat_aktif" class="form-label">Kadar Zat Aktif</label>
                                        <input type="text" class="form-control" id="kadar_zat_aktif"
                                            name="kadar_zat_aktif">
                                    </div>
                                    <div class="mb-3">
                                        <label for="dissolusi" class="form-label">Dissolusi</label>
                                        <input type="text" class="form-control" id="dissolusi" name="dissolusi">
                                    </div>
                                </div>

                                {{-- Form Kapsul --}}
                                <div id="form-kapsul" class="form-specific">
                                    <div class="mb-3">
                                        <label for="capsule_size" class="form-label">Ukuran Kapsul</label>
                                        <input type="text" class="form-control" id="capsule_size"
                                            name="capsule_size">
                                    </div>
                                    <div class="mb-3">
                                        <label for="bobot_range_bobot" class="form-label">Bobot / Range Bobot</label>
                                        <input type="text" class="form-control" id="bobot_range_bobot"
                                            name="bobot_range_bobot">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_air" class="form-label">Kadar Air</label>
                                        <input type="text" class="form-control" id="kadar_air" name="kadar_air">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_zat_aktif" class="form-label">Kadar Zat Aktif</label>
                                        <input type="text" class="form-control" id="kadar_zat_aktif"
                                            name="kadar_zat_aktif">
                                    </div>
                                    <div class="mb-3">
                                        <label for="dissolusi" class="form-label">Dissolusi</label>
                                        <input type="text" class="form-control" id="dissolusi" name="dissolusi">
                                    </div>
                                </div>

                                {{-- Form Parental --}}
                                <div id="form-parental" class="form-specific">
                                    <label for="type" class="form-label">Jenis</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type1"
                                                value="Cairan">
                                            <label class="form-check-label" for="type1">Cairan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type2"
                                                value="Serbuk Injeksi dengan Pelarut">
                                            <label class="form-check-label" for="type2">Serbuk Injeksi dengan
                                                Pelarut</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type3"
                                                value="Serbuk Injeksi tanpa Pelarut">
                                            <label class="form-check-label" for="type3">Serbuk Injeksi tanpa
                                                Pelarut</label>
                                        </div>
                                    </div>
                                    <label for="package" class="form-label">Kemasan</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package1"
                                                value="Ampul Clear">
                                            <label class="form-check-label" for="package1">Ampul Clear</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package2"
                                                value="Ampul Amber">
                                            <label class="form-check-label" for="package2">Ampul Amber</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package3"
                                                value="Vial">
                                            <label class="form-check-label" for="package3">Vial</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package4"
                                                value="Lainnya">
                                            <label class="form-check-label" for="package4">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bobot_range_bobot" class="form-label">Bobot / Range Bobot</label>
                                        <input type="text" class="form-control" id="bobot_range_bobot"
                                            name="bobot_range_bobot">
                                    </div>
                                    <div class="mb-3">
                                        <label for="volume_range_volume" class="form-label">Volume / Range Volume</label>
                                        <input type="text" class="form-control" id="volume_range_volume"
                                            name="volume_range_volume">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ph" class="form-label">pH</label>
                                        <input type="text" class="form-control" id="ph" name="ph">
                                    </div>
                                    <div class="mb-3">
                                        <label for="osmolaritas" class="form-label">Osmolaritas</label>
                                        <input type="text" class="form-control" id="osmolaritas" name="osmolaritas">
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight_type" class="form-label">Berat Jenis</label>
                                        <input type="text"class="form-control" id="weight_type" name="weight_type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_zat_aktif" class="form-label">Kadar Zat Aktif</label>
                                        <input type="text" class="form-control" id="kadar_zat_aktif"
                                            name="kadar_zat_aktif">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mikroba_endotoksin" class="form-label">Mikroba / Endotoksin</label>
                                        <input type="text" class="form-control" id="mikroba_endotoksin"
                                            name="mikroba_endotoksin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="partikel_asing" class="form-label">Partikel / Asing</label>
                                        <input type="text" class="form-control" id="partikel_asing"
                                            name="partikel_asing">
                                    </div>
                                </div>

                                {{-- Form Cairan --}}
                                <div id="form-cairan" class="form-specific">
                                    <label for="type" class="form-label">Jenis</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type1"
                                                value="Syrup">
                                            <label class="form-check-label" for="type1">Syrup</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type2"
                                                value="Emulsi">
                                            <label class="form-check-label" for="type2">Emulsi</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type3"
                                                value="Suspensi">
                                            <label class="form-check-label" for="type3">Suspensi</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type4"
                                                value="Lainnya">
                                            <label class="form-check-label" for="type4">Lainnya</label>
                                        </div>
                                    </div>
                                    <label for="package" class="form-label">Kemasan</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package1"
                                                value="Botol Kaca">
                                            <label class="form-check-label" for="package1">Botol Kaca</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package2"
                                                value="Botol Plastik">
                                            <label class="form-check-label" for="package2">Botol Plastik</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package3"
                                                value="Sachet">
                                            <label class="form-check-label" for="package3">Sachet</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="volume" class="form-label">Volume</label>
                                        <input type="text" class="form-control" id="volume" name="volume">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ph" class="form-label">pH</label>
                                        <input type="text" class="form-control" id="ph" name="ph">
                                    </div>
                                    <div class="mb-3">
                                        <label for="viskositas" class="form-label">Viskositas</label>
                                        <input type="text" class="form-control" id="viskositas" name="viskositas">
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight_type" class="form-label">Berat Jenis</label>
                                        <input type="text" class="form-control" id="weight_type" name="weight_type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_zat_aktif" class="form-label">Kadar Zat Aktif</label>
                                        <input type="text" class="form-control" id="kadar_zat_aktif"
                                            name="kadar_zat_aktif">
                                    </div>
                                </div>

                                {{-- Form Powder --}}
                                <div id="form-powder" class="form-specific">

                                </div>

                                {{-- Form Semisolid --}}
                                <div id="form-semisolid" class="form-specific">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
