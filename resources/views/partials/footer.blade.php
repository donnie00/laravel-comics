<footer>
   <div class="footer-links bg-heroes-img">
      <div class="container">
         <div class="row">
            <div class="col-7 py-5">
               <div class="d-flex align-items-baseline">
                  @foreach ($footerLinks as $key => $linksList)
                     <div class="pe-3">
                        <h5 class="text-uppercase text-light">{{ $key }}</h5>
                        @foreach ($linksList as $link)
                           <ul class="list-unstyled">
                              <li class="list-item">
                                 <a href="{{ $link['href'] }}" class="link-secondary text-decoration-none">
                                    {{ $link['name'] }}
                                 </a>
                              </li>
                           </ul>
                        @endforeach
                     </div>
                  @endforeach
               </div>
            </div>
            <div class="col bg-logo"></div>
         </div>
      </div>
   </div>

   <div class="footer-socials bg-dark py-3">
      <div class="container">
         <div class="row">
            <div class="footer-signup col">
               <button class="btn btn-outline-primary rounded-0 text-light text-uppercase">Sign-up now</button>
            </div>
            <div class="footer-social-links col">
               <span class="text-primary text-uppercase fw-bold mx-3">Follow us</span>
               <ul class="list-inline d-inline">
                  @foreach ($socialLinks as $social)
                     <li class="list-inline-item">
                        <a href="{{ $social['href'] }}">
                           <img src="{{ Vite::asset($social['icon']) }}" alt="">
                        </a>
                     </li>
                  @endforeach
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
