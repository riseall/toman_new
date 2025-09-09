var productModal = document.getElementById("productModal");

productModal.addEventListener("show.bs.modal", function (event) {
    var triggerElement = event.relatedTarget;
    var imageInCard = triggerElement.querySelector("img");
    var betsSize = triggerElement.getAttribute("data-batch");
    var expYear = triggerElement.getAttribute("data-exp");
    var package = triggerElement.getAttribute("data-pcg");
    var imageSrc = imageInCard.getAttribute("src");
    var imageAlt = imageInCard.getAttribute("alt");

    var modalBetsSize = productModal.querySelector("#betsSize");
    var modalExpYear = productModal.querySelector("#expYear");
    var modalPackage = productModal.querySelector("#package");
    var modalImage = productModal.querySelector("#productImage");
    var modalTitle = productModal.querySelector("#productModalLabel");
    modalBetsSize.textContent = betsSize;
    modalExpYear.textContent = expYear;
    modalPackage.textContent = package;
    modalImage.src = imageSrc;
    modalImage.alt = imageAlt;
    modalTitle.textContent = imageAlt;
});
