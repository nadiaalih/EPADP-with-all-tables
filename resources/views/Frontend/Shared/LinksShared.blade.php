<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EPADP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/img/picture2.png')}}" type="image/png">
 <!-- Start WOWSlider.com HEAD section -->
 <link rel="stylesheet" type="text/css" href="{{asset('frontend/engine1/style.css')}}" />
 <script type="text/javascript" src="{{asset('frontend/engine1/jquery.js')}}"></script>
 <!-- End WOWSlider.com HEAD section -->
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/libs/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/font-material/css/material-design-iconic-font.min.css')}}">

    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/libs/owl.carousel/assets/owl.carousel.min.css')}}">
    <link href="{{asset('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet-->
 <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/style1.css')}}">

    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/reponsive.css')}}">
</head>



@yield('content')



    <!-- Back to Top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

   <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('frontend/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/engine1/wowslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/engine1/script.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>
