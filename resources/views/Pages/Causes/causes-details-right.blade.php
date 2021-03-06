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
                            <h2>Latest causes</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./causes-right-sidebar.php">causes</a></li>
                            <li class="active">causes details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= causes part start ======= -->
    <section class="causes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-md-push-4">
                    <div class="causes-left">
                        <!-- single causes -->
                        <div class="causes-info">
                            <div class="causes-img">
                                <img src="{{ URL:: to ('public/img/gallery/06.jpg')}}" alt="" />
                                <div class="project-count-info">
                                    <span class="counter" data-count="350">0</span> <span>+</span>
                                </div>
                            </div>
                            <div class="causes-details">
                                <h2><a href="#">Sponsor a child today</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate, quisquam aut eum perspiciatis?</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus.</p>
                                <div class="condition-donate causes">
                                    <a href="#" class="donate-btn more-btn hvr-shutter-out-horizontal">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-causes">
                        <h2>related causes</h2>
                        <!-- single related causes -->
                        <div class="related-causes-info">
                            <div class="related-causus-img">
                                <img src="{{ URL:: to ('public/img/gallery/02.jpg')}}" alt="" />
                            </div>
                            <div class="related-causus-details">
                                <h2>Sponsor a child today</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quas, quidem totam, fuga iste et voluptatem tempora molestiae ipsa. Similique voluptates mollitia.</p>
                                <a href="#" class="donate-btn hvr-shutter-out-horizontal">read more</a>
                            </div>
                        </div>
                        <!-- single related causes -->
                        <div class="related-causes-info">
                            <div class="related-causus-img">
                                <img src="{{ URL:: to ('public/img/gallery/03.jpg')}}" alt="" />
                            </div>
                            <div class="related-causus-details">
                                <h2>Gear up for giving</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quas, quidem totam, fuga iste et voluptatem tempora molestiae ipsa. Similique voluptates mollitia.</p>
                                <a href="#" class="donate-btn hvr-shutter-out-horizontal">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-md-pull-8">
                    <!-- single sidebar -->
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h2>archives</h2>
                        </div>
                        <ul>
                            <li><a href="#">Case Investigation</a></li>
                            <li><a href="#">Business Taxation</a></li>
                            <li><a href="#">donate now</a></li>
                            <li><a href="#">child care</a></li>
                            <li><a href="#">helping hand</a></li>
                            <li><a href="#">Gear up for giving</a></li>
                        </ul>
                    </div>
                    <!-- single sidebar -->
                    <div class="sidebar-widget">
                        <div class="widget-title recent-widget">
                            <h2>RECENT POST</h2>
                        </div>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/01.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/02.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/03.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- single sidebar -->
                    <div class="sidebar-widget">
                        <div class="widget-title recent-widget">
                            <h2>twitter POST</h2>
                        </div>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/01.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/02.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/03.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- single sidebar -->
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h2>everyday time</h2>
                        </div>
                        <ul>
                            <li class="category-active"><a href="#">Sat : 08:00am-12:00pm</a></li>
                            <li><a href="#">sun : 08:00am-12:00pm</a></li>
                            <li><a href="#">mon : 08:00am-12:00pm</a></li>
                            <li><a href="#">twe : 08:00am-12:00pm</a></li>
                            <li><a href="#">wed : 08:00am-12:00pm</a></li>
                            <li><a href="#">thu : 08:00am-12:00pm</a></li>
                            <li><a href="#">fri : 08:00am-12:00pm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= causes part end ======= -->

    <!-- ======= call to action part start ======= -->
  
    <!-- ======= call to action part end ======= -->

    <!-- ======= footer area start ======= -->
    
</body>

</html>
@stop