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
             <img class="client-logo" src="{{ asset('images/partner/braun.png') }}" alt="Badan Pom">
             <img class="client-logo" src="{{ asset('images/partner/dankos.jpg') }}" alt="SMK3">
             <img class="client-logo" src="{{ asset('images/partner/erlimpex.png') }}" alt="Proper">
             <img class="client-logo" src="{{ asset('images/partner/gracia.png') }}" alt="Lloyd's Register">
             <img class="client-logo" src="{{ asset('images/partner/guardian_pharmatama.png') }}" alt="KAN">
             <img class="client-logo" src="{{ asset('images/partner/interbat.png') }}" alt="Halal">
             <img class="client-logo" src="{{ asset('images/partner/kimiafarma.png') }}" alt="Halal">
             <img class="client-logo" src="{{ asset('images/partner/mbf.jpg') }}" alt="Halal">
             <img class="client-logo" src="{{ asset('images/partner/mepro.png') }}" alt="Halal">
             <img class="client-logo" src="{{ asset('images/partner/ottopharm.png') }}" alt="Halal">
             <img class="client-logo" src="{{ asset('images/partner/promed.png') }}" alt="Halal">
             <img class="client-logo" src="{{ asset('images/partner/pyridam.png') }}" alt="Halal">
         </div>
     </div>
 </div><!--end col-->

 <script>
     const logo = document.querySelector('.scrolling-content').cloneNode(true);

     document.querySelector('.scrolling-wrapper').appendChild(logo);
 </script>
