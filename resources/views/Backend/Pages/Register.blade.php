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
    <form class="reg-form" action="{{URL :: to('/storeuser')}}" method="post" />
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input placeholder="Enter  Name" id="Name" name="Name" required="" class="form-control" type="text" />
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
                                     </select>
                                 </div>
                            </div>

                          
                            <div class="col-sm-6">
                                <label>Phone Number</label>
                                <div class="form-group">
                                    <input placeholder="Enter Phone" id="Phone" name="Phone" class="form-control" required="" type="number" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <div class="form-group">
                                    <input placeholder="Enter Email" id="Email" name="Email" class="form-control" required="" type="email" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>Nearby Hospital</label>
                                <div class="form-group">
                                    <input placeholder="Your Nearby Hospital" id="Hospital" name="Hospital" class="form-control" required="" type="text" />
                                </div>
                            </div>
                             <div class="col-sm-6">
                                <label>Your Age</label>
                                <div class="form-group">
                                    <input placeholder="Enter Your Age" id="Age" name="Age" class="form-control" required="" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input placeholder="Password" id="Password" name="Password" class="form-control" required="" type="password" />
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Your Address</label>
                                    <textarea class="field-element form-control" data-gramm="true" spellcheck="false" data-gramm_editor="true" row=2 name="Adress" placeholder="Message" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button class="btn btn-info">sent your message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
</div>


    
    
   

    
    


    <!-- Main content -->
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  
  @stop