@include('layouts.header')
@include('layouts.sidebar')
{{-- @include('admin.layouts.content') --}}
{{-- <main class="page-content"> --}}

    @yield('content')


{{-- </main> --}}
@include('layouts.footer')
