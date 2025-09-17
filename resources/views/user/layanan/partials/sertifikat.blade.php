 <div class="container mt-100">
     <div class="row justify-content-center">
         <div class="col-12 text-center">
             <div class="section-title">
                 <h3 class="title">Informasi Sertifikat</h3>
             </div>
         </div><!--end col-->
     </div><!--end row-->

     <div class="row justify-content-center">
         <div class="col-lg-12 mt-4">
             <div class="tiny-four-item">
                 @foreach ($certif as $cert)
                     <div class="tiny-slide">
                         <div class="d-flex client-testi m-2">
                             <div class="text-center border-0">
                                 <div class="card-body">
                                     <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                                         data-title="{{ $cert->name }}"
                                         data-image="{{ asset('images/cert/' . $cert->image) }}">
                                         <img src="{{ asset('images/cert/' . $cert->image) }}"
                                             class="img-fluid rounded mb-4" alt="{{ $cert->name }}">
                                     </a>
                                     <h6 class="title">{{ $cert->name }}</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div><!--end col-->
     </div><!--end row-->
 </div><!--end container-->

 <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content rounded shadow border-0">
             <div class="modal-header border-bottom">
                 <h5 class="modal-title" id="imageModalLabel"></h5>
                 <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                         class="uil uil-times fs-4 text-dark"></i></button>
             </div>
             <div class="modal-body text-center">
                 <img src="" class="img-fluid" id="modalImage" alt="">
             </div>
         </div>
     </div>
 </div>

 @push('scripts')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             let imageModal = document.getElementById('imageModal');
             imageModal.addEventListener('show.bs.modal', function(event) {
                 let link = event.relatedTarget;
                 let title = link.getAttribute('data-title');
                 let image = link.getAttribute('data-image');
                 let modalTitle = imageModal.querySelector('.modal-title');
                 let modalImage = imageModal.querySelector('#modalImage');
                 modalTitle.textContent = title;
                 modalImage.src = image;
                 modalImage.alt = title;
             });
         })
     </script>
 @endpush
