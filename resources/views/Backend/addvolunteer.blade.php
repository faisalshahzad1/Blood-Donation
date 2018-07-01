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
                        <form class="reg-form" action="{{URL :: to('/storevolunteer')}}" method="POST" enctype="multipart/form-data"/>
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input  id="" name="Name"   required="" class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input name="Image" class="form-control" type="file" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Occupation</label>
                                    <input  id="Occupation" name="Occupation"   required="" class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Education</label>
                                <div class="form-group">
                                    <input  id="Education" name="Education"   class="form-control" required="" type="text" />
                                </div>
                            </div>

                          
                            <div class="col-sm-6">
                                <label>Phone Number</label>
                                <div class="form-group">
                                    <input  id="Phone" name="Phone"   class="form-control" required="" type="number" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <div class="form-group">
                                    <input  id="Email" name="Email"  class="form-control" required="" type="email" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label>Adress</label>
                                <div class="form-group">
                                    <input  id="Adress" name="Adress"   class="form-control" required="" type="text" />
                                </div>
                            </div>
                             <div class="col-sm-12">
                                <label>Bio</label>
                                <div class="form-group">
                                    <input  id="Description" name="Description"   class="form-control" required="" type="text" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Add Volunteer</button>
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