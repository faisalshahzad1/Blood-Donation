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
                            <h2>about us</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li class="active">about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= about part start ======= -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <h2>who we are</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <!-- about img -->
                    <div class="about-img">
                        <img src="{{ URL:: to ('public/img/about/about.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-sm-7">
                    <!-- about details -->
                    <div class="about-details">
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <!-- service content -->
                    <div class="service-content">
                        <div class="service-title">
                            <h3>adopt a child</h3>
                        </div>
                        <i class="fa fa-child" aria-hidden="true"></i>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor.</p>
                        <a href="#" class="donate-btn more-btn hvr-shutter-out-horizontal">contact us</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- service content -->
                    <div class="service-content">
                        <div class="service-title">
                            <h3>get involved</h3>
                        </div>
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor.</p>
                        <a href="#" class="donate-btn more-btn hvr-shutter-out-horizontal">donate now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <!-- service content -->
                    <div class="service-content mobile-auto">
                        <div class="service-title">
                            <h3>be a volunteer</h3>
                        </div>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor.</p>
                        <a href="#" class="donate-btn more-btn hvr-shutter-out-horizontal">join us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= about part end ======= -->

    <!-- ======= project count area start ======= -->
    <section class="project-count-area section-padding parallax">
        <div class="container">
            <div class="row">
                <!-- single project count -->
                <div class="col-md-3 col-sm-6">
                    <div class="project-count">
                        <span class="counter" data-count="350">0</span> <span>+</span>
                        <h3>Completed Project</h3>
                    </div>
                </div>
                <!-- single project count -->
                <div class="col-md-3 col-sm-6">
                    <div class="project-count">
                        <span class="counter" data-count="125">0</span> <span>+</span>
                        <h3>happy client</h3>
                    </div>
                </div>
                <!-- single project count -->
                <div class="col-md-3 col-sm-6">
                    <div class="project-count">
                        <span class="counter" data-count="45">0</span> <span>+</span>
                        <h3>winning awards</h3>
                    </div>
                </div>
                <!-- single project count -->
                <div class="col-md-3 col-sm-6">
                    <div class="project-count">
                        <span class="counter" data-count="20">0</span> <span>+</span>
                        <h3>exprience years</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= project area end ======= -->

    <!-- ======= Team part Start ======= -->
    <section id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <h2>Our volunteers</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <!-- Single Member -->
                    <div class="team-member">
                        <div class="member-top">
                            <img src="{{ URL:: to ('public/img/team/01.png')}}" alt="" />
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="member-dec">
                            <h4>John Doe</h4>
                            <span>businessman</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <!-- Single Member -->
                    <div class="team-member">
                        <div class="member-top">
                            <img src="{{ URL:: to ('public/img/team/02.png')}}" alt="" />
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="member-dec">
                            <h4>thom muller</h4>
                            <span>student</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <!-- Single Member -->
                    <div class="team-member">
                        <div class="member-top">
                            <img src="{{ URL:: to ('public/img/team/03.png')}}" alt="" />
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="member-dec">
                            <h4>lily adams</h4>
                            <span>businessman</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <!-- Single Member -->
                    <div class="team-member">
                        <div class="member-top">
                            <img src="{{ URL:: to ('public/img/team/04.png')}}" alt="" />
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="member-dec">
                            <h4>Robert Doe</h4>
                            <span>student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Team part end ======= -->

    <!-- ======= Mission part start ======= -->
    <section class="about-info-area section-padding parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- about content -->
                    <div class="about-content">
                        <h4>our mission</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam.</p>
                        <p>quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- about content -->
                    <div class="about-content">
                        <h4>our vision</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam.</p>
                        <p>quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Mission part end ======= -->

    <!--
		============================
		Patner Area Start
		============================
	-->
    <div class="patner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners-brand owl-carousel">
                        <div class="single-partners-brand">
                            <a href="#"><img src="{{ URL:: to ('public/img/partners/01.png')}}" alt="Clints Barnd" /></a>
                        </div>
                        <div class="single-partners-brand">
                            <a href="#"><img src="{{ URL:: to ('public/img/partners/02.png')}}" alt="Clints Barnd" /></a>
                        </div>
                        <div class="single-partners-brand">
                            <a href="#"><img src="{{ URL:: to ('public/img/partners/03.png')}}" alt="Clints Barnd" /></a>
                        </div>
                        <div class="single-partners-brand">
                            <a href="#"><img src="{{ URL:: to ('public/img/partners/04.png')}}" alt="Clints Barnd" /></a>
                        </div>
                        <div class="single-partners-brand">
                            <a href="#"><img src="{{ URL:: to ('public/img/partners/05.png')}}" alt="Clints Barnd" /></a>
                        </div>
                        <div class="single-partners-brand">
                            <a href="#"><img src="{{ URL:: to ('public/img/partners/06.png')}}" alt="Clints Barnd" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
		============================
		Patner Area End
		============================
	-->

    <!-- ======= call to action part start ======= -->
   
    <!-- ======= call to action part end ======= -->

    <!-- ======= footer area start ======= -->
   
    <!-- ======= footer area end ======= -->

    <!-- ======= All js ======= -->
    <!-- modernizr js -->
    
</body>

</html>
@stop