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
                            <h2>events details</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./events-4col.php">events</a></li>
                            <li class="active">events details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= events details part start ======= -->
    <section class="events-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="single-events">
                        <img src="{{ URL:: to ('public/img/slider/01.jpg')}}" alt="" />
                        <h2>Event Description</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis.</p>
                        <p>quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
                        <h2 class="text-center">Event Speakers</h2>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="events-author">
                                <a href="#">
                                    <h4>Alex Jacobson</h4>
                                </a>
                                <span>Lawyer</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="events-author">
                                <a href="#">
                                    <h4>Alex Jacobson</h4>
                                </a>
                                <span>Businessman</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="events-author">
                                <a href="#">
                                    <h4>Alex Jacobson</h4>
                                </a>
                                <span>Student</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="events-author">
                                <a href="#">
                                    <h4>Alex Jacobson</h4>
                                </a>
                                <span>Businessman</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="events-author">
                                <a href="#">
                                    <h4>Alex Jacobson</h4>
                                </a>
                                <span>Student</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="events-author">
                                <a href="#">
                                    <h4>Alex Jacobson</h4>
                                </a>
                                <span>Lawyer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="events-sidbar">
                        <article class="events-article">
                            <ul>
                                <li>
                                    <h5>Topics:</h5>
                                    <p>Save the children for the new world.</p>
                                </li>
                                <li>
                                    <h5>Host:</h5>
                                    <p>UROSD LTD.</p>
                                </li>
                                <li>
                                    <h5>Location:</h5>
                                    <p>#405, Lan Streen, Los Vegas, USA</p>
                                </li>
                                <li>
                                    <h5>Start Date:</h5>
                                    <p>January 17, 2018</p>
                                </li>
                                <li>
                                    <h5>End Date:</h5>
                                    <p>February 28, 2018</p>
                                </li>
                                <li>
                                    <h5>Website:</h5>
                                    <p>urosd.com</p>
                                </li>
                                <li>
                                    <h5>Share:</h5>
                                    <div class="share-icons">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </article>
                        <article class="events-article events-slider">
                            <h2>upcoming events</h2>
                            <div class="upcoming-events owl-carousel">
                                <!-- Single news -->
                                <div class="single-events events-info">
                                    <div class="news-img">
                                        <img src="{{ URL:: to ('public/img/news/04.jpg')}}" alt="" />
                                        <div class="post-date-info events-date">
                                            <span>26</span> feb/18
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        <div class="post-meta">
                                            <ul class="events-ul">
                                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>new yourk</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 5.00 pm-8.00pm </a></li>
                                            </ul>
                                        </div>
                                        <h2><a href="#">post title here</a></h2>
                                        <p>We care for children, protect their welfare, and prepare them for the future.</p>
                                        <a href="#" class="donate-btn hvr-shutter-out-horizontal">register now</a>
                                        <a href="#" class="donate-btn hvr-shutter-in-horizontal">details</a>
                                    </div>
                                </div>
                                <!-- Single news -->
                                <div class="single-events events-info">
                                    <div class="news-img">
                                        <img src="{{ URL:: to ('public/img/news/06.jpg')}}" alt="" />
                                        <div class="post-date-info events-date">
                                            <span>26</span> feb/18
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        <div class="post-meta">
                                            <ul class="events-ul">
                                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>new yourk</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 5.00 pm-8.00pm </a></li>
                                            </ul>
                                        </div>
                                        <h2><a href="#">post title here</a></h2>
                                        <p>We care for children, protect their welfare, and prepare them for the future.</p>
                                        <a href="#" class="donate-btn hvr-shutter-out-horizontal">register now</a>
                                        <a href="#" class="donate-btn hvr-shutter-in-horizontal">details</a>
                                    </div>
                                </div>
                                <!-- Single news -->
                                <div class="single-events events-info">
                                    <div class="news-img">
                                        <img src="{{ URL:: to ('public/img/news/02.jpg')}}" alt="" />
                                        <div class="post-date-info events-date">
                                            <span>26</span> feb/18
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        <div class="post-meta">
                                            <ul class="events-ul">
                                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>new yourk</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 5.00 pm-8.00pm </a></li>
                                            </ul>
                                        </div>
                                        <h2><a href="#">post title here</a></h2>
                                        <p>We care for children, protect their welfare, and prepare them for the future.</p>
                                        <a href="#" class="donate-btn hvr-shutter-out-horizontal">register now</a>
                                        <a href="#" class="donate-btn hvr-shutter-in-horizontal">details</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= events details part end ======= -->

    <!-- ======= events registration part start ======= -->
    <section class="registration-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <h2>Registration Form</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="reg-form" action="#" method="get" />
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input placeholder="Enter Email" id="contact_email2" name="contact_email2" class="form-control" required="" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input placeholder="Enter Phone" id="contact_phone" name="contact_subject" class="form-control" required="" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket types</label>
                                    <select class="form-control">
                                        <option />One Person
                                        <option />Two Person
                                        <option />Family Pack
                                        <option />Premium
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Event types</label>
                                    <select class="form-control">
                                        <option />Event 1
                                        <option />Event 1
                                        <option />Event 1
                                        <option />All package
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button class="donate-btn reg-btn more-btn hvr-shutter-out-horizontal">Register now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= events registration part end ======= -->

    <!-- ======= call to action part start ======= -->
 
    <!-- ======= call to action part end ======= -->

    <!-- ======= footer area start ======= -->
    
    <!-- ======= footer area end ======= -->

    <!-- ======= All js ======= -->
    <!-- modernizr js -->
    

</body>

</html>
@stop