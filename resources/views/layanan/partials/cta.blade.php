<div class="container">
    <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
        <div class="rounded bg-primary bg-gradient p-lg-5 p-4">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title-dark text-white mb-4">Anda Tertarik? Ajukan Permintaan!</h4>
                    <p class="text-white-50 para-800 mx-auto">Ingin memproduksi produk dengan standar terbaik?
                        <span class="text-light fw-bold">Toll Manufacturing</span> kami siap membantu mewujudkannya.
                        Daftarkan produk Anda sekarang dan mulailah perjalanan menuju produksi yang lebih efisien dan
                        profesional.
                    </p>
                    <div class="mt-4">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#permintaanForm"
                            class="btn btn-success mt-2 me-2"><i class="uil uil-file-plus-alt"></i>
                            Ajukan Permintaan</a>
                        <a href="javascript:void(0)" class="btn btn-outline-info mt-2 me-2"><i
                                class="uil uil-phone"></i>
                            Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div>
</div>


<!-- Modal Content Start -->
<div class="modal fade" id="permintaanForm" tabindex="-1" aria-labelledby="permintaanFormTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="permintaanFormTitle">Form Permohonan Toll-Manufacturing</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                        class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <div class="modal-body">
                @include('user.permintaan.create')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="close-modal">Close</button>
                <button type="button" class="btn btn-success">Kirim</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Content End -->
