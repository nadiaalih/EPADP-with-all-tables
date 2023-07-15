@extends('Frontend.shared.LinksShared')
@section('content')
    <body class="body">
        <!-- header -->
        @include('Frontend.shared.header')
        <!-- header End -->
        <div class="container-fluid bg-primary  mb-5 hero-header">
                <div id="wowslider-container1">
                    <div class="ws_images">

                        <ul>
                            @foreach($slider as $item)
                            <li><img src="{{asset('uploads/slider/'.$item->image) }}" alt="" title=""
                                id="wows1_0"/>{{$item->discription}} </li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">image
                            carousel</a> by WOWSlider.com v9.0</div>
                    <div class="ws_shadow"></div>
        </div>
        <!-- About Start -->
        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">About</h6>
            <h1 class="mb-5">مشاريع الهيئة</h1>
        </div>
        <div class="container-fluid ss py-5">
            <div class="container-fluid sss">
                <div class="row ss g-5">
                    <div class="col-lg-8 ss wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <section id="features" class="features ss">
                            <div class="container ss">
                                <div class="row ss ">
                                    <div class="col-lg-6 ss ml-auto" data-aos="fade-left">
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="tab-1">
                                                <figure>
                                                    <img src="{{ asset('frontend/img/about/بحر البقر.jpeg') }}"
                                                        alt="" class="img-fluid">
                                                </figure>
                                            </div>
                                            <div class="tab-pane" id="tab-2">
                                                <figure>
                                                    <img src="{{asset('frontend/img/about/محسمة.jpg')}}" alt=""
                                                        class="img-fluid">
                                                </figure>
                                            </div>
                                            <div class="tab-pane" id="tab-3">
                                                <figure>
                                                    <img src="{{ asset('frontend/img/about/مصانع المواسير.jpg') }}"
                                                        alt="" class="img-fluid">
                                                </figure>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 ss mb-5 mb-lg-0" data-aos="fade-right">
                                        <ul class="nav nav-tabs   flex-column">
                                            <li class="nav-item ">
                                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                                    <h4>مصرف بحر البقر</h4>
                                                    <p>تم تحديد أفضل البدائل إقتصادياً واجتماعياً وبيئياً لنقل تصرف

                                                        ( 5 ) مليون م3 / يوم من مياه مصرف بحر البقر إلى شرق قناة

                                                        السويس والإستفادة بها فى تغذية الزمام شرق القناة بعد معالجتها.</p>
                                                </a>
                                            </li>
                                            <li class="nav-item  mt-2">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                                    <h4>مصرف المحسمة</h4>
                                                    <p>لغرض من المشروع : نقل مياه المصرف

                                                        الى شرق القناة بتصرف حوالى من 0.60 – 1.00

                                                        مليون متر مكعب/ اليوم لتغذية الزمام شرق القناة.</p>
                                                </a>
                                            </li>
                                            <li class="nav-item  mt-2">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                                    <h4>مصانع المواسير</h4>
                                                    <p>مصانع المواسير تمتلك الهيئة عدد 7 مصانع مواسير الإنتاج مواسير
                                                        البلاستيك لجميع شبكات الصرف المغطي موزعة علي خمسة أقاليم بمختلف
                                                        أنحاء الجمهورية وذلك حتي تضمن الهيئة ضبط وجودة نوعية المواسير وعدم
                                                        تحميل المنتفعين أية أعباء مالية.</p>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </section>
                    </div>

                <div class="col-lg-4 news wow fadeInUp" data-wow-delay="0.3s">
                    <div class="w3-container ">
                        <h2>إعـلانـات</h2>

                        <div class="w3-row">
                            @foreach($news as $items)

                          <a href="javascript:void(0)" onclick="openCity(event, '{{$items->titlenews}}');">
                            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">African Development Bank</div>
                          </a>

                        </div>
                        <div id="{{$items->titlenews}}" class="w3-container city" style="display:none">
                          <h2>{{$items->titlenews}}</h2>
                          <p>{{$items->news}}</p>
                        </div>

