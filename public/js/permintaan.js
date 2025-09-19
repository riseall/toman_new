document.addEventListener("DOMContentLoaded", function () {
    // Mengambil elemen yang diperlukan dari DOM
    const reqNameSelect = document.getElementById("dossage_id");
    const dynamicContainer = document.getElementById("dynamic-form");
    const specificForms = document.querySelectorAll(".form-specific"); // Gunakan nama yang lebih jelas: specificForms
    const parenteralSpecific = document.getElementById("parenteral-specific");
    const primerTabKapSpecific = document.getElementById(
        "primer-tablet-kapsul"
    );
    const primerLainSpecific = document.getElementById("primer-lainnya");
    const sekunderParenteral = document.getElementById("skndr-parenteral");
    const sekunderLain = document.getElementById("skndr-lainnya");
    const privacyPolicy = document.getElementById("privacy-policy");
    const submitButton = document.getElementById("submit"); // Mengganti 'submit' dengan 'submitButton' untuk menghindari konflik nama

    // Atur status awal tombol submit
    submitButton.disabled = !privacyPolicy.checked;

    // Event listener untuk checkbox privacy policy
    privacyPolicy.addEventListener("change", function () {
        submitButton.disabled = !this.checked;
    });

    // Fungsi untuk mengosongkan dan menonaktifkan input dalam elemen tertentu
    function disableAndClearInputs(containerElement) {
        const inputs = containerElement.querySelectorAll(
            "input, select, textarea"
        );
        inputs.forEach((item) => {
            // Nonaktifkan input
            item.setAttribute("disabled", "disabled");
            // Kosongkan nilai input
            if (item.type === "checkbox" || item.type === "radio") {
                item.checked = false;
            } else {
                item.value = "";
            }
        });
    }

    // Fungsi untuk mengaktifkan input dalam elemen tertentu
    function enableInputs(containerElement) {
        const inputs = containerElement.querySelectorAll(
            "input, select, textarea"
        );
        inputs.forEach((item) => {
            item.removeAttribute("disabled");
        });
    }

    // Fungsi utama untuk mengatur tampilan dan status input form
    function toggleFormsAndInputStates() {
        const selectedValue = $("#dossage_id option:selected").data("type");

        console.log(selectedValue);

        // --- FASE 1: Sembunyikan dan Nonaktifkan SEMUA form spesifik dan terkait ---
        specificForms.forEach((group) => {
            group.style.display = "none";
            disableAndClearInputs(group); // Nonaktifkan dan kosongkan input
        });
        parenteralSpecific.style.display = "none";
        disableAndClearInputs(parenteralSpecific);
        primerTabKapSpecific.style.display = "none";
        disableAndClearInputs(primerTabKapSpecific);
        primerLainSpecific.style.display = "none";
        disableAndClearInputs(primerLainSpecific);
        sekunderParenteral.style.display = "none";
        disableAndClearInputs(sekunderParenteral);
        sekunderLain.style.display = "none";
        disableAndClearInputs(sekunderLain);

        // Sembunyikan kontainer utama jika tidak ada pilihan yang valid
        if (!selectedValue) {
            dynamicContainer.style.display = "none";
            return; // Berhenti di sini jika tidak ada pilihan
        }

        // --- FASE 2: Tampilkan dan Aktifkan form yang dipilih dan terkait ---
        dynamicContainer.style.display = "block";

        // Tampilkan dan aktifkan form spesifik (misal: form-tablet)
        const targetFieldId = "form-" + selectedValue.toLowerCase();
        const targetGroup = document.getElementById(targetFieldId);
        if (targetGroup) {
            targetGroup.style.display = "block";
            enableInputs(targetGroup); // Aktifkan input di form yang dipilih
        }

        // Atur tampilan dan status input untuk bagian 'Parenteral Specific'
        if (selectedValue === "Parenteral") {
            parenteralSpecific.style.display = "block";
            enableInputs(parenteralSpecific);
        }

        // Atur tampilan dan status input untuk 'Kemasan Primer'
        if (selectedValue === "Tablet" || selectedValue === "Kapsul") {
            primerTabKapSpecific.style.display = "block";
            enableInputs(primerTabKapSpecific);
        } else {
            primerLainSpecific.style.display = "block";
            enableInputs(primerLainSpecific);
        }

        // Atur tampilan dan status input untuk 'Kemasan Sekunder'
        if (selectedValue === "Parenteral") {
            sekunderParenteral.style.display = "block";
            enableInputs(sekunderParenteral);
        } else {
            sekunderLain.style.display = "block";
            enableInputs(sekunderLain);
        }
    }

    // Panggil fungsi saat halaman pertama kali dimuat
    toggleFormsAndInputStates();

    // Tambahkan event listener untuk perubahan pada selectbox req_name
    reqNameSelect.addEventListener("change", toggleFormsAndInputStates);
});
