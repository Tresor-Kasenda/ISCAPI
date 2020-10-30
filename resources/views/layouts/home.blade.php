<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISC Admin| @yield('title') </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.style')
</head>
<body>
    @include('layouts.partials.sidebar')
    <div id="right-panel" class="right-panel">
        @include('layouts.partials.header')
        @yield('backend')
        <div class="clearfix"></div>
        @include('layouts.partials.footer')
    </div>
    @include('layouts.partials.manifest')
</body>
</html>

