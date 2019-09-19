<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
<div id="app">
    @include('includes.header')
    <div id="wrapper">
        <!-- main content -->
        <div id="content-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>       
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>