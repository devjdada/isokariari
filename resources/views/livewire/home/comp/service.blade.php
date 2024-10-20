   <!-- SERVICE
================================================== -->
   <section class="p-0">
       <div class="container">
           <div class="row align-items-stretch">
               <div class="col-lg-5">
                   <div class="section-heading1 mb-1-9 mb-md-2-5">
                       <span class="mb-2 text-primary subheading">What We Do</span>
                       <h2 class="mb-0 display-4 lh-1 font-weight-800">Our Best Services</h2>
                   </div>
               </div>

               <div class="col-lg-10">
                   <div class="position-relative service-position">
                       <div class="service-slider owl-carousel owl-theme h-100 w-100">

                           @foreach ($services as $service)
                               <div class="card card-style1">
                                   <div class="service-card bg-img cover-background"
                                       data-background="{{ $service->image }}">
                                       <div class="service-details">
                                           <h3 class="mb-3">
                                               <a href="{{ route('service', ['slug' => $service->slug]) }}">
                                                   {{ $service->title }}
                                               </a>
                                           </h3>
                                           <p class="mb-3">
                                               {{ $service->slug }}
                                           </p>
                                           <a href="{{ route('service', ['slug' => $service->slug]) }}">Read More
                                               &#10230;</a>
                                       </div>
                                   </div>
                               </div>
                           @endforeach

                       </div>
                   </div>
               </div>
           </div>
       </div>

   </section>
