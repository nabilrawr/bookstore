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

              <div class="card shadow-none border">
                <div class="card-header">
                  <h6 class="mb-0">USER INFORMATION</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">Johnatan Smith</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">IC Number</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">990131045045</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">example@example.com</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">Phone Number</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $borrower->phone }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $borrower->address }}</p>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-sm-3">
                <a class="btn btn-primary px-4" href="{{ route('borrower.profile-edit', $borrower) }}">Edit Profile</a>
              </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

  </main>
<!--end page main-->

@endsection
