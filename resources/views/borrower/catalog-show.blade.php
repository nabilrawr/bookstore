@extends('layouts.master')


@section('content')
<br><br>
<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
     <div class="container-fluid">
       <div class="card pt-4" style="padding-left: 25%; padding-right:5%">
         <div class="card shadow rounded-0 ">
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
                 <form class="form-body" method="POST" action="{{ route('borrower.store-booking', $book->id ) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Select a Pickup Date And Time</label>
                        <input class="result form-control" name="start_date" type="text" id="date-time" placeholder="Date Picker...">
                    </div>

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                 <br>
                 <a class="btn btn-secondary px-5 radius-30" href="{{ route('borrower.index-catalog') }}">Back</a>

                 @if ( $book->status_id == 4)
                     <button type="submit" class="btn btn-primary px-5 radius-30">Rent The Book</button>
                 @else
                 <button type="button" class="btn btn-warning px-5 radius-30"  disabled >Not available</button>
                 @endif

                </form>
              </div>
             </div>
           </div>
         </div>
       </div>
     </div>
    </main>
    <!--end page main-->
@endsection

