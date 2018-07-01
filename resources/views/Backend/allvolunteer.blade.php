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
    <div class="container">
            
            
            <div class="row">

            <table class="table table-hover table-stripe">
             <thead>
              <tr>
              <th>Name</th>
              <th>Image</th>
              <th>Occupation</th>
              <th>Education</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Adress</th>
              <th>Description</th>
              <th>Edit</th>
              <th>Delete</th>

              </tr> 

             </thead>
             <tbody>
@foreach($volunteer as $volunteers)
              <tr>
               <td>{{$volunteers->Name}}</td>
               <td ><img src="{{'public/'.Storage::disk('local')->url($volunteers->Image)}}" style="height: 50px;
    width: auto;"></td>
               <td>{{$volunteers->Occupation}}</td>
               <td>{{$volunteers->Education}}</td>
               <td>{{$volunteers->Phone}}</td>
               <td>{{$volunteers->Email}}</td>
               <td>{{$volunteers->Adress}}</td>
               <td>{{$volunteers->Description}}</td>
               <td><a href="{{ URL :: to('/volunteeredit/'.$volunteers->id)}}"><button class="btn btn-info"><i class="fa fa-pencil"></i> Edit</button></a></td>
               <td><a href="{{ URL :: to('/deletevolunteer/'.$volunteers->id)}}"><button class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a></td>

              </tr>
@endforeach



             </tbody>
{{$volunteer->links()}}

            </table>






            </div>
                
                
   
    
    


   
  </div>
</div>


    
    

   
        
  <!-- /.content-wrapper -->
  
  @stop