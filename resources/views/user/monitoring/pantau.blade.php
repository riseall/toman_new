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
        <div class="accordion" id="accordionMon">
            @foreach ($dataTransaksi as $idx => $transaksi)
                @php
                    $stepStatus = $transaksi->stepStatus ?? [];
                    $totalProgress = $transaksi->totalProgress ?? 0;
                    $stepper = [
                        1 => ['icon' => 'mdi-file-document-edit-outline', 'name' => 'Administrasi'],
                        2 => ['icon' => 'mdi-text-box-check-outline', 'name' => 'Audit'],
                        3 => ['icon' => 'mdi-flask-round-bottom', 'name' => 'RnD'],
                        4 => ['icon' => 'mdi-factory', 'name' => 'Produksi'],
                        5 => ['icon' => 'mdi-rocket-launch-outline', 'name' => 'Invoice'],
                    ];
                @endphp
                <div class="accordion-item rounded shadow-sm border wow animate__animated animate__fadeInUp mt-3"
                    data-wow-delay=".3s">
                    <h2 class="accordion-header" id="heading{{ $idx }}">
                        <button class="accordion-button {{ $idx == 0 ? '' : 'collapsed' }}" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $idx }}"
                            aria-expanded="{{ $idx == 0 ? 'true' : 'false' }}"
                            aria-controls="collapse{{ $idx }}">
                            {{ $transaksi->pp_form_nbr }} — {{ $transaksi->pp_pt_desc }}
                        </button>
                    </h2>
                    <div id="collapse{{ $idx }}"
                        class="accordion-collapse border-0 collapse {{ $idx == 0 ? 'show' : '' }}"
                        aria-labelledby="heading{{ $idx }}" data-bs-parent="#accordionMon">
                        <div class="accordion-body text-muted">
                            <!-- Timeline Dokumen -->
                            <h6 class="fw-bold">Progress Dokumen</h6>
                            <div class="stepper-wrapper" id="timeline-dokumen-{{ $idx }}">
                                @foreach ([1, 2, 3, 4, 5] as $i)
                                    @php
                                        $class = $stepStatus[$i] ?? '';
                                    @endphp
                                    <div class="stepper-item {{ $class }}" data-step="{{ $i }}">
                                        <div class="step-counter"><i class="mdi {{ $stepper[$i]['icon'] }} fs-3"></i>
                                        </div>
                                        <div class="step-name">{{ $stepper[$i]['name'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="progress mb-4" style="height: 20px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                    id="progress-dokumen-{{ $idx }}" style="width: {{ $totalProgress }}%;">
                                    {{ $totalProgress }}%
                                </div>
                            </div>

                            <!-- Timeline Produk (hidden dulu) -->
                            {{-- <div id="produk-section-1" class="hidden-section">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- PAGINATION START -->
    <div class="row">
        <div class="col-12 mt-4 pt-2">
            <div class="pagination justify-content-center mb-0">
                {{ $dataTransaksi->links('pagination::bootstrap-4') }}
            </div>
        </div><!--end col-->
    </div><!--end row-->
    <!-- PAGINATION END -->
</div>
