@extends('Layout/Default')
@section('content')


    
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>Edit Your Profile </h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php">Edit</a></li>
                            
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
                
                <div class="col-md-8 col-md-offset-2 form-sign">
                    <center><h3>Edit Your Profile</h3></center>

                    <form class="reg-form" action="{{URL::to('/updateuser/'.$user->id)}}" method="POST"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input  id="" name="Name"  value="{{$user->Name}}" required="" class="form-control" type="text" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Blood Group</label>
                                    <select name="BloodGroup">
                                     <option value="A+">A+</option>
                                     <option value="A-">A-</options>
                                     <option value="B+">B+</option>
                                     <option value="B-">B-</options>
                                     <option value="AB+">AB+</option>
                                     <option value="AB-">AB-</option>
                                     <option value="O+">O+</options>
                                     <option value="O-">O-</options>
                                     </select></div>
                            </div>

                          
                            <div class="col-sm-6">
                                <label>Phone Number</label>
                                <div class="form-group">
                                    <input  id="" name="Phone"  value="{{$user->PhoneNumber}}" class="form-control" required="" type="number" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <div class="form-group">
                                    <input  id="" name="Email" value="{{$user->Email}}" class="form-control" required="" type="email" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>Nearby Hospital</label>
                                <div class="form-group">
                                    <input  id="" name="Hospital"  value="{{$user->Hospital}}" class="form-control" required="" type="text" />
                                </div>
                            </div>
                             <div class="col-sm-6">
                                <label>Your Age</label>
                                <div class="form-group">
                                    <input  id="" name="Age"  value="{{$user->Age}}" class="form-control" required="" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input  id="" name="Password"  value="{{$user->Password}}" class="form-control" required="" type="password" />
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Your Address</label> 
                                    <input  id="" name="Adress"  value="{{$user->Adress}}" class="form-control" required="" type="text" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  

          
        </div>
    </section>
    
    

</body>

</html>
@stop