<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        @include('admin.side')
        @include('admin.nav')
        @yield('content')
    </div>
    @include('admin.js')
</body>
</html>
