@extends('Layout/Default')
@section('content')




    <!-- ======= page title part srat ======= -->
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>contact us</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li class="active">contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= Contact Area Start ======= -->
    <section class="contact-area section-padding parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <h2>Get In Touch</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="contact-form bg-trans">
                        <form action="#" method="post" />
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Name" required="" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email" required="" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Phone" required="" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject" required="" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" data-gramm="true" spellcheck="false" data-gramm_editor="true" placeholder="Message" required="required"></textarea>
                                </div>
                                <button type="submit" class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal">sent</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Contact Area End ======= -->

    <!-- ======= Map Area Start ======= -->
    <section class="map-area">
        <div class="google-map-area">
            <!-- map -->
            <div id="map"></div>
            <!-- /.map -->
            <!-- address info -->
            <div class="address">
                <!-- heading -->
                <div class="heading">
                    <h2>contact info</h2>
                </div>
                <!-- /.heading -->
                <div class="address-info">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>(+1) 1234 567 8900</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>info@yormail.com</li>
                        <li><i class="fa fa-home" aria-hidden="true"></i>Architecture Downtown St, Melbourne Australia</li>
                    </ul>
                    <div class="footer-social-link">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.address info -->
        </div>
    </section>
  



@stop