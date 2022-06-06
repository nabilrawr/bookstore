@extends('layouts.master')

@section('content')
    <!--start wrapper-->
    <div class="wrapper">
        <!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Book Category</div>
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
                        <div class="col-lg-2 col-6 col-md-3">
                            <a href="{{ route('category.create') }}" class="btn btn-primary px-2">Create Category</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Category Name</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">

                                                    <a href="{{ route('category.edit', $category) }}"
                                                        class="text-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title=""
                                                        data-bs-original-title="Edit Category" aria-label="Edit"><i
                                                            class="bi bi-pencil-fill"></i></a>
                                                    <form action="{{ route('category.destroy', $category) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            onclick="return confirm ('Are you sure want to delete?');"
                                                            class="text-danger border-0 bx-outline-none btn-light"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                            data-bs-original-title="Delete" aria-label="Delete"><i
                                                                class="bi bi-trash-fill"></i></button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
    <!--end wrapper-->

@endsection
