@include('admin.layouts.header')
@include('admin.layouts.sidebar')
{{-- @include('admin.layouts.content') --}}
{{-- <main class="page-content"> --}}
@yield('content')
{{-- </main> --}}
@include('admin.layouts.footer')
