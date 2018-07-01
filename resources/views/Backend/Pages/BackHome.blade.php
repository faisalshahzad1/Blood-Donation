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
              <th>Name </th>
              <th>Blood Group</th>
              <th>Hospital</th>
              <th>Age</th>
              <th>Adress</th>
              <th>Edit</th>
              <th>Delete</th>

              </tr> 

             </thead>
             <tbody>
@foreach($user as $users)
              <tr>
               <td>{{$users->Name}}</td>
               <td>{{$users->BloodGroup}}</td>
               <td>{{$users->Hospital}}</td>
               <td>{{$users->Age}}</td>
               <td>{{$users->Adress}}</td>
               <td><a href="{{ URL :: to('/useredit/'.$users->id)}}"><button class="btn btn-info"><i class="fa fa-pencil"></i> Edit</button></a></td>
               <td><a href="{{ URL :: to('/deleteuser/'.$users->id)}}"><button class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a></td>

              </tr>
@endforeach




             </tbody>


            </table>
            {{$user->links()}}





            </div>
                
                
   
    
    


   
  </div>
</div>


    
    

   
        
  <!-- /.content-wrapper -->
  
  @stop