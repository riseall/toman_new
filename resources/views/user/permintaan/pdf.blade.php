<div class="section-header">Identitas Pemohon</div>
<table>
    <tbody>
        <tr>
            <td>Nama Perusahaan</td>
            <td>: {{ $permintaan->user->entity_name ?? '-' }}</td>
        </tr>
        <tr>
            <td>Alamat Perusahaan</td>
            <td>: {{ $permintaan->user->company_address ?? '-' }}</td>
        </tr>
        <tr>
            <td>Nama PIC</td>
            <td>: {{ $permintaan->user->first_name }} {{ $permintaan->user->last_name ?? '-' }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{ $permintaan->user->email ?? '-' }}</td>
        </tr>
        <tr>
            <td>No. Telepon/HP/Whatsapp</td>
            <td>: {{ $permintaan->user->phone ?? '-' }}</td>
        </tr>
    </tbody>
</table>

<div class="section-header">Informasi Produk</div>
<table>
    <tbody>
        <tr>
            <td>Nama Produk</td>
            <td>: {{ $permintaan->prod_name ?? '-' }}</td>
        </tr>
        <tr>
            <td>Kandungan Bahan Aktif</td>
            <td>: {{ $permintaan->act_ingredient ?? '-' }}</td>
        </tr>
        <tr>
            <td>Golongan Bahan Aktif</td>
            <td>: {{ $permintaan->act_ingredient_group ?? '-' }}</td>
        </tr>
        <tr>
            <td>Kategori Produk</td>
            <td>: {{ $permintaan->prod_category ?? '-' }}</td>
        </tr>
        <tr>
            <td>Lingkup Pekerjaan</td>
            <td>: {{ $permintaan->work_scope ?? '-' }}</td>
        </tr>
    </tbody>
</table>

