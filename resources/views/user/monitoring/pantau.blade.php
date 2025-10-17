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

<div id="accordionWrapper">
    @include('user.monitoring._list')
</div>

@push('scripts')
    <script>
        $(document).on('click', '#accordionWrapper .pagination a', function(e) {
            e.preventDefault();
            var href = $(this).attr('href') || '';
            var pageMatch = href.match(/page=(\d+)/);
            var page = pageMatch ? pageMatch[1] : 1;

            $.get("{{ route('monitoring.data') }}", {
                page: page
            }, function(html) {
                // GANTI HANYA ISI WRAPPER (yang hanya berisi list + pagination)
                $('#accordionWrapper').html(html);
                history.pushState(null, '', href);

                $('html,body').animate({
                    scrollTop: $('#accordionWrapper').offset().top - 80
                }, 300);
            }).fail(function() {
                alert('Gagal memuat data halaman. Silakan coba lagi.');
            });
        });
    </script>
@endpush
