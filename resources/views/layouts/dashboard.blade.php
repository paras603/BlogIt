<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.dashboard.head')
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-lg-2">
                @include('includes.dashboard.sidebar')
            </div>
            <div class="col-lg-10" style="border-left: 1px solid rgba(136, 131, 131, 0.5); padding-left:0;">
                <header>
                @include('includes.dashboard.header')
                </header>
                <div class="">
                    @yield('content')
                </div>
                <footer>
                {{-- @include('includes.dashboard.footer') --}}
                </footer>
            </div>
        </div>
    </div>

@include('includes.dashboard.foot')


</body>
</html>