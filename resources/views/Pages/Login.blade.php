@extends('Layout/Default')
@section('content')


    
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>Login</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php">Login</a></li>
                            
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

<div class="col-md-4 col-md-offset-4 reg">
<a href="{{URL ::to ('/Registeruser')}}"><button class="btn btn-info pull-right"> Register</button></a>
                </div>

            </div>
            
            <div class="row">
                
                <div class="col-md-4 col-md-offset-4 form-sign">

                    <center><h3>Login</h3></center>

                    <form class="reg-form" action="{{URL :: to('/signin')}}" method="get" />
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input placeholder="Enter Name" id="Name" name="Name" required="" class="form-control" type="text" />
                                </div>
                            </div>
                             <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input placeholder="Enter Password" id="Password" name="Password" class="form-control" required="" type="password" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  

          
        </div>
    </section>
    
    

</body>

</html>
@stop