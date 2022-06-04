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
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
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
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                            <input class="form-control ps-5" type="text" placeholder="Search Payment">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <a href="{{ route('book.create') }}" class="btn btn-primary px-2">Create Book</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Title</th>
                            <th>Writer Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$book->image}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->status_id}}</td>
                                <td>{{$book->price}}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        {{--                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>--}}
                                        <a href="{{ route('book.edit',$book) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit Category" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <form action="{{ route('book.destroy',$book) }}" method="POST">
                                            @csrf
                                            <button type="submit" onclick="return confirm ('Are you sure want to delete?');" class="text-danger border-0 bx-outline-none btn-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                <td><img src="{{ asset("storage/$book->image") }}" style="width:50px;height:50px;"></td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->writer }}</td>
                                <td>{{ $book->description }}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


@endsection