<div class="section-header">Karakteristik Produk</div>
@if ($permintaan->req_name === 'Tablet')
    <table>
        <tbody>
            <tr>
                <td colspan="2"><b>Tablet</b></td>
            </tr>
            <tr>
                <td>Bentuk</td>
                <td>: {{ $permintaan->bentuk ?? '-' }}</td>
            </tr>
            <tr>
                <td>Warna</td>
                <td>: {{ $permintaan->color ?? '-' }}</td>
            </tr>
            <tr>
                <td>Bobot / Range Bobot</td>
                <td>: {{ $permintaan->bobot_range_bobot ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="2">Dimensi</td>
            </tr>
            <tr>
                <td>- Diameter</td>
                <td>: {{ $permintaan->diameter ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Tebal</td>
                <td>: {{ $permintaan->tebal ?? '-' }}</td>
            </tr>
            <tr>
                <td>Tipe Tablet</td>
                <td>: {{ $permintaan->tablet_type ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="2">Identifikasi</td>
            </tr>
            <tr>
                <td>- Kadar Air</td>
                <td>: {{ $permintaan->kadar_air ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Kadar Zat Aktif</td>
                <td>: {{ $permintaan->kadar_zat_aktif ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Dissolusi</td>
                <td>: {{ $permintaan->dissolusi ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@elseif ($permintaan->req_name === 'Kapsul')
    <table>
        <tbody>
            <tr>
                <td colspan="2"><b>Kapsul</b></td>
            </tr>
            <tr>
                <td>Ukuran Kapsul</td>
                <td>: {{ $permintaan->capsule_size ?? '-' }}</td>
            </tr>
            <tr>
                <td>Bobot / Range Bobot</td>
                <td>: {{ $permintaan->bobot_range_bobot ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kadar Air</td>
                <td>: {{ $permintaan->kadar_air ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kadar Zat Aktif</td>
                <td>: {{ $permintaan->kadar_zat_aktif ?? '-' }}</td>
            </tr>
            <tr>
                <td>Dissolusi</td>
                <td>: {{ $permintaan->dissolusi ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@elseif ($permintaan->req_name === 'Parental')
    <table>
        <tbody>
            <tr>
                <td colspan="2"><b>Parental</b></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>: {{ $permintaan->type ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kemasan</td>
                <td>: {{ $permintaan->package ?? '-' }}</td>
            </tr>
            <tr>
                <td>Bobot / Range Bobot</td>
                <td>: {{ $permintaan->bobot_range_bobot ?? '-' }}</td>
            </tr>
            <tr>
                <td>Volume / Range Volume</td>
                <td>: {{ $permintaan->volume_range_volume ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>Identifikasi</b></td>
            </tr>
            <tr>
                <td>- pH</td>
                <td>: {{ $permintaan->ph ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Osmolaritas</td>
                <td>: {{ $permintaan->osmolaritas ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Berat Jenis</td>
                <td>: {{ $permintaan->weight_type ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Kadar Zat Aktif</td>
                <td>: {{ $permintaan->kadar_zat_aktif ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Mikroba / Endotoksin</td>
                <td>: {{ $permintaan->mikroba_endotoksin ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Partikel / Asing</td>
                <td>: {{ $permintaan->partikel_asing ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@elseif ($permintaan->req_name === 'Cairan')
    <table>
        <tbody>
            <tr>
                <td colspan="2"><b>Cairan</b></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>: {{ $permintaan->type ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kemasan</td>
                <td>: {{ $permintaan->package ?? '-' }}</td>
            </tr>
            <tr>
                <td>Volume</td>
                <td>: {{ $permintaan->volume ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>Identifikasi</b></td>
            </tr>
            <tr>
                <td>- pH</td>
                <td>: {{ $permintaan->ph ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Viskositas</td>
                <td>: {{ $permintaan->viskositas ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Berat Jenis</td>
                <td>: {{ $permintaan->weight_type ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Kadar Zat Aktif</td>
                <td>: {{ $permintaan->kadar_zat_aktif ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@elseif ($permintaan->req_name === 'Powder')
    <table>
        <tbody>
            <tr>
                <td colspan="2"><b>Powder</b></td>
            </tr>
            <tr>
                <td>Kemasan</td>
                <td>: {{ $permintaan->package ?? '-' }}</td>
            </tr>
            <tr>
                <td>Bobot / Range Bobot</td>
                <td>: {{ $permintaan->bobot_range_bobot ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>Identifikasi</b></td>
            </tr>
            <tr>
                <td>- Pemerian Fisik</td>
                <td>: {{ $permintaan->pemerian_fisik ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Kadar Zat Aktif</td>
                <td>: {{ $permintaan->kadar_zat_aktif ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@elseif ($permintaan->req_name === 'Semisolid')
    <table>
        <tbody>
            <tr>
                <td colspan="2"><b>Semisolid</b></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>: {{ $permintaan->type ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kemasan</td>
                <td>: {{ $permintaan->package ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>Identifikasi</b></td>
            </tr>
            <tr>
                <td>- Pemerian Fisik</td>
                <td>: {{ $permintaan->pemerian_fisik ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Viskositas</td>
                <td>: {{ $permintaan->viskositas ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Kadar Zat Aktif</td>
                <td>: {{ $permintaan->kadar_zat_aktif ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@endif

<table>
    <tbody>
        <tr>
            <td colspan="2">Persyaratan Khusus</td>
        </tr>
        <tr>
            <td>- Temperatur Maksimal</td>
            <td>: {{ $permintaan->max_temp ?? '-' }}</td>
        </tr>
        <tr>
            <td>- Kelembaban Maksimal</td>
            <td>: {{ $permintaan->max_humidity ?? '-' }}</td>
        </tr>
        <tr>
            <td>- Sensitif Cahaya</td>
            <td>: {{ $permintaan->light_sensitivity ?? '-' }}</td>
        </tr>
        @if ($permintaan->req_name === 'Parental')
            <tr>
                <td>- Sensitivitas Oksidasi</td>
                <td>: {{ $permintaan->oxidation_sensitivity ?? '-' }}</td>
            </tr>
        @endif
    </tbody>
</table>

<div class="section-header">Karakteristik Kemasan</div>
<table>
    <tbody>
        @if ($permintaan->req_name === 'Tablet' || $permintaan->req_name === 'Kapsul')
            <tr>
                <td>Kemasan Primer</td>
                <td>: {{ $permintaan->pmry_pkg_type ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Bahan Kemasan Primer</td>
                <td>: {{ $permintaan->pmry_pkg_material ?? '-' }}</td>
            </tr>
            <tr>
                <td>- Lebar PLM/PTP/PVC/PVDC</td>
                <td>: {{ $permintaan->pmry_pkg_width ?? '-' }}</td>
            </tr>
        @elseif (
            $permintaan->req_name === 'Parental' ||
                $permintaan->req_name === 'Cairan' ||
                $permintaan->req_name === 'Powder' ||
                $permintaan->req_name === 'Semisolid')
            <tr>
                <td colspan="2">Kemasan Primer</td>
            </tr>
            <tr>
                <td>- Spesifikasi Kemasan Primer</td>
                <td>: {{ $permintaan->pmry_pkg_spec ?? '-' }}</td>
            </tr>
        @endif

        <tr>
            <td colspan="2">Kemasan Sekunder</td>
        </tr>
        <tr>
            <td>- Etiket</td>
            <td>: {{ $permintaan->scnd_etiket ?? '-' }}</td>
        </tr>
        <tr>
            <td>- Dus</td>
            <td>: {{ $permintaan->scnd_dus ?? '-' }}</td>
        </tr>
        <tr>
            <td>- Dus Kolektif Isi</td>
            <td>: {{ $permintaan->scnd_dus_col ?? '-' }}</td>
        </tr>

        <tr>
            <td colspan="2">Kemasan Tersier</td>
        </tr>
        <tr>
            <td>- Master Box Isi</td>
            <td>: {{ $permintaan->trsr_box_mstr ?? '-' }}</td>
        </tr>
        <tr>
            <td>- Etiket</td>
            <td>: {{ $permintaan->trsr_etiket ?? '-' }}</td>
        </tr>
    </tbody>
</table>

<table class="table-with-page-break-after">
    <tbody>
        <tr>
            <td class="section-header" style="width: 35%;">Penyedia RM/PM</td>
            <td style="width: 65%;">: {{ $permintaan->penyedia_rm_pm ?? '-' }}</td>
        </tr>
        <tr>
            <td class="section-header" style="width: 35%;">Flowchart Proses</td>
            <td style="width: 65%;">: {{ $permintaan->flowchart_process ?? '-' }}</td>
        </tr>
    </tbody>
</table>

<div class="section-header">Cakupan Pekerjaan</div>
<table>
    <tbody>
        <tr>
            <td>- Formulasi</td>
            <td>: {{ $permintaan->is_formulation ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Penimbangan</td>
            <td>: {{ $permintaan->is_weighing ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Proses Pengolahan</td>
            <td>: {{ $permintaan->is_procces ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Proses Pengemasan</td>
            <td>: {{ $permintaan->is_package ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Pemeriksaan QC (RM/PM/FG)</td>
            <td>: {{ $permintaan->qc_inspect ?? '-' }}</td>
        </tr>
        <tr>
            <td>- Pengembangan Formula</td>
            <td>: {{ $permintaan->is_formula_dev ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Validasi Proses</td>
            <td>: {{ $permintaan->is_process_val ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Validasi Pembersihan</td>
            <td>: {{ $permintaan->is_clean_val ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Validasi Metode Analisa</td>
            <td>: {{ $permintaan->is_analyst_val ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Uji Stabilitas</td>
            <td>: {{ $permintaan->is_stabil_test ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td>- Uji Lainnya</td>
            <td>: {{ $permintaan->any_test ?? '-' }}</td>
        </tr>
        <tr>
            <td>- Penanganan Limbah</td>
            <td>: {{ $permintaan->is_limbah_handling ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <td colspan="2"> (Jika sebagai bahan aktif baru)</td>
        </tr>
    </tbody>
</table>

<div class="section-header">Informasi Harga dan Forecast</div>
<table>
    <tbody>
        <tr>
            <td>Estimasi Harga - HJP</td>
            <td>: {{ $permintaan->hjp_estimated ?? '-' }}</td>
        </tr>
        <tr>
            <td>Estimasi Harga - HNA</td>
            <td>: {{ $permintaan->hna_estimated ?? '-' }}</td>
        </tr>
        <tr>
            <td>Forecast - Tahun ke-1</td>
            <td>: {{ $permintaan->fc_1 ?? '-' }}</td>
        </tr>
        <tr>
            <td>Forecast - Tahun ke-2</td>
            <td>: {{ $permintaan->fc_2 ?? '-' }}</td>
        </tr>
        <tr>
            <td>Forecast - Tahun ke-3</td>
            <td>: {{ $permintaan->fc_3 ?? '-' }}</td>
        </tr>
        <tr>
            <td>Forecast - Tahun ke-4</td>
            <td>: {{ $permintaan->fc_4 ?? '-' }}</td>
        </tr>
        <tr>
            <td>Forecast - Tahun ke-5</td>
            <td>: {{ $permintaan->fc_5 ?? '-' }}</td>
        </tr>
        <tr>
            <td>Catatan</td>
            <td>: {{ $permintaan->any_note ?? '-' }}</td>
        </tr>
    </tbody>
</table>

<table class="signature-table">
    <tr>
        <td>
            <br><br>
            <p>Pemohon:<br><br><br><br><br>
                (.......................................)</p>
            <p>Jabatan : ...........................................</p>
        </td>
        <td>
            <p>.........................................................,
                {{ \Carbon\Carbon::parse($permintaan->req_date)->format('d-m-Y') }}</p>
            <br>
            <p>Disetujui Oleh:<br><br><br><br><br>
                (.......................................)</p>
            <p>Jabatan : ...........................................</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="height: 30px;"></td> {{-- Memberi sedikit spasi antar baris tanda tangan --}}
    </tr>
    <tr>
        <td>
            <p>Direkomendasi Oleh:<br><br><br><br><br>
                (.......................................)</p>
            <p>Jabatan : Manager TOTI PT Phapros Tbk.</p>
        </td>
        <td>
            <p>Disetujui Oleh:<br><br><br><br><br>
                (.......................................)</p>
            <p>Jabatan : General Manager PPIC PT Phapros Tbk.</p>
        </td>
    </tr>
</table>
