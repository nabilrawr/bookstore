@extends('layouts.master')

@section('content')
    <!--start content-->
    <main class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Rent</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Rent Record</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <div class="row g-3">
                    <div class="col-lg-3 col-md-6 me-auto">
                        <div class="ms-auto position-relative">
                            <a href="{{ route('generate-excel-status-rents.complete-paid') }}" class="btn btn-success">
                                Excel</a>
                            <a href="{{ route('generate-pdf-status-rents.complete-paid') }}"
                                class="btn btn-danger">PDF</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Pickup Date</th>
                                <th>Pickup Time</th>
                                <th>Returned Date</th>
                                <th>Book Title</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rentals as $rental)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <?php
                                    $tempDate = explode(' ', $rental->start_date);
                                    $tempDate2 = explode(' ', $rental->end_date);
                                    ?>
                                    <td>{{ Carbon\Carbon::parse($tempDate[0])->format('d-m-Y') }}</td>
                                    <td>{{ $tempDate[1] }}</td>
                                    <td>{{ Carbon\Carbon::parse($tempDate2[0])->format('d-m-Y') }}</td>
                                    <td>{{ $rental->book->title }}</td>
                                    <td>{{ $rental->status->name }}</td>
                                    <td>
                                        @if ($rental->status->name == 'pending')
                                            <a class="btn btn-primary px-2 "
                                                href="{{ route('staff.status-rent', $rental) }}">Pickup</a>
                                        @elseif ($rental->status->name == 'pickup')
                                            <a class="btn btn-primary px-2 "
                                                href="{{ route('staff.status-rent', $rental) }}">Rent</a>
                                        @elseif ($rental->status->name == 'rent')
                                            <a class="btn btn-primary px-2 "
                                                href="{{ route('staff.status-rent', $rental) }}"
                                                onclick="complete();">Complete</a>
                                            <a class="btn btn-primary px-2 "
                                                href="{{ route('staff.status-rent-damage', $rental) }}">Damaged /
                                                Missing</a>
                                        @elseif ($rental->status->name == 'unpaid(late)')
                                            <a class="btn btn-primary px-2 "
                                                href="{{ route('staff.status-rent', $rental) }}">Paid(late)</a>
                                        @elseif ($rental->status->name == 'damaged/missing')
                                            <a class="btn btn-primary px-2 "
                                                href="{{ route('staff.status-rent', $rental) }}">Paid(Replace)</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($rental->status->name == 'complete' || $rental->status->name == 'complete paid(late)' || $rental->status->name == 'complete paid(replace)')
                                            <div class="col-lg-3 col-md-6 me-auto">
                                                <div class="ms-auto position-relative">

                                                    <a href="{{ route('staff.pdf-receipt-rental', $rental) }}"
                                                        class="btn btn-success">
                                                        <i class="fas fa-plus"></i>Generate Receipt</a>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
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
