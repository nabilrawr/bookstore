@extends('layouts.master')

@section('content')

       <!--start content-->
       <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Insert</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Select2</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Insert Book category</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <div class="mb-3">
                                <label class="form-label">Book Name</label>
                                <input class="form-control mb-3" type="text" placeholder="Book Name" aria-label="default input example">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author</label>
                                <input class="form-control mb-3" type="text" placeholder="Author" aria-label="default input example">
                            </div>
                            <div class="mb-3 select2-sm">
                                <label class="form-label">Book Description</label>
                                <textarea class="form-control" rows="4" cols="4"></textarea>

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Book categories</label><br>
                                <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                                    <option value="United States" selected>United States</option>
                                    <option value="United Kingdom" selected>United Kingdom</option>
                                    <option value="Afghanistan" selected>Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Condition</label>
                                <select class="form-select" aria-label="Default select example">
									<option selected>Book Condition</option>
									<option value="1">New</option>
									<option value="2">Used</option>
								</select>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label">Upload Book Cover Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary px-5">Back</button>
                                <button type="button" class="btn btn-primary px-5">Submit</button>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </main>
<!--end page main-->

@endsection
