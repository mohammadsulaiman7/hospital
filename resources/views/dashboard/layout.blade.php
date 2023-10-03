<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.includes.css')
    <style>
        color:white;
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('dashboard.includes.side')
        @include('dashboard.includes.nav')
        @yield('content')
    </div>
    @include('dashboard.includes.js')
</body>

</html>
