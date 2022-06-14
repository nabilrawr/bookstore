@extends('layouts.master')

@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tables of User</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto"> --}}
            {{-- <div class="btn-group"> --}}
            {{-- <div class="col-lg-9 col-9 col-md-9"> --}}
            {{-- <a href="{{ route('admin.profile-add') }}" class="btn btn-primary px-8">Create User</a> --}}
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">User List</h5>
                    {{-- <form class="ms-auto position-relative"> --}}
                    {{-- <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div> --}}
                    {{-- <input class="form-control ps-5" type="text" placeholder="search"> --}}
                    {{-- </form> --}}
                </div>
                <div class="table-responsive mt-3">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-secondary">
                            <tr>
                                <th>Bil.</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        @foreach ($user->getRoleNames() as $item)
                                            {{ $item }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            {{-- <a href="{{ route('admin.profile-show', $user->id) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a> --}}
                                            <a href="{{ route('admin.profile-edit', $user->id) }}" class="text-warning"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i
                                                    class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('admin.delete-user', $user) }}" method="POST">
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

    </main>
    <!--end page main-->
@endsection
