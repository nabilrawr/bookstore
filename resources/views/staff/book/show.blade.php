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
                        <li class="breadcrumb-item active" aria-current="page">View</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">View Book</h5>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset("storage/$book->image") }}" style="width:30%;height:30%;">
                            </div>
                            <div class="row mb-3 mt-3">
                                <label for="title" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    {{ $book->title }}
                                    {{-- <input type="text" class="form-control" value="{{ $book->title }}" readonly> --}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="writer" class="col-sm-3 col-form-label">Writer Name</label>
                                <div class="col-sm-9">
                                    {{ $book->writer }}
                                    {{-- <input type="text" class="form-control" value="{{ $book->writer }}" readonly> --}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9 text-justify">
                                    {{ $book->description }}
                                    {{-- <textarea class="form-control" rows="7" readonly>{{ $book->description }}</textarea> --}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <ul>
                                        @foreach ($bookCategories as $bookCategory)
                                            <li>{{ $bookCategory->category->name }}</li>
                                        @endforeach
                                    </ul>
                                    {{-- <input type="text" class="form-control" value="{{ $bookCategory->category->name }}" readonly> --}}

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    {{ $book->price }}
                                    {{-- <input type="text" class="form-control" value="{{ $book->price }}" readonly> --}}
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <a href="{{ route('book.index') }}" class="btn btn-primary px-5">Back</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

    </main>
@endsection
