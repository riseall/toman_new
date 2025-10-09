 <div class="container mt-50">
     <div class="row justify-content-center">
         <div class="col-12 text-center">
             <div class="section-title">
                 <h3 class="title">Our client</h3>
             </div>
         </div><!--end col-->
     </div><!--end row-->

     <div class="scrolling-wrapper">
         <div id="logo" class="scrolling-content">
             <img class="client-logo" src="{{ asset('images/partner/interbat.png') }}" alt="PT. Interbat">
             <img class="client-logo" src="{{ asset('images/partner/guardian_pharmatama.png') }}"
                 alt="PT.Guardian Pharmatama">
             <img class="client-logo" src="{{ asset('images/partner/ottopharm.png') }}" alt="PT. Otto">
             <img class="client-logo" src="{{ asset('images/partner/mepro.png') }}" alt="PT. Meprofarm">
             <img class="client-logo" src="{{ asset('images/partner/promed.png') }}" alt="PT. Promedrahardjo">
             <img class="client-logo" src="{{ asset('images/partner/lucas.png') }}" alt="PT. Lucas Djaja">
             <img class="client-logo" src="{{ asset('images/partner/dankos.png') }}" alt="PT. Dankos Farma">
             <img class="client-logo" src="{{ asset('images/partner/pyridam.png') }}" alt="PT. Pyridam Farma">
             <img class="client-logo" src="{{ asset('images/partner/kimiafarma.png') }}" alt="PT. Kimia Farma">
             <img class="client-logo" src="{{ asset('images/partner/erlimpex.png') }}" alt="PT. Erlimpex">
             <img class="client-logo" src="{{ asset('images/partner/combiphar.png') }}" alt="PT. Combiphar">
             <img class="client-logo" src="{{ asset('images/partner/MF.png') }}" alt="PT. Metiska Farma">
             <img class="client-logo" src="{{ asset('images/partner/nulab.png') }}"
                 alt="PT. Nulab Pharmaceutical Indonesia">
             <img class="client-logo" src="{{ asset('images/partner/Bernofarm.png') }}" alt="PT. Bernofarma">
             <img class="client-logo" src="{{ asset('images/partner/cc.png') }}" alt="PT. Coronet Crown">
             <img class="client-logo" src="{{ asset('images/partner/daryavaria.png') }}" alt="PT. Darya Varia">
             <img class="client-logo" src="{{ asset('images/partner/ferron.png') }}"
                 alt="PT. Ferron Par Pharmaceutical">
             <img class="client-logo" src="{{ asset('images/partner/mbf.png') }}" alt="PT. Mahakam Beta Farma">
             <img class="client-logo" src="{{ asset('images/partner/marin.png') }}" alt="PT. Marin Liza">
             <img class="client-logo" src="{{ asset('images/partner/wigo.png') }}" alt="PT. Wigo Health Indonesia">
             <img class="client-logo" src="{{ asset('images/partner/lapi.png') }}" alt="PT. Lapi Laboratories">
             <img class="client-logo" src="{{ asset('images/partner/ipha.png') }}" alt="PT. IPHA Laboratories">
             <img class="client-logo" src="{{ asset('images/partner/gmp.png') }}" alt="PT. Global Multi Pharmalab">
             <img class="client-logo" src="{{ asset('images/partner/gracia.png') }}" alt="Gracia Pharmindo">
             <img class="client-logo" src="{{ asset('images/partner/molex.png') }}" alt="PT. Molex Ayus">
             <img class="client-logo" src="{{ asset('images/partner/yarindo.png') }}" alt="PT. Yarindo Farmatama">
             <img class="client-logo" src="{{ asset('images/partner/soho.png') }}" alt="PT. Soho Industri Farmasi">
             <img class="client-logo" src="{{ asset('images/partner/sunthi.png') }}" alt="PT. Sunthi Sepuri">
             {{-- <img class="client-logo" src="{{ asset('images/partner/braun.png') }}" alt="Badan Pom"> --}}
         </div>
     </div>
 </div><!--end col-->

 <script>
     const logo = document.querySelector('.scrolling-content').cloneNode(true);

     document.querySelector('.scrolling-wrapper').appendChild(logo);
 </script>
