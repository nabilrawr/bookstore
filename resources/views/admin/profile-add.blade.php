@extends('layouts.master')

@section('content')


       <!--start content-->
       <main class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center">
          <div class="breadcrumb-title pe-3 text-white">User Profile</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb"></nav>
          </div>
        </div>
        <!--end breadcrumb-->

        <div class="profile-cover bg-dark"></div>

        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
              <div class="card-body">
                  <h5 class="mb-0">My Account</h5>
                  <hr>
                  <div class="card shadow-none border">
                    <div class="card-header">
                      <h6 class="mb-0">USER INFORMATION</h6>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('admin.store') }}" method="post">
                            @csrf
                         <div class="col-6">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')}}" required >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                         </div>
                         <div class="col-6">
                          <label class="form-label">Email address</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email')}}" >
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                          <div class="col-6">
                            <label class="form-label">IC Number</label>
                            <input type="text" class="form-control @error('ic') is-invalid @enderror" name="ic" value="{{ old('ic' )}}" >
                            @error('ic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone' )}}" >
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                            <div class="col-6">
                                <label class="form-label">Role</label>
                                <input type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role' )}}" >
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" id="exampleFormControlTextarea1" name="address" rows="4">{{ old('address')}}</textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="text-start">
                            <button type="submit" class="btn btn-primary px-4">Create Account</button>
                          </div>
                      </form>
                    </div>
                  </div>

              </div>
            </div>
          </div>

        <!--end row-->
      </main>
   <!--end page main-->

@endsection
