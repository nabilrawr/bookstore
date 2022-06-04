@extends('borrower.layouts.master')

@section('content')
  <!--start content-->
  <main class="page-content">


    <div class="row">
      <div class="col-12 col-lg-8"></div>
        <div class="card shadow-sm border-0">
          <div class="card-body">
              <h5 class="mb-0">My Account</h5>
              <hr>
{{--
              @if ($message = Session::get('success'))
                    <div class="alert alert-primary card shadow">
                        <p>{{ $message }}</p>
                    </div>
                @endif --}}


              <div class="card shadow-none border">
                <div class="card-header">
                  <h6 class="mb-0">USER INFORMATION</h6>
                </div>
                <div class="card-body">
                <form class="row g-3"  method="post" action="{{ route('profile-update', $user->id) }}">
                    @csrf
                     <div class="col-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name )}}" required >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                     </div>
                     <div class="col-6">
                      <label class="form-label">IC Number</label>
                      <input type="text" class="form-control @error('ic') is-invalid @enderror" name="ic" value="{{ old('ic', $user->ic )}}" >
                            @error('ic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                      <div class="col-6">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email', $user->email )}}" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="col-6">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $user->phone )}}" >
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="exampleFormControlTextarea1" name="address" rows="4">{{ old('address', $user->address )}}</textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>

                      <div class="col-sm-3">
                        <a class="btn btn-secondary px-4" href="">Back</a>
                        <button type="submit" class="btn btn-success px-4">Update Profile</button>
                      </div>

                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

  </main>
<!--end page main-->

@endsection
