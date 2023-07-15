<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">EPADP</h4>
                <a class="btn btn-link" href="">Home</a>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>العاصمة الاداريه-الحي الحكومي-وزارة الموارد المائية والري</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>Epadp_isd@yahoo.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/epadp.org.eg/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UCxJM9b1rUM4G1FE5zgocF2w"><i class="fab fa-youtube"></i></a>
            </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    @foreach($gallary as $items)
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('frontend/img/gallary/'.$items->image) }}" alt="">
                    </div>
@endforeach
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13818.05222308205!2d31.23011216749933!3d30.022135510245086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846e064a2d753%3A0xaf9fcee349f17349!2z2KfZhNmH2YrYptipINin2YTZhdi12LHZitipINin2YTYudin2YXYqSDZhNmF2LTYsdmI2LnYp9iqINin2YTYtdix2YEgLSDYp9mJINio2Ykg2KfZitmHINiv2Ykg2KjZiQ!5e0!3m2!1sar!2seg!4v1630404496273!5m2!1sar!2seg"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">WWW.epadp.org.eg</a>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By EPADP <a class="border-bottom" href="https://htmlcodex.com"></a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