@endforeach


                      </div>

                      <script>
                      function openCity(evt, cityName) {
                        var i, x, tablinks;
                        x = document.getElementsByClassName("city");
                        for (i = 0; i < x.length; i++) {
                          x[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablink");
                        for (i = 0; i < x.length; i++) {
                          tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.firstElementChild.className += " w3-border-red";
                      }
                      </script>

                    <a class="btn btn py-3 px-5 mt-2" href="{{ asset('frontend/news/ESMP.pdf') }}">Read More</a>
                </div>
            </div>

        </div>
        </div>
        <!-- About End -->
          <!--  start About 2 -->

        <div class="container-fluid">
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">About</h6>
                <h1 class="mb-5">عن الهيئة</h1>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <video class="video" controls poster="frontend/img/about/Picture42.png">
                  <source src="{{asset('frontend/video/انجازات الهيئة.mp4')}}" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                </video>

              </div>

              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">

                <div class="about_box about">

                  <div class="about_box_text">
                    <div class="title">

                      <h2 align="right"><img src="frontend/img/about/Picture2.png" >عن
                        <strong class="black"> الهيئة</strong>
                      </h2>
                    </div>
                    <p>يعتبر تزويد الأراضي الزراعية بشبكات الصرف وصيانتها من أهم المسئوليات الموكلة للهيئة المصرية العامة
                      لمشروعات الصرف وقد وضع الهيكل التنظيمي الحالي للهيئة ليساعدهاعلى القيام بمسئولياتها بالوجهين البحري
                      والقبلي على الوجه الأكمل وقد بدأ إدخال نظام المصارف المغطاة في مصر عام 1922 ، وتم إجراء دراسات وبحوث
                      لم
                      تلبث أن توقفت وعادت مرة أخرى في أواخر الثلاثينيات ، وقد أثبتت هذه البحوث توفير حوالى 12 بالمائة من
                      مساحة
                      الأراضي المنزرعة كانت تستنفذ في تنفيذ المصارف الخصوصية المكشوفة – فضلاً عن أن نظام الصرف المغطى لا
                      يمزق
                      الملكيات الصغيرة ولا يكون موطناً لنمو الحشائش والطفيليات الضارة بالإنسان والزراعة كالمصارف المكشوف</p>
                    <div class="botton1">
                        <a class="btn btn py-3 px-5 mt-2" href="">المزيد</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- end about2-->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                    <h1 class="mb-5">خدمات الهيئة</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5>خرائط أطلس</h5>
                                <div class="imgcard">
                                <img src="{{ asset('frontend/img/services/خرائط.gif') }}" alt="maps">
                                <p>لرفع جودة أعمال إدارة منظومة
                                    الصرف قامت الإدارة العـامة لنظم المعلومات ودعـــم إتـخاذ القـرار
                                    بإعــداد اطـلس خرائـط تحتـوي علي الخرائـط الجـغرافية الخـاصــه باقــلاليـــم الصـــرف الســـتة
                                    <a class="btn btn py-3 px-5 mt-2" href="">المزيد</a>

                                </p>
                            </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5>أعمال الصرف المغطي</h5>
                                <div class="imgcard">
                                <img src="{{ asset('frontend/img/services/الصرف المغطي.gif') }}" alt="maps">

                                <p>الهدف من أعمال الصرف المغطي جمع البيانات الحقلية و المعملية اللازمة لـ دراسة مدى احتياج
                                    منطقة الصرف لتنفيذ شبكة صرف مغطى و حساب المسافات البينية لمواسير الحقليات و تحديد مدى
                                    احتياج الحقليات لفلتر صناعي من عدمه و نوع الفلتر اللازم استخدامه
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5> WATER NET APP</h5>
                                <div class="imgcard">

                                <img src="{{ asset('frontend/img/about/water net.jpeg') }}"  alt="maps">
                                <p> يقدم مجموعة من الخدمات لمنتسبي وزارة الموارد المائية والري أثناء العمل والمرور بالطبيعة. منها خدمة تحديد أحداثيات الموقع لحظيا وإستعلام ومشاركة بيانات المجاري المائية.
                                    <a class="btn btn py-3 px-5 mt-2" href="">link</a>

                                </p>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5>WATER WEB APP   </h5>
                                <div class="imgcard">

                                <img src="{{asset('frontend/img/about/water web.jpeg')}}" alt="maps">
                                <p>يقدم مجموعة من الخدمات لمـنتسبي وزارة المـوارد المـائية والـري أثناء العمل بالمكتب. منها إسـتيراد بيانات من الحـاسب الشـخصي وإنتاج صور وملفات خرائط بالإضافة لخدمات إصدار الهواتف الذكية.
                                    <a class="btn btn py-3 px-5 mt-2" href="">link</a>

                                </p>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5>مصانع المواسير</h5>
                                <div class="imgcard">

                                <img src="{{ asset('frontend/img/services/مصانع المواسير.gif') }}" alt="maps">

                                <p>مصانع المواسير تمتلك الهيئة عدد 7 مصانع مواسير الإنتاج مواسير البلاستيك لجميع شبكات الصرف
                                    المغطي موزعة علي خمسة أقاليم بمختلف أنحاء الجمهورية وذلك حتي تضمن الهيئة ضبط وجودة نوعية
                                    المواسير وعدم تحميل المنتفعين أية أعباء مالية

                                </p>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5>معامل الهيئة</h5>
                                <div class="imgcard">

                                <img src="{{ asset('frontend/img/about/') }}" alt="maps">

                                <p>تمتلك الهيئة خمس معامل لابحاث النربة والمياه </p>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5>مهام وأنشطة الهيئة</h5>
                                <div class="imgcard">
                                <img src="{{ asset('frontend/img/about/') }}" alt="maps">
                                <p>دراسة حالة الأراضي الزراعية بالجمهورية وتحديد مدي حاجتها
                                    إلى تنفيذ مشروعات الصرف ( المغطى والمكشوف ) ووضع أولويات
                                    التنفيذ للمناطق المختلفة حسب حاجة كل منها </p>
                                </div>

                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <h5>خدمات المواطنين</h5>
                                <div class="imgcard">

                                    <img src="{{asset('frontend/img/gallary/خدمات مواطنين.gif')}}" alt="maps">
                                <p>قامت الهيئة المصرية العامة لمشروعات بالتعاون مع وزارة الدولة للتنمية الإدارية بتطوير النماذج الخاصة بالخدمات وفيما يلي بعض نقاط تطوير :-
                                    <a class="btn btn py-3 px-5 mt-2" href="">المزيد</a>

                                </p>

                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

       <!-- Galarry Start -->
       <div class="container links">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Links</h6>
            <h1 class="mb-5">روابط هامة</h1>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pppp">
            <div class="gallery">
              <a target="_blank" href="http://www.ekb.eg"><img src="{{asset('frontend/img/gallary/sdsegypt2030.jpg') }}" alt="g" width="400"
                  height="500"></a>
              <div class="desc">

              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pppp">
            <div class="gallery">
              <a target="_blank" href="https://www.mwri.gov.eg/">
                <img src="{{asset('frontend/img/about/وزارة.jpg')}}" alt="وزارة" width="400" height="500" border="0"> </a>
              <div class="desc">

              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pppp">
            <div class="gallery">
              <a href="LINKS/خدمات الموظفين.html"><img src="{{asset('frontend/img/gallary/خدمات.png')}}" height="500" alt="g" width="400"></a>
              <div class="desc">

              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pppp">
            <div class="gallery">
              <a href="LINKS/مكتبة.html"><img src="{{asset('frontend/img/gallary/source.gif')}}" alt="g" width="400" height="500"
                  border="0"></a>
              <div class="desc">
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Galarry End -->


        <!-- Footer Start -->

        @include('Frontend.shared.footer')

        <!-- Footer End -->
    </body>
@endsection
