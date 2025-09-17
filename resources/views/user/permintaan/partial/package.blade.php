<h5 class="mb-3 fw-bold">Kemasan Primer</h5>

{{-- Kemasan Primer --}}
<div id="primer-tablet-kapsul" style="display: none">
    <label for="pmry_pkg_type" class="form-label">Jenis Kemasan Primer</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pmry_pkg_type" id="pmry_pkg_type1" value="Strip">
            <label class="form-check-label" for="pmry_pkg_type1">Strip</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pmry_pkg_type" id="pmry_pkg_type2" value="Blister">
            <label class="form-check-label" for="pmry_pkg_type2">Blister</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pmry_pkg_type" id="pmry_pkg_type3" value="Sachet">
            <label class="form-check-label" for="pmry_pkg_type3">Sachet</label>
        </div>
    </div>
    <label for="pmry_pkg_material" class="form-label">Jenis Bahan Kemasan Primer</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pmry_pkg_material" id="pmry_pkg_material1"
                value="PLM">
            <label class="form-check-label" for="pmry_pkg_material1">PLM</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pmry_pkg_material" id="pmry_pkg_material2"
                value="PTP">
            <label class="form-check-label" for="pmry_pkg_material2">PTP</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pmry_pkg_material" id="pmry_pkg_material3"
                value="PVC">
            <label class="form-check-label" for="pmry_pkg_material3">PVC</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pmry_pkg_material" id="pmry_pkg_material4"
                value="PVDC">
            <label class="form-check-label" for="pmry_pkg_material4">PVDC</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="pmry_pkg_width" class="form-label">Lebar PLM / PTP / PVC /
            PVDC</label>
        <input type="text" class="form-control" id="pmry_pkg_width" name="pmry_pkg_width">
    </div>
</div>
<div id="primer-lainnya" style="display: none">
    <div class="mb-3">
        <label for="pmry_pkg_spec" class="form-label">Spesifikasi Kemasan Primer</label>
        <input type="text" class="form-control" id="pmry_pkg_spec" name="pmry_pkg_spec">
    </div>
</div>

<hr>

<h5 class="mb-3 fw-bold">Kemasan Sekunder</h5>

{{-- Kemasan Sekunder --}}
{{-- etiket lain --}}
<div id="skndr-lainnya" style="display: none">
    <label for="scnd_etiket" class="form-label">Etiket</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="scnd_etiket" id="scnd_etiket1" value="Etiket Botol">
            <label for="scnd_etiket1" class="form-check-label">Etiket Botol</label>
        </div>
    </div>
</div>
{{-- etiker parenteral --}}
<div id="skndr-parenteral" style="display: none">
    <label for="scnd_etiket" class="form-label">Etiket</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="scnd_etiket" id="scnd_etiket1"
                value="Etiket Ampul">
            <label for="scnd_etiket1" class="form-check-label">Etiket Ampul</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="scnd_etiket" id="scnd_etiket2"
                value="Etiket Vial Berupa Sticker">
            <label for="scnd_etiket2" class="form-check-label">Etiket Vial Berupa
                Sticker</label>
        </div>
        <div class="form-check form-check-inline" for="scnd_etiket">
            <input type="radio" class="form-check-input" name="scnd_etiket" id="scnd_etiket3"
                value="Etiket Vial Non Sticker">
            <label for="scnd_etiket3" class="form-check-label">Etiket Vial Non
                Sticker</label>
        </div>
    </div>
</div>
<label for="scnd_dus" class="form-label">Dus</label>
<div class="mb-3">
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="scnd_dus" id="scnd_dus1" value="Dus Individual">
        <label for="scnd_dus1" class="form-check-label">Dus Individual</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="scnd_dus" id="scnd_dus2" value="Non Dus Individual">
        <label for="scnd_dus2" class="form-check-label">Non Dus
            Individual</label>
    </div>
</div>
<div class="mb-3">
    <label class="form-label" for="scnd_dus_col">Dus Kolektif Isi</label>
    <input type="text" class="form-control" id="scnd_dus_col" name="scnd_dus_col">
</div>

<hr>

<h5 class="mb-3 fw-bold">Kemasan Tersier</h5>

{{-- Kemasan Tersier --}}
<div class="mb-3">
    <label for="trsr_box_mstr" class="form-label">Master Box Isi</label>
    <input type="text" class="form-control" id="trsr_box_mstr" name="trsr_box_mstr">
</div>
<div class="mb-3">
    <label for="trsr_etiket" class="form-label">Etiket</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="trsr_etiket" id="trsr_etiket1" value="Sticker">
            <label for="trsr_etiket1" class="form-check-label">Sticker</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="trsr_etiket" id="trsr_etiket2"
                value="Non Sticker">
            <label for="trsr_etiket2" class="form-check-label">Non Sticker</label>
        </div>
        <div class="form-check form-check-inline" for="trsr_etiket">
            <input type="radio" class="form-check-input" name="trsr_etiket" id="trsr_etiket3" value="Lainnya">
            <label for="trsr_etiket3" class="form-check-label">Lainnya</label>
        </div>
    </div>
</div>
