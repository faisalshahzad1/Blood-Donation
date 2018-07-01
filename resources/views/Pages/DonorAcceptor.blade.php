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
    <div class="row ">

<div class="col-md-4 col-md-offset-4">
<center><h2 style="padding:20px;">Blood Groups</h2></center>
<table class="table table-striped table-hover table-borderless bloodgroups">
<thead class="thead-dark">
    <tr>
<th>Blood Groups</th>
<th>Blood Groups</th>
<tr>
</thead>
<tbody>
<tr>
<td>A+</td>
<td>B+</td>
</tr>

<tr>
<td>O+</td>
<td>AB+</td>
</tr>

<tr>
<td>A-</td>
<td>B-</td>
</tr>

<tr>
<td>O-</td>
<td>AB-</td>

</tr>
</tbody>
</table>





</div>


</div>



    </div>
    

<div class="row">
<center><h2 style="padding:20px;">We Got Some information for the Acceptors & Donors</h2></center>
<div class="col-md-8 col-md-offset-2 ">
    <table class="table table-striped table-hover table-borderless bloodgroups">
<thead>
<tr>
    <th>Type Of Blood</th>
    <th>Can Give Blood To</th>
    <th>Can Recieve Blood From</th>
</tr>
</thead>
<tbody>
<tr>
       <td>A+</td>
        <td>A+, AB+</td>
        <td>A+ , A- , O+ ,O-</td>
</tr>
<tr>
       <td>A-</td>
       <td>A+ , A- , AB+ ,AB-</td>
        <td>A- ,O-</td>
</tr>
<tr>
      <td>B+</td>
      <td>B+ ,AB+ </td>
      <td>B+,B-,O+,O-</td>
</tr>
<tr>
     <td>B-</td>
     <td>B-,B+,AB+,AB-</td>
     <td>B-,O-</td>

</tr>
<tr>
     <td>AB+</td>
    <td>AB+</td>
     <td>EveryOne</td>
</tr>
<tr>
    <td>AB-</td>
    <td>AB+,AB-</td>
    <td>A-,B-,AB-,O-</td>
</tr>
<tr>
     <td>O+</td>
     <td>A+,B+,AB+,O+</td>
     <td>O+,O-</td></tr>
<tr>
    <td>O-</td>
    <td>Everyone</td>
    <td>O-</td>
</tr>
</tbody>
    </table>


</div>

    </div>

</body>

</html>
@stop