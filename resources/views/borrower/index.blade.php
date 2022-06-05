@extends('layouts.master')

@section('content')
  <!--start content-->
  <main class="page-content">


    <div class="card">
        <div class="card-header py-3">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 me-auto">
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                class="bi bi-search"></i></div>
                        <input class="form-control ps-5" type="text" placeholder="Search Booking">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Pickup Date</th>
                            <th>Pickup Time</th>
                            <th>Book Title</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <?php
                                     $tempDate = explode(' ',$booking->start_date);
                                 ?>
                                <td>{{ $tempDate[0] }}</td>
                                <td>{{ $tempDate[1] }}</td>
                                <td>{{ $booking->title }}</td>
                                <td>{{ $booking->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  </main>
<!--end page main-->

@endsection
