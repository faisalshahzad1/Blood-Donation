@extends('Backend/Layout/Default')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="col-md-8 col-md-offset-2 form-sign">
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
                                    
                                     <option value="A+" {{$user->BloodGroup == 'A+' ? ' selected' : ''}}>A+</option>
                                     <option value="A-" {{$user->BloodGroup == 'A-' ? ' selected' : ''}}>A-</options>
                                     <option value="B+" {{$user->BloodGroup == 'B+' ? ' selected' : ''}}>B+</option>
                                     <option value="B-" {{$user->BloodGroup == 'B-' ? ' selected' : ''}}>B-</options>
                                     <option value="AB+" {{$user->BloodGroup == 'AB+' ? ' selected' : ''}}>AB+</option>
                                     <option value="AB-" {{$user->BloodGroup == 'AB-' ? ' selected' : ''}}>AB-</option>
                                     <option value="O+"  {{$user->BloodGroup == 'O+' ? ' selected' : ''}}>O+</options>
                                     <option value="O-"  {{$user->BloodGroup == 'O-' ? ' selected' : ''}}>O-</options>
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
                    </form>                </div>
</div>


    
    
   

    
    


    <!-- Main content -->
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  
  @stop