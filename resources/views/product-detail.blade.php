@extends('layouts.master')

@section('content')
<br><br>
<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
     <div class="container-fluid">
       <div class="authentication-card ">
         <div class="card shadow rounded-0 overflow-hidden ">
           <div class="row g-0">
             <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
               <img src=" {{asset('template/assets/images/error/buku1.jpg')}}" class="img-fluid" alt="">
             </div>
             <div class="col-lg-6">
               <div class="card-body p-4 p-sm-5">
                 <h4 class="card-title">Cars: A Complete History</h4>
                 <p class="card-text mb-5">By Simon Heptinstall</p>
                 <h5 class="card-title">About The Book</h5>
                 <p class="card-text mb-5">When an iconic vehicle zooms along the road, people of all ages stop and turn their heads.
                     Amazing feats of innovation and engineering, these cultural treasures are not just stylish and powerful, they’re
                     irresistible symbols of status, freedom, and progress. </p>
                    <h6 class="card-title">Book Condition</h6>
                <p class="card-text mb-5">Used</p>

                 <form class="form-body">
                    <div class="mb-3">
                        <label class="form-label">Default Date and Time Picker</label>
                        <input class="result form-control" type="text" id="date-time" placeholder="Date Picker...">
                    </div>
                 </form>
                 <br>
                 <button type="button" class="btn btn-danger px-5 radius-30">Back</button>
                 <button type="button" class="btn btn-primary px-5 radius-30">Book</button>
              </div>
             </div>
           </div>
         </div>
       </div>
     </div>
    </main>

    <!--end page main-->
@endsection

