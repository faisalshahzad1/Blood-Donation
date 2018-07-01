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
    <form class="reg-form" action="{{URL::to('/updateblog/'.$blog->id)}}" method="POST" />
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input    id="title" value="{{$blog->title}}"  name="title" required="" class="form-control" type="text" />
                                </div>
                            </div>

                            

                          
                            <!-- <div class="col-sm-12">
                                <label>Upload Image</label>
                                <div class="form-group">
                                    <input   type="file" name="image" class="form-control"   />
                                </div>
                            </div> -->


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Body</label>
                                    
                                    <input    id="body" value="{{$blog->body}}"  name="body" required="" class="form-control" type="text" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Update  Blog</button>
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