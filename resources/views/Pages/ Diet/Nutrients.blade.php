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
                            <h2>Contact Us</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php">Nutrients</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= volunteers details part start ======= -->
    
    <!-- ======= volunteers details part end ======= -->
    <!-- ======= events registration part start ======= -->
    <section class="registration-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <h2>GENERAL GUIDELINES:</h2>
                        <p> To donate blood or platelets, you must be in good general health, weigh at least 110 pounds, and be at least 16 years old. Parental consent is required for blood donation by 16 year olds’No parental consent is required for those who are at least 17 years old. If you are 76 or older, you will need your doctor’s written approval for blood or platelet donation</p>
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
    
    

</body>

</html>
@stop