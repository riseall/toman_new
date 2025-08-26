// Ambil elemen modal
var productModal = document.getElementById("productModal");

// Tambahkan event listener yang akan dijalankan TEPAT SEBELUM modal ditampilkan
productModal.addEventListener("show.bs.modal", function (event) {
    // Dapatkan elemen yang memicu modal (yaitu tag <a> yang kita klik)
    var triggerElement = event.relatedTarget;

    // Cari tag <img> di dalam elemen pemicu tersebut
    var imageInCard = triggerElement.querySelector("img");

    // Ambil path gambar (src) dan alt text dari gambar yang diklik
    var imageSrc = imageInCard.getAttribute("src");
    var imageAlt = imageInCard.getAttribute("alt");

    // Cari tag <img> dan judul di dalam modal
    var modalImage = productModal.querySelector("#productImage");
    var modalTitle = productModal.querySelector("#productModalLabel");

    // Update src dan alt dari gambar di modal, dan juga judul modal
    modalImage.src = imageSrc;
    modalImage.alt = imageAlt;
    modalTitle.textContent = imageAlt; // Menggunakan alt text sebagai judul modal
});
