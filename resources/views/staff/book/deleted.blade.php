@extends('layouts.master')

@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Book</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Book Deleted</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header py-3">
                <div class="row g-3">
                    <div class="col-lg-4 col-8 col-md-5">
                        <a href="{{ route('book.create') }}" class="btn btn-primary px-2">Create Book</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Price</th>
                                @if (auth()->user()->hasRole('admin'))
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset("storage/$book->image") }}" style="width:50px;height:50px;">
                                    </td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->writer }}</td>
                                    <td>RM {{ $book->price }}</td>
                                    {{-- <td>{{ $book->status_id }}</td> --}}
                                    @if (auth()->user()->hasRole('admin'))
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ route('book.restore', $book->id) }}" class="btn btn-danger"
                                                    onclick="return confirm ('Are you sure want to restore?');"
                                                    data-id="{{ $book->id }}" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" id="delete-confirm" title=""
                                                    data-bs-original-title="Restore" aria-label="Restore">Restore</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
