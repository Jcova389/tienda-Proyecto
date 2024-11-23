<!DOCTYPE html>
<html lang="es">
<head>
    @include('head')
    @yield ('styles')

</head>

<body>
    @include('web.menu')
    <div class="super_container">
        @include('web.top_head')
        @yield('content')
    </div>
    @include('web.footer')
    @include('web.scripts')

</body>

</html>
