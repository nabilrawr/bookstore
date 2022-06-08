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
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                <h5 class="mb-0">Edit Book</h5>
                            </div>
                            <hr />
                            <form method="post" action="{{ route('book.update', $book) }}" class="mb-5"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Enter Book Title"
                                            name="title" value="{{ old('title', $book->title) }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="writer" class="col-sm-3 col-form-label">Writer Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Enter Writer Name"
                                            name="writer" value="{{ old('writer', $book->writer) }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="description" rows="5" placeholder="Enter Description" name="description" required>{{ old('description', $book->description) }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="col-sm-3 multiple-select @error('category') is-invalid @enderror"
                                            data-placeholder="Choose anything" multiple="multiple" name="category[]"
                                            id="category">

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                     {{ in_array($category->id,$genres) ? 'selected' : ''}} >
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>



                                        {{-- <select name="options[]" id="options" class="form-control" multiple>
                                            @foreach ($settings->includes->get('optionList') as $option)
                                                <option value="{{ $option->id }}" {{ (collect(old('options'))->contains($option->id)) ? 'selected':'' }}>{{ $option->name }}</option>
                                            @endforeach
                                        </select> --}}


                                        @if ($errors->has('category'))
                                            <span id="ordertype-error" class="error text-danger"
                                                for="input-ordertype">{{ $errors->first('category') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3"> <span class="input-group-text">RM</span>
                                            <input type="number" class="form-control" placeholder="0.00" required
                                                name="price" min="0" value="{{ old('price', $book->price) }}" step="0.01"
                                                title="Currency" pattern="^\d+(?:\.\d{1,2})?$">
                                            {{-- <input type="text" class="form-control" name="price" placeholder="0.00" aria-label="RM amount (with dot and two decimal places)" value="{{ old('price') }}" required> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <a href="{{ route('book.index') }}" class="btn btn-secondary px-5">Back</a>
                                        <button type="submit" class="btn btn-primary px-5">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

    </main>
@endsection
