@extends('Layout/Default')
@section('content')


    
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
                            <li><a href="./index.php">Contact Us</a></li>
                            
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
                        <h2>Get The Nutrient Diet</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-8">
            <h3>GENERAL GUIDELINES</h3>
                 <p> To donate blood or platelets, you must be in good general health, weigh at least 110 pounds, and be at least 16 years old. Parental consent is required for blood donation by 16 year olds’No parental consent is required for those who are at least 17 years old. If you are 76 or older, you will need your doctor’s written approval for blood or platelet donation</p>
                            </div>
                    <div class="col-md-4">

                        <img src="{{ URL::to('public/img/fitness.jpg')}}">
                              </div>
                    </div>
                    <br>

<div class="row">
            <div class="col-md-4">
                <h3>GOOD HEALTH</h3>
                <br>
                <img src="{{ URL::to('public/img/vitamin-b-871135_960_720.jpg')}}">
                            </div>
                    <div class="col-md-8">
                        <br>
<br>
                 <p> Good health means that you feel well and are able to carry out normal daily activities. If you have a chronic medical condition such as diabetes or high blood pressure, you may still be eligible as long as you are receiving treatment to control your condition.

TIPS:
<ul>
<li> <b>Diet</b>: A well-balanced meal is recommended within four hours of donation.</li>
<li><b>Hydrate</b>: Being well-hydrated helps donors maintain blood volume and can prevent dizziness or fainting.</li>
</ul>

You will not be eligible to donate blood:
<ul>
<li> Have tested positive for hepatitis B or hepatitis C</li>
<li>Have ever had a positive test for the AIDS virus</li>
<li>Have ever used intravenous illegal drugs, even once</li>
<li>Have ever used injectable drugs, including anabolic steroids, unless prescribed by a physician</li>
<li>Organ Failure: Kidney, lung or liver failure</li>
</ul>
</p>
            
                        
                              </div>
                    </div>
                    <br>

<div class="row">
            <div class="col-md-12">
                           <center><h3>TERMS AND CONDITIONS</h3></span></center>
                           <br>
                 <p> Blood donors must wait at least 56 days between blood donations and 7 days before donating platelets. Platelet donors may donate once every seven days, not to exceed six times in any eight-week period, and must wait 7 days before donating blood.
<ul>
<li>Male donors+ must be at least 17 years old in most states, at least 5'1" tall and weigh at least 130 lbs</li>
<li>Female donors+ must be at least 19 years old, at least 5'5" tall and weigh at least 150 lbs</li>
</ul>  
</p>
               
                            </div>
                    
                    </div>

                    <div class="row">
                    <div class="col-md-12">

                       <img src="{{ URL::to('public/img/woman.jpg')}}">

                              </div>
                          </div>
                  

 <!--           <div class="row">
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
                    </form> -->
                </div>
            </div>
        </div>
    </section>
    
    

</body>

</html>
@stop