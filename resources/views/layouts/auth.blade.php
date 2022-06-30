<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.auth.head')
</head>
<body class="bg-light">
    
    <div class="">
        @yield('content')
    </div>

    <footer class="">
        @include('includes.auth.footer')
    </footer>

    @include('includes.auth.foot')
</body>
</html>