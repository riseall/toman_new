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
                                        <label for="bobot_range_bobot" class="form-label">Bobot / Range Bobot</label>
                                        <input type="text" class="form-control" id="bobot_range_bobot"
                                            name="bobot_range_bobot">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pemerian_fisik" class="form-label">Pemerian Fisik</label>
                                        <input type="text" class="form-control" id="pemerian_fisik"
                                            name="pemerian_fisik">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_zat_aktif" class="form-label">Kadar Zat Aktif</label>
                                        <input type="text" class="form-control" id="kadar_zat_aktif"
                                            name="kadar_zat_aktif">
                                    </div>
                                </div>

                                {{-- Form Semisolid --}}
                                <div id="form-semisolid" class="form-specific">
                                    <label for="type" class="form-label">Jenis</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type1"
                                                value="Cream">
                                            <label class="form-check-label" for="type1">Cream</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type2"
                                                value="Ointment">
                                            <label class="form-check-label" for="type2">Ointment</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type3"
                                                value="Gel">
                                            <label class="form-check-label" for="type3">Gel</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type4"
                                                value="Lotion">
                                            <label class="form-check-label" for="type4">Lotion</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type5"
                                                value="Serum">
                                            <label class="form-check-label" for="type5">Serum</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type6"
                                                value="Lainnya">
                                            <label class="form-check-label" for="type6">Lainnya</label>
                                        </div>
                                    </div>
                                    <label for="package" class="form-label">Kemasan</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package1"
                                                value="Tube">
                                            <label class="form-check-label" for="package1">Tube</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package2"
                                                value="Pot">
                                            <label class="form-check-label" for="package2">Pot</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package3"
                                                value="Botol">
                                            <label class="form-check-label" for="package3">Botol</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="package" id="package4"
                                                value="Lainnya">
                                            <label class="form-check-label" for="package4">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pemerian_fisik" class="form-label">Pemerian Fisik</label>
                                        <input type="text" class="form-control" id="pemerian_fisik"
                                            name="pemerian_fisik">
                                    </div>
                                    <div class="mb-3">
                                        <label for="viskositas" class="form-label">Viskositas</label>
                                        <input type="text" class="form-control" id="viskositas" name="viskositas">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kadar_zat_aktif" class="form-label">Kadar Zat Aktif</label>
                                        <input type="text" class="form-control" id="kadar_zat_aktif"
                                            name="kadar_zat_aktif">
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Persyaratan Khusus</h5>

                                {{-- Persyaratan Khusus --}}
                                <div class="mb-3">
                                    <label for="max_temp" class="form-label">Temperatur Maksimal</label>
                                    <input type="text" class="form-control" id="max_temp" name="max_temp">
                                </div>
                                <div class="mb-3">
                                    <label for="max_humidity" class="form-label">Kelembapan Maksimal</label>
                                    <input type="text" class="form-control" id="max_humidity" name="max_humidity">
                                </div>
                                <div class="mb-3">
                                    <label for="light_sensitivity" class="form-label">Sensitif Cahaya</label>
                                    <input type="text" class="form-control" id="light_sensitivity"
                                        name="light_sensitivity">
                                </div>
                                <div id="parental-specific" style="display: none">
                                    <div class="mb-3">
                                        <label for="oxidation_sensitivity" class="form-label">Sensitif Oksidasi</label>
                                        <input type="text" class="form-control" id="oxidation_sensitivity"
                                            name="oxidation_sensitivity">
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Karakteristik Kemasan</h5>
                                <h5 class="mb-3 fw-bold">Kemasan Primer</h5>

                                {{-- Kemasan Primer --}}
                                <div id="primer-tablet-kapsul" style="display: none">
                                    <label for="pmry_pkg_type" class="form-label">Jenis Kemasan Primer</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pmry_pkg_type"
                                                id="pmry_pkg_type1" value="Strip">
                                            <label class="form-check-label" for="pmry_pkg_type1">Strip</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pmry_pkg_type"
                                                id="pmry_pkg_type2" value="Blister">
                                            <label class="form-check-label" for="pmry_pkg_type2">Blister</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pmry_pkg_type"
                                                id="pmry_pkg_type3" value="Sachet">
                                            <label class="form-check-label" for="pmry_pkg_type3">Sachet</label>
                                        </div>
                                    </div>
                                    <label for="pmry_pkg_material" class="form-label">Jenis Bahan Kemasan Primer</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pmry_pkg_material"
                                                id="pmry_pkg_material1" value="PLM">
                                            <label class="form-check-label" for="pmry_pkg_material1">PLM</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pmry_pkg_material"
                                                id="pmry_pkg_material2" value="PTP">
                                            <label class="form-check-label" for="pmry_pkg_material2">PTP</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pmry_pkg_material"
                                                id="pmry_pkg_material3" value="PVC">
                                            <label class="form-check-label" for="pmry_pkg_material3">PVC</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pmry_pkg_material"
                                                id="pmry_pkg_material4" value="PVDC">
                                            <label class="form-check-label" for="pmry_pkg_material4">PVDC</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pmry_pkg_width" class="form-label">Lebar PLM / PTP / PVC /
                                            PVDC</label>
                                        <input type="text" class="form-control" id="pmry_pkg_width"
                                            name="pmry_pkg_width">
                                    </div>
                                </div>
                                <div id="primer-lainnya" style="display: none">
                                    <div class="mb-3">
                                        <label for="pmry_pkg_spec" class="form-label">Spesifikasi Kemasan Primer</label>
                                        <input type="text" class="form-control" id="pmry_pkg_spec"
                                            name="pmry_pkg_spec">
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Kemasan Sekunder</h5>

                                {{-- Kemasan Sekunder --}}
                                <div id="skndr-lainnya" style="display: none">
                                    <label for="scnd_etiket" class="form-label">Etiket</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="scnd_etiket"
                                                id="scnd_etiket1" value="Etiket Botol">
                                            <label for="scnd_etiket1" class="form-check-label">Etiket Botol</label>
                                        </div>
                                    </div>
                                    <label for="scnd_dus" class="form-label">Dus</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="scnd_dus"
                                                id="scnd_dus1" value="Dus Individual">
                                            <label for="scnd_dus1" class="form-check-label">Dus Individual</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="scnd_dus"
                                                id="scnd_dus2" value="Non Dus Individual">
                                            <label for="scnd_dus2" class="form-check-label">Non Dus
                                                Individual</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-label" for="scnd_dus_col">Dus Kolektif Isi</div>
                                        <input type="text" class="form-control" id="scnd_dus_col">
                                    </div>
                                </div>
                                <div id="skndr-parental" style="display: none">
                                    <label for="scnd_etiket" class="form-label">Etiket</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="scnd_etiket"
                                                id="scnd_etiket1" value="Etiket Ampul">
                                            <label for="scnd_etiket1" class="form-check-label">Etiket Ampul</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="scnd_etiket"
                                                id="scnd_etiket2" value="Etiket Vial Berupa Sticker">
                                            <label for="scnd_etiket2" class="form-check-label">Etiket Vial Berupa
                                                Sticker</label>
                                        </div>
                                        <div class="form-check form-check-inline" for="scnd_etiket">
                                            <input type="radio" class="form-check-input" name="scnd_etiket"
                                                id="scnd_etiket3" value="Etiket Vial Non Sticker">
                                            <label for="scnd_etiket3" class="form-check-label">Etiket Vial Non
                                                Sticker</label>
                                        </div>
                                    </div>
                                    <label for="scnd_dus" class="form-label">Dus</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="scnd_dus"
                                                id="scnd_dus1" value="Dus Individual">
                                            <label for="scnd_dus1" class="form-check-label">Dus Individual</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="scnd_dus"
                                                id="scnd_dus2" value="Non Dus Individual">
                                            <label for="scnd_dus2" class="form-check-label">Non Dus
                                                Individual</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-label" for="scnd_dus_col">Dus Kolektif Isi</div>
                                        <input type="text" class="form-control" id="scnd_dus_col">
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Kemasan Tersier</h5>

                                {{-- Kemasan Tersier --}}
                                <div class="mb-3">
                                    <label for="trsr_box_mstr" class="form-label">Master Box Isi</label>
                                    <input type="text" class="form-control" id="trsr_box_mstr">
                                </div>
                                <div class="mb-3">
                                    <label for="trsr_etiket" class="form-label">Etiket</label>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="trsr_etiket"
                                                id="trsr_etiket1" value="Sticker">
                                            <label for="trsr_etiket1" class="form-check-label">Sticker</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="trsr_etiket"
                                                id="trsr_etiket2" value="Non Sticker">
                                            <label for="trsr_etiket2" class="form-check-label">Non Sticker</label>
                                        </div>
                                        <div class="form-check form-check-inline" for="trsr_etiket">
                                            <input type="radio" class="form-check-input" name="trsr_etiket"
                                                id="trsr_etiket3" value="Lainnya">
                                            <label for="trsr_etiket3" class="form-check-label">Lainnya</label>
                                        </div>
                                    </div>
                                </div>

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
                                            id="penyedia_rm_pm2" value="RM">
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

                                <label for="is_formulation" class="form-label">Formulasi</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_formulation"
                                            id="is_formulation1" value="Ya">
                                        <label for="is_formulation1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_formulation"
                                            id="is_formulation2" value="Tidak">
                                        <label for="is_formulation2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <label for="is_weighing" class="form-label">Penimbangan</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_weighing"
                                            id="is_weighing1" value="Ya">
                                        <label for="is_weighing1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_weighing"
                                            id="is_weighing2" value="Tidak">
                                        <label for="is_weighing2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <label for="is_procces" class="form-label">Proses Pengolahan</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_procces"
                                            id="is_procces1" value="Ya">
                                        <label for="is_procces1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_procces"
                                            id="is_procces2" value="Tidak">
                                        <label for="is_procces2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <label for="is_package" class="form-label">Proses Pengemasan</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_package"
                                            id="is_package1" value="Ya">
                                        <label for="is_package1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_package"
                                            id="is_package2" value="Tidak">
                                        <label for="is_package2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="qc_inspect" class="form-label">Pemeriksaan QC : RM / PM /FG</label>
                                    <input type="text" class="form-control" name="qc_inspect" id="qc_inspect">
                                </div>
                                <label for="is_formula_dev" class="form-label">Pengembangan Formula</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_formula_dev"
                                            id="is_formula_dev1" value="Ya">
                                        <label for="is_formula_dev1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_formula_dev"
                                            id="is_formula_dev2" value="Tidak">
                                        <label for="is_formula_dev2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <label for="is_process_val" class="form-label">Validasi Proses</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_process_val"
                                            id="is_process_val1" value="Ya">
                                        <label for="is_process_val1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_process_val"
                                            id="is_process_val2" value="Tidak">
                                        <label for="is_process_val2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <label for="is_clean_val" class="form-label">Validasi Pembersihan</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_clean_val"
                                            id="is_clean_val1" value="Ya">
                                        <label for="is_clean_val1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_clean_val"
                                            id="is_clean_val2" value="Tidak">
                                        <label for="is_clean_val2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <label for="is_analyst_val" class="form-label">Validasi Metoda Analisa</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_analyst_val"
                                            id="is_analyst_val1" value="Ya">
                                        <label for="is_analyst_val1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_analyst_val"
                                            id="is_analyst_val2" value="Tidak">
                                        <label for="is_analyst_val2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <label for="is_stabil_test" class="form-label">Uji Stabilitas</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_stabil_test"
                                            id="is_stabil_test1" value="Ya">
                                        <label for="is_stabil_test1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_stabil_test"
                                            id="is_stabil_test2" value="Tidak">
                                        <label for="is_stabil_test2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="any_test" class="form-label">Uji Lainnya</label>
                                    <input type="text" class="form-control" name="any_test" id="any_test">
                                </div>
                                <label for="is_limbah_handling" class="form-label">Penanganan Limbah Jika Sebagai Bahan
                                    Aktif Baru</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_limbah_handling"
                                            id="is_limbah_handling1" value="Ya">
                                        <label for="is_limbah_handling1" class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="is_limbah_handling"
                                            id="is_limbah_handling2" value="Tidak">
                                        <label for="is_limbah_handling2" class="form-check-label">Tidak</label>
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Informasi Harga & Forecast</h5>

                                <div class="mb-3">
                                    <label for="hjp_estimated" class="form-label">Estimasi Harga HJP</label>
                                    <input type="text" class="form-control" name="hjp_estimated"
                                        id="hjp_estimated">
                                </div>
                                <div class="mb-3">
                                    <label for="hna_estimated" class="form-label">Estimasi Harga HNA</label>
                                    <input type="text" class="form-control" name="hna_estimated"
                                        id="hna_estimated">
                                </div>
                                <div class="mb-3">
                                    <label for="fc_1" class="form-label">Forecast - Tahun Ke-1</label>
                                    <input type="text" class="form-control" name="fc_1" id="fc_1">
                                </div>
                                <div class="mb-3">
                                    <label for="fc_2" class="form-label">Forecast - Tahun Ke-2</label>
                                    <input type="text" class="form-control" name="fc_2" id="fc_2">
                                </div>
                                <div class="mb-3">
                                    <label for="fc_3" class="form-label">Forecast - Tahun Ke-3</label>
                                    <input type="text" class="form-control" name="fc_3" id="fc_3">
                                </div>
                                <div class="mb-3">
                                    <label for="fc_4" class="form-label">Forecast - Tahun Ke-4</label>
                                    <input type="text" class="form-control" name="fc_4" id="fc_4">
                                </div>
                                <div class="mb-3">
                                    <label for="fc_5" class="form-label">Forecast - Tahun Ke-5</label>
                                    <input type="text" class="form-control" name="fc_5" id="fc_5">
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Catatan Lain-lain (Opsional)</h5>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="any_note" id="any_note">
                                </div>

                                <hr>

                                <h5 class="mb-3 fw-bold">Lampiran Dokumen (Opsional, Max 1mb/file)</h5>

                                <div class="mb-3">
                                    <label for="doc_cpob" class="form-label">Dokumen CPOB</label>
                                    <input type="file" class="form-control" name="doc_cpob" id="doc_cpob">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_permiss" class="form-label">Dokumen Ijin Industri</label>
                                    <input type="file" class="form-control" name="doc_permiss" id="doc_permiss">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_siup" class="form-label">Dokumen SIUP</label>
                                    <input type="file" class="form-control" name="doc_siup" id="doc_siup">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_tdp" class="form-label">Dokumen TDP</label>
                                    <input type="file" class="form-control" name="doc_tdp" id="doc_tdp">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_npwp" class="form-label">Dokumen NPWP</label>
                                    <input type="file" class="form-control" name="doc_npwp" id="doc_npwp">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_pkp" class="form-label">Dokumen PKP</label>
                                    <input type="file" class="form-control" name="doc_pkp" id="doc_pkp">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_prmy_draw" class="form-label">Dokumen Drawing Kemasan Primer</label>
                                    <input type="file" class="form-control" name="doc_prmy_draw"
                                        id="doc_prmy_draw">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_coa" class="form-label">Dokumen COA Bahan</label>
                                    <input type="file" class="form-control" name="doc_coa" id="doc_coa">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_msds" class="form-label">Dokumen MSDS Bahan</label>
                                    <input type="file" class="form-control" name="doc_msds" id="doc_msds">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_protap" class="form-label">Dokumen Protap Metoda Analisa dan
                                        Spesifikasi Produk</label>
                                    <input type="file" class="form-control" name="doc_protap" id="doc_protap">
                                </div>
                                <div class="mb-3">
                                    <label for="doc_process" class="form-label">Dokumen Process</label>
                                    <input type="file" class="form-control" name="doc_process" id="doc_process">
                                </div>
                                <div class="mb-3">
                                    <label for="any_doc" class="form-label">Dokumen Lainnya</label>
                                    <input type="file" class="form-control" name="any_doc" id="any_doc">
                                </div>

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
