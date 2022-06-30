<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.front.head')
</head>
<body>
  
    <div class="">
        <header class="">
            @include('includes.front.header')
        </header>

        <div class="">
            @yield('content')
        </div>

        <footer class=" bg-light">
            @include('includes.front.footer')
        </footer>
    </div>

@include('includes.front.foot')

</body>
</html>