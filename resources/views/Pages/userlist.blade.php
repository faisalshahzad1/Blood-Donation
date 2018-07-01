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
            <!-- <div class="row">

<div class="col-md-4 col-md-offset-4 reg">
<a href="{{URL ::to ('/Register')}}"><button class="btn btn-info pull-right"> Register</button></a>
                </div>

            </div> -->
            
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






            </div>
                
                
    </section>
    
    

</body>

</html>
@stop