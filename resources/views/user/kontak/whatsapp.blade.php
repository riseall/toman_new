<link rel="stylesheet" href="{{ asset('css/joinchat.css') }}">

<div class="joinchat joinchat--right joinchat--show joinchat--noanim"
    data-settings="{&quot;telephone&quot;:&quot;6281328816036&quot;,&quot;mobile_only&quot;:false,&quot;button_delay&quot;:0,&quot;whatsapp_web&quot;:true,&quot;qr&quot;:false,&quot;message_views&quot;:2,&quot;message_delay&quot;:10,&quot;message_badge&quot;:false,&quot;message_send&quot;:&quot;Halo, Admin Toll Manufaktur PT Phapros Tbk.!\nNama Saya ...\nNama Perusahaan ...\n\nSaya ingin berdiskusi terkait dengan layanan Toll Manufacturing PT Phapros Tbk. mohon hubungi Saya segera..&quot;,&quot;message_hash&quot;:&quot;95bd6e9d&quot;}"
    style="--peak: url(#joinchat__peak_l);">
    <div class="joinchat__button" id="scroll-to-top">
        <div class="joinchat__button__open"></div>
        <div style="display: flex;">
            <div class="joinchat__button__sendtext">Tanya disini</div>
            <svg class="joinchat__button__send" width="60" height="60" viewBox="0 0 400 400"
                stroke-linecap="round" stroke-width="33">
                <path class="joinchat_svg__plain"
                    d="M168.83 200.504H79.218L33.04 44.284a1 1 0 0 1 1.386-1.188L365.083 199.04a1 1 0 0 1 .003 1.808L34.432 357.903a1 1 0 0 1-1.388-1.187l29.42-99.427">
                </path>
                <path class="joinchat_svg__chat"
                    d="M318.087 318.087c-52.982 52.982-132.708 62.922-195.725 29.82l-80.449 10.18 10.358-80.112C18.956 214.905 28.836 134.99 81.913 81.913c65.218-65.217 170.956-65.217 236.174 0 42.661 42.661 57.416 102.661 44.265 157.316">
                </path>
            </svg>
        </div>
        <div class="joinchat__tooltip">
            <div>Butuh bantuan?</div>
        </div>
    </div>
    <div class="joinchat__box" id="box-scroll">
        <div class="joinchat__header">
            <span class="joinchat__header__text">WhatsApp Kami</span>
            <div class="joinchat__close" title="Tutup"></div>
        </div>
        <div class="joinchat__box__scroll">
            <div class="joinchat__box__content">
                <div class="joinchat__message">Halo, ada yang bisa Kami bantu?</div>
            </div>
        </div>
    </div>
    <svg style="width:0;height:0;position:absolute">
        <defs>
            <clipPath id="joinchat__peak_l">
                <path
                    d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z">
                </path>
            </clipPath>
            <clipPath id="joinchat__peak_r">
                <path d="M0 25.68V0c0 13.23 10.92 15.3 15.97 16.34 1.56.32 1.18 2.34 0 2.34-8.58 0-15.97-.1-15.97 7Z">
                </path>
            </clipPath>
        </defs>
    </svg>
</div>

@push('scripts')
    <script src="{{ asset('js/joinchat.js') }}"></script>
    {{-- <script>
        var waButton = document.getElementById("whatsapp-button");
        window.onscroll = function() {
            scroll();
        };

        console.log(waButton);

        function scroll() {
            if (waButton != null) {
                if (
                    document.body.scrollTop > 500 ||
                    document.documentElement.scrollTop > 500
                ) {
                    waButton.style.display = "block";
                } else {
                    waButton.style.display = "none";
                }
            }
        }
    </script> --}}
@endpush
