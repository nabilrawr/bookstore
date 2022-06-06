
<html>
    <head>
        @include('layouts.header')
        @include('layouts.sidebar')
        @include('sweetalert::alert')
    </head>

    <body>
        <div class="main-class">
                @yield('content')
        </div>

    </body>
    @include('layouts.footer')

</html>
