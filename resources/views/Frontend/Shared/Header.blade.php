
   <!-- header -->

   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 60px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>العاصمة الاداريه-الحي الحكومي-وزارة الموارد المائية والري</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>epadp_isd@yahoo.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 60px;">
                <a class="btn btn-outline-light btn-square rounded-circle me-2" href="https://www.facebook.com/epadp.org.eg/"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn-danger  btn-outline-light btn-square rounded-circle" href="https://www.youtube.com/channel/UCxJM9b1rUM4G1FE5zgocF2w"><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-n px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"> <img  class=logo src="{{asset('frontend/img/picture2.png')}}" alt="Logo">
            </i>EPADP</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/contact" class="nav-item nav-link active">تواصل معنا</a>
                <a href="about.html" class="nav-item nav-link">رؤساء الهيئة</a>
                <a href="about.html" class="nav-item nav-link">مهام الهيئة</a>
                <a href="/achievements" class="nav-item nav-link">إنجازات الهيئة</a>

                <a href="/index" class="nav-item nav-link">الصفحة الرئيسيه</a>
            </div>
{{-- <form method="POST" action="{{ route('user.logout')}}">
@csrf
<button type="submit">logout</button>
</form> --}}
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
<!--end header -->
