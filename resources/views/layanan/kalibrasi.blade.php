@extends('layouts.app', [
    'title' => 'Kalibrasi dan Lain-lain',
    'desc' => 'Kami menyediakan berbagai layanan untuk mendukung kebutuhan Anda dengan kualitas terbaik.',
])
@section('content')
    <style>
        .accordion-button:not(.collapsed) {
            color: #ffffff !important;
            background-color: #2f55d4;
        }

        .accordion .accordion-item .accordion-button:before {
            color: #ffffff !important;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Jasa Kalibrasi - KAN</h3>
                    {{-- <p class="text-muted para-desc mb-0 mx-auto">Kami menyediakan berbagai layanan untuk mendukung
                        kebutuhan Anda dengan kualitas terbaik.</p> --}}
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="mt-3">
            <div class="accordion" id="accordionKAN">
                <!-- Massa -->
                <div class="accordion-item rounded shadow-sm border wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Massa (Timbangan)
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted" style="min-width: 250px;">
                                                Jenis Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                Rentang Ukur</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                CMC</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Timbangan
                                                (Elektronik, Mekanik)
                                            </td>
                                            <td>0 g ~ 20 g</td>
                                            <td>0.018 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>20 g ~ 50 g</td>
                                            <td>0.023 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>50 g ~ 200 g</td>
                                            <td>0.10 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>200 g ~ 500 g</td>
                                            <td>0.59 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>500 g ~ 5 Kg</td>
                                            <td>0.017 g</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>5 Kg ~ 60 Kg</td>
                                            <td>1.0 g</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>60 Kg ~ 150 Kg</td>
                                            <td>1.4 g</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Massa -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h2 class="accordion-header" id="headingOne1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                            2. Massa (Anak Timbangan)
                        </button>
                    </h2>
                    <div id="collapseOne1" class="accordion-collapse border-0 collapse" aria-labelledby="headingOne1"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted" style="min-width: 250px;">
                                                Jenis
                                                Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                Rentang Ukur</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                CMC</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Anak Timbangan</td>
                                            <td>0.001 g</td>
                                            <td>0.010 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.002 g</td>
                                            <td>0.010 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.005 g</td>
                                            <td>0.010 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.01 g</td>
                                            <td>0.010 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.02 g</td>
                                            <td>0.010 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.05 g</td>
                                            <td>0.012 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.1 g</td>
                                            <td>0.012 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.2 g</td>
                                            <td>0.012 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0.5 g</td>
                                            <td>0.018 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>1 g</td>
                                            <td>0.022 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>2 g</td>
                                            <td>0.025 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>5 g</td>
                                            <td>0.032 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>10 g</td>
                                            <td>0.042 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>20 g</td>
                                            <td>0.052 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>50 g</td>
                                            <td>0.059 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>100 g</td>
                                            <td>0.10 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>200 g</td>
                                            <td>0.20 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>500 g</td>
                                            <td>0.51 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>1 Kg</td>
                                            <td>1.0 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>2 Kg</td>
                                            <td>6.8 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>5 Kg</td>
                                            <td>15 mg</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>10 Kg</td>
                                            <td>34 mg</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tekanan -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".5s">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            3. Tekanan
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted" style="min-width: 250px;">
                                                Jenis
                                                Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                Rentang Ukur</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                CMC</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Pressure Gauge</td>
                                            <td>0 Bar ~ 30 Bar</td>
                                            <td>0.017 Bar</td>
                                        </tr>
                                        <tr>
                                            <td>Vacuum Gauge</td>
                                            <td>~0.9 Bar ~ 0 Bar</td>
                                            <td>0.94 Bar</td>
                                        </tr>
                                        <tr>
                                            <td>Differential Pressure Gauge</td>
                                            <td>0 Pa ~ 1000 Pa</td>
                                            <td>0.62 Pa</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panjang -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".7s">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            4. Panjang
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis
                                                Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                Rentang Ukur</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                CMC</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Outside Micrometer</td>
                                            <td>0 mm ~ 25 mm</td>
                                            <td>1.4 µm</td>
                                        </tr>
                                        <tr>
                                            <td>Outside Caliper</td>
                                            <td>0 mm ~ 150 mm</td>
                                            <td>13 µm</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0 mm ~ 200 mm</td>
                                            <td>13 µm</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>0 mm ~ 300 mm</td>
                                            <td>24 µm</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Suhu dan Kelembaban -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".9s">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            5. Suhu dan Kelembaban
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis Alat
                                            </th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                Rentang Ukur</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                CMC</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Indikator suhu dengan sensor tahanan</td>
                                            <td>~30 °C ~ 150 °C</td>
                                            <td>0.060 °C</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>150 °C ~ 400 °C</td>
                                            <td>0.9 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Oven</td>
                                            <td>amb. °C ~ 100 °C</td>
                                            <td>1.4 °C</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>100 °C ~ 255 °C</td>
                                            <td>1.4 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Incubator</td>
                                            <td>amb. °C ~ 33 °C</td>
                                            <td>1.0 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Cold Storage</td>
                                            <td>0 °C ~ amb. °C</td>
                                            <td>1.2 °C</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>~25 °C ~ 0 °C</td>
                                            <td>1.6 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Thermohygrometer</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Suhu</td>
                                            <td>15 °C ~ 45 °C</td>
                                            <td>0.37 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Kelembaban</td>
                                            <td>30 %rH ~ 80 %rH</td>
                                            <td>2.1 %rH</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Volume -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".7s">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            6. Volume
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse border-0 collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis
                                                Alat
                                            </th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                Rentang Ukur</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                CMC</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Mikropipet</td>
                                            <td>100 µL</td>
                                            <td>0.32 µL</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>250 µL</td>
                                            <td>0.50 µL</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>1000 µL</td>
                                            <td>1.2 µL</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instrumen Analitik -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".9s">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">
                            7. Instrumen Analitik
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse border-0 collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionKAN">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis
                                                Alat
                                            </th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                Rentang Ukur</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 150px;">
                                                CMC</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Autoclave</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Suhu</td>
                                            <td>119 °C ~ 123 °C</td>
                                            <td>0.91 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Tekanan</td>
                                            <td>1 bar ~ 1 bar</td>
                                            <td>0.046 bar</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->

    <div class="container mt-50">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Jasa Kalibrasi - Non-KAN</h3>
                    {{-- <p class="text-muted para-desc mb-0 mx-auto">Kami menyediakan berbagai layanan untuk mendukung
                        kebutuhan Anda dengan kualitas terbaik.</p> --}}
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="mt-3">
            <div class="accordion" id="accordionNonKan">
                <!-- Suhu dan Kelembaban -->
                <div class="accordion-item rounded shadow-sm border wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h2 class="accordion-header" id="headingSatu">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSatu" aria-expanded="true" aria-controls="collapseSatu">
                            1. Suhu dan Kelembaban
                        </button>
                    </h2>
                    <div id="collapseSatu" class="accordion-collapse border-0 collapse" aria-labelledby="headingSatu"
                        data-bs-parent="#accordionNonKan">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 200px;">
                                                Rentang Ukur</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Infrared radiation thermometer</td>
                                            <td>ambient ~ 150 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Sensor Termokopel (Type J, K, T)</td>
                                            <td>-25 °C ~ 400 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Indikator suhu dengan sensor thermocouple</td>
                                            <td>-25 °C ~ 400 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Liquid bath (Water bath, Oil bath)</td>
                                            <td>-30 °C ~ 100 °C</td>
                                        </tr>
                                        <tr>
                                            <td>Dry well block calibrator</td>
                                            <td>-30 °C ~ 400 °C</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Climatic chamber</td>
                                            <td>10 °C ~ 50 °C</td>
                                        </tr>
                                        <tr>
                                            <td>10 %rH ~ 90 %rH</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Volume -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h2 class="accordion-header" id="headingDua">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseDua" aria-expanded="true" aria-controls="collapseDua">
                            2. Volume
                        </button>
                    </h2>
                    <div id="collapseDua" class="accordion-collapse border-0 collapse" aria-labelledby="headingDua"
                        data-bs-parent="#accordionNonKan">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis
                                                Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 200px;">
                                                Rentang Ukur</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Gelas ukur</td>
                                            <td>10 mL ~ 200 mL</td>
                                        </tr>
                                        <tr>
                                            <td>Labu ukur</td>
                                            <td>10 mL ~ 200 mL</td>
                                        </tr>
                                        <tr>
                                            <td>Buret</td>
                                            <td>10 mL ~ 200 mL</td>
                                        </tr>
                                        <tr>
                                            <td>Pipet ukur</td>
                                            <td>10 mL ~ 200 mL</td>
                                        </tr>
                                        <tr>
                                            <td>Pipet volume</td>
                                            <td>10 mL ~ 200 mL</td>
                                        </tr>
                                        <tr>
                                            <td>Pycnometer</td>
                                            <td>10 mL ~ 200 mL</td>
                                        </tr>
                                        <tr>
                                            <td>Erlenmeyer</td>
                                            <td>10 mL ~ 200 mL</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instrumen Analitik -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".5s">
                    <h2 class="accordion-header" id="headingTiga">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTiga" aria-expanded="false" aria-controls="collapseTiga">
                            3. Instrumen Analitik
                        </button>
                    </h2>
                    <div id="collapseTiga" class="accordion-collapse border-0 collapse" aria-labelledby="headingTiga"
                        data-bs-parent="#accordionNonKan">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis
                                                Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 200px;">
                                                Rentang Ukur</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td rowspan="5">pH meter</td>
                                            <td>2 pH</td>
                                        </tr>
                                        <tr>
                                            <td>4 pH</td>
                                        </tr>
                                        <tr>
                                            <td>7 pH</td>
                                        </tr>
                                        <tr>
                                            <td>9 pH</td>
                                        </tr>
                                        <tr>
                                            <td>12 pH</td>
                                        </tr>
                                        <tr>
                                            <td>HPLC</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Disolusi tester</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Conductivity meter</td>
                                            <td>5 µs/cm</td>
                                        </tr>
                                        <tr>
                                            <td>100 µs/cm</td>
                                        </tr>
                                        <tr>
                                            <td>ORP meter</td>
                                            <td>400 mV</td>
                                        </tr>
                                        <tr>
                                            <td>Viscometer</td>
                                            <td>100 cps ~ 1000 cps</td>
                                        </tr>
                                        <tr>
                                            <td>Density meter</td>
                                            <td>1 g/cm³</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Friability tester</td>
                                            <td>20 rpm ~ 40 rpm</td>
                                        </tr>
                                        <tr>
                                            <td>1 menit ~ 5 menit</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Waktu dan Frekuensi -->
                <div class="accordion-item rounded shadow-sm border mt-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".7s">
                    <h2 class="accordion-header" id="headingEmpat">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEmpat" aria-expanded="false" aria-controls="collapseEmpat">
                            4. Waktu dan Frekuensi
                        </button>
                    </h2>
                    <div id="collapseEmpat" class="accordion-collapse border-0 collapse" aria-labelledby="headingEmpat"
                        data-bs-parent="#accordionNonKan">
                        <div class="accordion-body text-muted">
                            <div class="table-responsive shadow rounded-md">
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom text-muted"
                                                style="min-width: 250px;">
                                                Jenis
                                                Alat</th>
                                            <th scope="col" class="border-bottom text-muted" style="width: 200px;">
                                                Rentang Ukur</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Timer</td>
                                            <td>1 s ~ 90 menit</td>
                                        </tr>
                                        <tr>
                                            <td>Tachometer</td>
                                            <td>2 rpm ~ 95000 rpm</td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->


    <!-- CTA Start -->
    @include('layanan.partials.cta')
    <!-- CTA End -->

    <!-- Testimonial Start -->
    @include('layanan.partials.client')
    <!-- Testimonial End -->

    <!-- Sertifikat Start -->
    @include('layanan.partials.sertifikat')
    <!-- Sertifikat End -->
@endsection
