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
                            <h2>volunteers details</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php">volunteers</a></li>
                            <li class="active">volunteers details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= volunteers details part start ======= -->
    <section class="volunteers-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="volunteers-img">
                        <img src="{{ URL:: to ('public/img/team/03.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-7">
                    <div class="volunteers-info">
                        <h4>thom muller</h4>
                        <span> businessman </span>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-skype"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias, consectetur blanditiis eum maxime sunt accusantium ipsa doloribus reiciendis.</p>
                        <div class="vol-in">
                            <div class="volunteers-ins">
                                <i class="fa fa-book"></i>
                                <h4>Education:</h4>
                                <p>Bachelor’s degree in Engineering<br />From Rutgers University, California.</p>
                            </div>
                            <div class="volunteers-ins">
                                <i class="fa fa-map-marker"></i>
                                <h4>contact:</h4>
                                <p>Address: Village 856 Broadway New York <br /> Phone: +262 695 2601<br /> Email: you@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= volunteers details part end ======= -->
    <!-- ======= events registration part start ======= -->
    <section class="registration-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <h2>Quick Contact</h2>
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="field-element form-control" data-gramm="true" spellcheck="false" data-gramm_editor="true" name="msg" placeholder="Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button class="donate-btn reg-btn more-btn hvr-shutter-out-horizontal">sent your message</button>
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