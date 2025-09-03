@extends('layouts.app', [
    'title' => 'Monitoring',
    'desc' => '',
])

@section('bg', '807A0535.jpg')
@section('content')
    <style>
        .accordion-button:not(.collapsed) {
            color: #ffffff !important;
            background-color: #2f55d4;
        }

        .accordion .accordion-item .accordion-button:before {
            color: #ffffff !important;
        }

        .stepper-wrapper {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin: 30px 0;
        }

        .stepper-item {
            text-align: center;
            position: relative;
            flex: 1;
            cursor: pointer;
        }

        .step-counter {
            width: 50px;
            height: 50px;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e0e0e0;
            color: #fff;
            font-weight: bold;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .step-name {
            font-size: 14px;
            font-weight: 500;
        }

        .active .step-counter {
            background: #0d6efd;
            box-shadow: 0 0 10px rgba(13, 110, 253, 0.6);
        }

        .completed .step-counter {
            background: #198754;
        }

        .stepper-item::before,
        .stepper-item::after {
            content: '';
            position: absolute;
            top: 25px;
            height: 4px;
            background: #e0e0e0;
            width: 100%;
            z-index: 1;
        }

        .stepper-item::before {
            left: -50%;
        }

        .stepper-item::after {
            left: 50%;
        }

        .stepper-item:first-child::before {
            content: none;
        }

        .stepper-item:last-child::after {
            content: none;
        }

        .completed::after {
            background: #198754;
        }

        .hidden-section {
            display: none;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Pantau Permintaan</h3>
                    <p class="text-muted para-desc mb-0 mx-auto">Pantau semua transaksi permintaan Anda dengan mudah dan
                        cepat.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="accordion" id="accordionKAN">
                <!-- Massa -->
                <div class="accordion-item rounded shadow-sm border wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            TI25-13 — Cefoperazone Sulbactam
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <!-- Timeline Dokumen -->
                            <h6 class="fw-bold">Progress Dokumen</h6>
                            <div class="stepper-wrapper" id="timeline-dokumen-1">
                                <div class="stepper-item" data-step="1">
                                    <div class="step-counter"><i class="uil uil-file-edit-alt fs-3"></i></div>
                                    <div class="step-name">Form</div>
                                </div>
                                <div class="stepper-item" data-step="2">
                                    <div class="step-counter"><i class="uil uil-suitcase fs-3"></i></div>
                                    <div class="step-name">Nego</div>
                                </div>
                                <div class="stepper-item" data-step="3">
                                    <div class="step-counter"><i class="uil uil-file-copy-alt fs-3"></i></div>
                                    <div class="step-name">Agreement</div>
                                </div>
                                {{-- <div class="stepper-item" data-step="4">
                                    <div class="step-counter"><i class="mdi mdi-transfer fs-3"></i></div>
                                    <div class="step-name">Trans - Tech</div>
                                </div> --}}
                                <div class="stepper-item" data-step="4">
                                    <div class="step-counter"><i class="uil uil-clipboard-notes fs-3"></i></div>
                                    <div class="step-name">Registrasi</div>
                                </div>
                                <div class="stepper-item" data-step="5">
                                    <div class="step-counter"><i class="mdi mdi-rocket-launch-outline fs-3"></i></div>
                                    <div class="step-name">Komersial</div>
                                </div>
                            </div>
                            <div class="progress mb-4" style="height: 20px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                    id="progress-dokumen-1" style="width: 0%;">
                                    0%
                                </div>
                            </div>

                            <!-- Timeline Produk (hidden dulu) -->
                            <div id="produk-section-1" class="hidden-section">
                                <h6 class="fw-bold">Progress Produk</h6>
                                <div class="stepper-wrapper" id="timeline-produk-1">
                                    <div class="stepper-item" data-step="1">
                                        <div class="step-counter"><span class="mdi mdi-scale fs-3"></span></div>
                                        <div class="step-name">Timbang <br>(WOR)</div>
                                    </div>
                                    <div class="stepper-item" data-step="2">
                                        <div class="step-counter"><span class="mdi mdi-cog-outline fs-3"></span></div>
                                        <div class="step-name">Olah <br> (GPA)</div>
                                    </div>
                                    <div class="stepper-item" data-step="3">
                                        <div class="step-counter">
                                            <span class="mdi mdi-package-variant fs-3"></span>
                                        </div>
                                        <div class="step-name">Kemas <br> (GPM)</div>
                                    </div>
                                    <div class="stepper-item" data-step="4">
                                        <div class="step-counter"><span
                                                class="mdi mdi-checkbox-multiple-marked-outline fs-3"></span></div>
                                        <div class="step-name">Quality Check <br> (GRR)</div>
                                    </div>
                                    <div class="stepper-item" data-step="5">
                                        <div class="step-counter"><span class="mdi mdi-flask-plus-outline fs-3"></span>
                                        </div>
                                        <div class="step-name">Rilis <br> (GJT)</div>
                                    </div>
                                </div>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                        id="progress-produk-1" style="width: 0%;">
                                        0%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mt-4" id="accordion2">
                <!-- Massa -->
                <div class="accordion-item rounded shadow-sm border wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            TI25-13 — Cefoperazone Sulbactam
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse border-0 collapse show" aria-labelledby="heading2"
                        data-bs-parent="#accordion2">
                        <div class="accordion-body text-muted">
                            <!-- Timeline Dokumen -->
                            <h6 class="fw-bold">Progress Dokumen</h6>
                            <div class="stepper-wrapper" id="timeline-dokumen-1">
                                <div class="stepper-item" data-step="1">
                                    <div class="step-counter"><i class="uil uil-file-edit-alt fs-3"></i></div>
                                    <div class="step-name">Form</div>
                                </div>
                                <div class="stepper-item" data-step="2">
                                    <div class="step-counter"><i class="uil uil-suitcase fs-3"></i></div>
                                    <div class="step-name">Nego</div>
                                </div>
                                <div class="stepper-item" data-step="3">
                                    <div class="step-counter"><i class="uil uil-file-copy-alt fs-3"></i></div>
                                    <div class="step-name">Agreement</div>
                                </div>
                                {{-- <div class="stepper-item" data-step="4">
                                    <div class="step-counter"><i class="mdi mdi-transfer fs-3"></i></div>
                                    <div class="step-name">Trans - Tech</div>
                                </div> --}}
                                <div class="stepper-item" data-step="4">
                                    <div class="step-counter"><i class="uil uil-clipboard-notes fs-3"></i></div>
                                    <div class="step-name">Registrasi</div>
                                </div>
                                <div class="stepper-item" data-step="5">
                                    <div class="step-counter"><i class="mdi mdi-rocket-launch-outline fs-3"></i></div>
                                    <div class="step-name">Komersial</div>
                                </div>
                            </div>
                            <div class="progress mb-4" style="height: 20px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                    id="progress-dokumen-1" style="width: 0%;">
                                    0%
                                </div>
                            </div>

                            <!-- Timeline Produk (hidden dulu) -->
                            <div id="produk-section-1" class="hidden-section">
                                <h6 class="fw-bold">Progress Produk</h6>
                                <div class="stepper-wrapper" id="timeline-produk-1">
                                    <div class="stepper-item" data-step="1">
                                        <div class="step-counter"><span class="mdi mdi-scale fs-3"></span></div>
                                        <div class="step-name">Timbang <br>(WOR)</div>
                                    </div>
                                    <div class="stepper-item" data-step="2">
                                        <div class="step-counter"><span class="mdi mdi-cog-outline fs-3"></span></div>
                                        <div class="step-name">Olah <br> (GPA)</div>
                                    </div>
                                    <div class="stepper-item" data-step="3">
                                        <div class="step-counter">
                                            <span class="mdi mdi-package-variant fs-3"></span>
                                        </div>
                                        <div class="step-name">Kemas <br> (GPM)</div>
                                    </div>
                                    <div class="stepper-item" data-step="4">
                                        <div class="step-counter"><span
                                                class="mdi mdi-checkbox-multiple-marked-outline fs-3"></span></div>
                                        <div class="step-name">Quality Check <br> (GRR)</div>
                                    </div>
                                    <div class="stepper-item" data-step="5">
                                        <div class="step-counter"><span class="mdi mdi-flask-plus-outline fs-3"></span>
                                        </div>
                                        <div class="step-name">Rilis <br> (GJT)</div>
                                    </div>
                                </div>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                        id="progress-produk-1" style="width: 0%;">
                                        0%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function initTimeline(timelineId, progressId, produkSectionId, produkTimelineId, produkProgressId) {
            const timeline = document.getElementById(timelineId);
            const progress = document.getElementById(progressId);
            const produkSection = document.getElementById(produkSectionId);
            const steps = timeline.querySelectorAll(".stepper-item");

            steps.forEach(step => {
                step.addEventListener("click", () => {
                    const stepNumber = parseInt(step.dataset.step);

                    // Update status
                    steps.forEach((s, idx) => {
                        s.classList.remove("completed", "active");
                        if (idx < stepNumber - 1) s.classList.add("completed");
                        if (idx === stepNumber - 1) s.classList.add("active");
                    });

                    // Animasi progress bar
                    const targetPercent = (stepNumber / steps.length) * 100;
                    let current = parseInt(progress.style.width) || 0;
                    clearInterval(progress.interval);

                    progress.interval = setInterval(() => {
                        if (current < targetPercent) {
                            current++;
                        } else if (current > targetPercent) {
                            current--;
                        } else {
                            clearInterval(progress.interval);

                            // Kalau dokumen sudah selesai (100%), tampilkan produk section
                            if (targetPercent === 100 && produkSection) {
                                produkSection.style.display = "block";
                                if (!produkSection.dataset.init) {
                                    initTimeline(produkTimelineId, produkProgressId);
                                    produkSection.dataset.init = "true";
                                }
                            }
                        }
                        progress.style.width = current + "%";
                        progress.innerText = current + "%";
                    }, 15);
                });
            });
        }

        // Inisialisasi Permintaan 1
        initTimeline("timeline-dokumen-1", "progress-dokumen-1", "produk-section-1", "timeline-produk-1",
            "progress-produk-1");
    </script>
@endsection
