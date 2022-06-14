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
                            <li class="breadcrumb-item active" aria-current="page">Category Deleted</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-header py-3">
                    <div class="row g-3">
                        <div class="col-lg-4 col-8 col-md-5">
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
                                                    <a href="{{ route('category.restore', $category->id) }}"
                                                        class="btn btn-danger"
                                                        onclick="return confirm ('Are you sure want to restore?');"
                                                        data-id="{{ $category->id }}" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" id="delete-confirm" title=""
                                                        data-bs-original-title="Restore" aria-label="Restore">Restore</a>
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
