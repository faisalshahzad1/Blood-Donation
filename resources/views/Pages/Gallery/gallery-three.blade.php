@extends('Layout/Default')
@section('content')

<!doctype html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> </html><![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> </html><![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> </html><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    </head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- ======= preloader part start ======= -->
    
    <!-- ======= preloader part start ======= -->

    <!-- ======= header part start ======= -->
   
    <!-- ======= header part end ======= -->

    <!-- ======= page title part srat ======= -->
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>Photo Gallery</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li class="active">Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= gallery part start ======= -->
    <div class="gallery-area section-padding ex-mg" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- gallery Menu -->
                    <div class="iso-nav">
                        <ul>
                            <li class="gallery-active" data-filter="*">all</li>
                            <li data-filter=".children">children</li>
                            <li data-filter=".helping-hand">helping hand</li>
                            <li data-filter=".volunteer">volunteer</li>
                            <li data-filter=".achivment">achivment</li>
                            <li data-filter=".branding">branding</li>
                        </ul>
                    </div>
                    <div class="iso-content">
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item children volunteer">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/01.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/01.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item helping-hand achivment branding">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/02.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/02.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item children achivment">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/03.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/03.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item helping-hand branding">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/04.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/04.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item children branding">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/05.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/05.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item helping-hand volunteer">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/06.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/06.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item achivment volunteer">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/07.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/07.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item branding volunteer">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/08.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/08.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single gallery -->
                        <div class="col-md-4 col-sm-6 single-gallery iso-item children achivment">
                            <div class="gallery-img">
                                <img src="{{ URL:: to ('public/img/gallery/04.jpg')}}" alt="" />
                                <div class="gallery-lightbox">
                                    <a href="{{ URL:: to ('public/img/gallery/04.jpg')}}" data-lightbox="example-set" data-title="believed">
                                       <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= gallery part end ======= -->

    <!-- ======= call to action part start ======= -->

    <!-- ======= call to action part end ======= -->

    <!-- ======= footer area start ======= -->
   
    <!-- ======= footer area end ======= -->

    <!-- ======= All js ======= -->
    <!-- modernizr js -->
    

</body>

</html>
@stop