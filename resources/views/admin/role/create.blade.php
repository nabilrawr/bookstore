@extends('layouts.master')

@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Assign Role</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                                <h5 class="mb-0">Assign Role <i class="bi bi-tools"></i></h5>
                            </div>
                            <hr />
                            <form method="post" action="{{ route('admin.store-role') }}" class="mb-5">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Staff Name</label>
                                    <div class="col-sm-9">
                                        <select name="user_id"  class="form-control">
                                            <option value="" selected>Open this select menu</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('user_id'))
                                            <span id="ordertype-error" class="error text-danger" for="input-ordertype">{{ $errors->first('user_id') }}</span>
                                            @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        <select name="role_id"  class="form-control">
                                            <option value="" selected>Open this select menu</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('role_id'))
                                        <span id="ordertype-error" class="error text-danger" for="input-ordertype">{{ $errors->first('role_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Assign Role</button>
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
