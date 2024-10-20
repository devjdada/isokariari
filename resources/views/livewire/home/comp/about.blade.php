 <!-- ABOUT US
================================================== -->
 <section class="about-style01 mb-xl-6">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 position-relative mb-2-0 mb-sm-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                 <div class="about-text d-none d-sm-block">
                     <span class="d-inline-block">Builder</span>
                 </div>
                 <div class="ms-sm-6 ms-md-7 ms-lg-10 ms-xl-12">
                     <div class="position-relative d-inline-block">
                         <img src="{{ $about->image }}" alt="...">
                         <div class="img-border">
                         </div>
                         <div class="text-center bg-white d-none d-sm-block inner-text p-1-9 ani-top-bottom">
                             <img src="img/icon-01.png" alt="..." class="mb-3">
                             {{-- <h3 class="mb-0 h1">15</h3> --}}
                             <p class="mb-0 display-27 font-weight-600">Awards Winner Company</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 about-us z-index-9 wow fadeIn" data-wow-delay="400ms">
                 <div class="ps-lg-5">
                     <div class="section-heading1 mb-1-9 mb-md-2-5">
                         <span class="mb-2 text-primary subheading">About Us</span>
                         <h2 class="mb-0 display-4 lh-1 font-weight-800">
                             {{ $about->title }}
                         </h2>

                     </div>
                     {!! $about->description !!}
                 </div>
             </div>
         </div>
     </div>
     <div class="p-4 border d-none d-sm-block position-absolute top-5 right-5 border-primary z-index-9 ani-top-bottom">
     </div>
     <div class="d-none d-sm-block position-absolute top-5 right-5 ani-left-right">
         <img src="img/shape-01.png" alt="...">
     </div>
     <div class="bottom-0 position-absolute end-0">
         <img src="img/bg-02.png" alt="...">
     </div>
 </section>
