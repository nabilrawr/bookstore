@extends('auth.layouts.master')

@section('content')

<br><br>
<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
     <div class="container-fluid">
       <div class="authentication-card">
         <div class="card shadow rounded-0 overflow-hidden">
           <div class="row g-0">
             <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
               <img src="{{asset('template/assets/images/error/login-img.jpg')}}" class="img-fluid" alt="">
             </div>
             <div class="col-lg-6">
               <div class="card-body p-4 p-sm-5">
                <h5 class="card-title">Sign In</h5>
                <p class="card-text mb-5">Start Reading for free today</p>
                <hr>

                 <form method="POST" class="form-body" action="{{ route('login') }}">
                    @csrf
                     <div class="row g-3">
                       <div class="col-12">
                         <label for="inputEmailAddress" class="form-label">Email Address</label>
                         <div class="ms-auto position-relative">
                           <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                       </div>
                       <div class="col-12">
                         <label for="inputChoosePassword" class="form-label">Enter Password</label>
                         <div class="ms-auto position-relative">
                           <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                           @error('password')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>
                       </div>
                       <div class="col-6">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox"  id="flexSwitchCheckChecked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                           <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                         </div>
                       </div>
                       <div class="col-6 text-end">	<a  href="{{ route('password.request') }}">Forgot Password ?</a>
                       </div>
                       <div class="col-12">
                         <div class="d-grid">
                           <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                         </div>
                       </div>
                       <div class="col-12">
                         <p class="mb-0">Don't have an account yet? <a  href="{{ route('register') }}">Sign up here</a></p>
                       </div>
                     </div>
                 </form>
              </div>
             </div>
           </div>
         </div>
       </div>
     </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->
@endsection
