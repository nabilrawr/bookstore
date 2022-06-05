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

                <img src="{{ asset("storage/$book->image") }}" class="img-fluid" alt="">
             </div>
             <div class="col-lg-6">
               <div class="card-body p-4 p-sm-5">
                 <h4 class="card-title">{{ $book->title }}</h4>
                 <p class="card-text mb-5">By {{ $book->writer }}</p>
                 <h5 class="card-title">About The Book</h5>
                 <p class="card-text mb-5">{{ $book->description }}</p>
                 <form class="form-body">
                    <div class="mb-3">
                        <label class="form-label">Default Date and Time Picker</label>
                        <input class="result form-control" type="text" id="date-time" placeholder="Date Picker...">
                    </div>
                 </form>
                 <br>
                 <a class="btn btn-danger px-5 radius-30" href="{{ route('borrower.index-catalog') }}">Back</a>
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

