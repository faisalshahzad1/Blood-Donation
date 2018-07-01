@extends('Layout/Default')
@section('content')


    
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>Donor & Acceptor</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php">Donor & Acceptor</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div  class="row singleuser">
            <div class="col-md-4 col-md-offset-4 userimg">

           <img src="{{ URL:: to ('public/img/team/02.png')}}" alt="">


            </div>   
             


        </div>
        <div  class="row singleuser">
<div class="col-md-4 col-md-offset-4 ">

          <center><h3> Ana Bella</h3></center>


            </div> 


        </div>

        <div  class="row singleuser">
<div class="col-md-4">

          <center><h3>Blood Group</h3></center>


            </div>
            <div class="col-md-4">

          <center><h3>Nearby Hospital</h3></center>


            </div> 
<div class="col-md-4">

          <center><h3>Age</h3></center>


            </div> 

<div class="col-md-4">

          <center><h3>Phone Number</h3></center>


            </div> 
            <div class="col-md-4">

          <center><h3>Adress</h3></center>


            </div> 



        </div>



    </div>
    

</body>

</html>
@stop