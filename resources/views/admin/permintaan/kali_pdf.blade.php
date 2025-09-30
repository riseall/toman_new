<h3>FORMULIR PENDAFTARAN/ PERMINTAAN LAYANAN JASA KALIBRASI</h3>
<div class="form-container">
    <span style="font-weight: bold; font-size: 8pt">Prosedur pendaftaran / penerimaan layanan kalibrasi PT Phapros, Tbk
        :</span>
    <ol style="font-size: 8pt">
        <li>Pelanggan bersedia menjaga kerahasiaan informasi dari Lab. Kalibrasi PT Phapros, Tbk.</li>
        <li>Pelanggan telah menerima informasi yang cukup untuk metode kalibrasi, standar, dan hal teknis lain.</li>
        <li>PT Phapros, Tbk dapat menghubungi pelanggan apabila selama pelaksanaan kalibrasi terjadi kendala
            teknis (misal: alat tidak berfungsi setelah di cek, adjustment, dll).</li>
        <li>Pelanggan mengisi Form Pendaftaran. Form Pendaftaran terlampir di bawah ini.</li>
        <li>Pelanggan mengirim Form Pendaftaran yang sudah diisi diemail ke <a
                href="mailto:kalibrasi@phapros.co.id">kalibrasi@phapros.co.id</a> dan <a
                href="mailto:tollintolloutphapros@gmail.com">tollintolloutphapros@gmail.com</a>
            dengan melampirkan Sertifikat Kalibrasi terakhir (jika ada).</li>
        <li>Barang yang akan dikalibrasi dapat dikirimkan langsung atau ekspedisi ke Unit TOTI PT.Phapros.,Tbk
            Jl.Simongan 131 Semarang 50148 <sup style="font-weight: normal; font-style: italic; font-size: 6pt">*)</sup>
        </li>
    </ol>

    <i style="font-size: 7pt;">Catatan: Untuk barang yang dikalibrasi insitu/ditempat tidak mewajibkan untuk mengirimkan
        barang, barang dapat diambil langsung oleh PT.Phapros.,Tbk</i>

    <table style="margin-top: 10px; border: 1px solid;">
        <tr>
            <td class="label">No. Urut Pendaftaran </td>
            <td class="titik-koma">:</td>
            <td colspan="2" class="signature"><sup
                    style="font-weight: normal; font-style: italic; font-size: 6pt">(diisi oleh
                    PT.Phapros.,Tbk)</sup></td>
        </tr>
        <tr>
            <td class="label">Nama Perusahaan </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->user->entity->entity_name ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Alamat Perusahaan </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->user->entity->entity_address_line_1 ?? '-' }}
                {{ $kalibrasi->user->entity->entity_kota }}.</td>
        </tr>
        <tr>
            <td class="label">N.P.W.P </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->npwp }}</td>
        </tr>
        <tr>
            <td class="label">Alamat N.P.W.P </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->npwp_address }}</td>
        </tr>
        <tr>
            <td class="label">Telp. / Fax. </td>
            <td class="titik-koma">:</td>
            <td style="border: 0; font-size: 8pt">Telp. {{ $kalibrasi->user->entity->entity_phone }}</td>
            <td style="border-left: 0; font-size: 8pt">Fax. {{ $kalibrasi->fax }}</td>
        </tr>
        <tr>
            <td class="label"><i>Contact Person</i> / Penanggung jawab </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->user->first_name }} {{ $kalibrasi->user->last_name }}</td>
        </tr>
        <tr>
            <td class="label">E-mail </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->user->email }}</td>
        </tr>
        <tr>
            <td class="label">Nama Alat </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->tool_name }}</td>
        </tr>
        <tr>
            <td class="label" style="height: 45px; vertical-align: middle">Spesifikasi Alat <br>(rentang ukur,
                ketelitian, kelas, dll) </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->tool_spec }}</td>
        </tr>
        <tr>
            <td class="label">Merk Alat </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->tool_brand }}</td>
        </tr>
        <tr>
            <td class="label">Model / Type Alat </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->tool_type }}</td>
        </tr>
        <tr>
            <td class="label">No. Seri Alat </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->tool_no }}</td>
        </tr>
        <tr>
            <td class="label">Jumlah Alat </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->tool_amount }}</td>
        </tr>
        <tr>
            <td class="label" style="height: 30px; vertical-align: middle">Biaya + PPN 10% </td>
            <td class="titik-koma">:</td>
            <td colspan="2" class="signature"><sup
                    style="font-weight: normal; font-style: italic; font-size: 6pt">(diisi oleh
                    PT.Phapros.,Tbk)</sup></td>
        </tr>
        <tr>
            <td class="label">Copy sertifikat terakhir </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->certif_cp }}</td>
        </tr>
        <tr>
            <td class="label">Rentang ukur kalibrasi yang diminta </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->cal_range }}</td>
        </tr>
        <tr>
            <td class="label">Nama pemilik alat pada sertifikat </td>
            <td class="titik-koma">:</td>
            <td style="border: 0; width: 30%">{{ $kalibrasi->certif_name }}</td>
            <td style="border-left: 0"> No. Akreditasi KAN : {{ $kalibrasi->certif_no }}</td>
        </tr>
        <tr>
            <td class="label">Alamat pemilik alat pada sertifikat </td>
            <td class="titik-koma">:</td>
            <td colspan="2">{{ $kalibrasi->certif_address }}</td>
        </tr>
    </table>

    <table style="width:100%; margin-bottom: 0; text-align: center">
        <tr>
            <td style="border: 0; width: 40%">
                <div>
                    sesuai perjanjian sebelumnya yang sudah disepakati <br><br><br><br><br>
                    <div style="text-align: center;">
                        <span style="text-transform: uppercase;">diisi oleh PT. Phapros., Tbk</span>
                    </div>
                </div>
            </td>
            <td style="border: 0; width: 30%"></td>
            <td style="border: 0; width: 35%">
                <div style="text-align: right;">
                    Tanggal: (....................................................)<br><br><br><br>
                    (....................................................)<br>
                    <span style="font-style: italic; font-size: 7pt">Tanda tangan dan cap perusahaan</span>
                </div>
            </td>
        </tr>
    </table>

    <div class="sub-section">
        <table style="width:100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%;">
                    <span style="font-weight: bold">Status Pendaftaran:</span><br>
                    <div style="display: flex; align-items: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14"
                            style="margin-right: 5px;">
                            <title>checkbox-blank-outline</title>
                            <path
                                d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19H5V5H19Z" />
                        </svg>
                        <span style="display: inline-block;">Pendaftaran diterima
                            tanggal..................................................</span>
                    </div>
                    <div class="signature">
                        <sup style="font-weight: normal; font-style: italic; font-size: 6pt">(diisi oleh unit TOTI
                            PT.Phapros.,Tbk)</sup>
                    </div>
                </td>
                <td style="width: 50%;" rowspan="2"><span style="font-weight: bold">Status Alat (isi saat penyerahan
                        alat)</span>
                    <br>
                    No. Order :.............................. Tanggal Penyerahan :.............................. <br>
                    Kelengkapan alat:
                    .................................................................................... <br>
                    .................................................................................................................
                    <br>
                    Catatan :
                    .................................................................................................<br>
                    .................................................................................................................
                    <br>
                    .................................................................................................................
                    <br>
                    .................................................................................................................
                    <br>
                    Tanda tangan penerima : <br> <br>
                    .................................................................................................................
                    <br><br>
                    Nama :
                    ....................................................................................................
                </td>
            </tr>
            <tr>
                <td>
                    <div style="display: flex; align-items: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14"
                            style="margin-right: 5px;">
                            <title>checkbox-blank-outline</title>
                            <path
                                d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19H5V5H19Z" />
                        </svg>
                        <span style="display: inline-block;">Layanan ditangguhkan karena </span>
                    </div>
                    <ul style="margin: 0">
                        <li>Kapasitas penuh</li>
                        <li>Diluar lingkup layanan</li>
                        <li>Sedang dalam pemeliharaan standar</li>
                        <li>Lain-lain:
                            .................................................................................. <br>
                            .....................................................................................................
                        </li>
                    </ul>
                    <div style="display: flex; align-items: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14"
                            style="margin-right: 5px;">
                            <title>checkbox-blank-outline</title>
                            <path
                                d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19H5V5H19Z" />
                        </svg>
                        <span style="display: inline-block;">Layanan diterima (waktu penyelesaian sesuai
                            kesepakatan)</span>
                    </div>
                    <ul style="margin-bottom: 0">
                        <li>Selesai tanggal: .........................................................................
                        </li>
                        <div>
                            <sup style="font-weight: normal; font-style: italic; font-size: 6pt">(diisi oleh unit
                                Validasi-Kalibrasi PT. Phapros, Tbk)</sup>
                        </div>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
</div>
