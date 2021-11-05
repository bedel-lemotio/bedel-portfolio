<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.head')
</head>
<body class="dark-theme" onload="javascript:makeCall()">
    @include('layouts.loading')
    @include('layouts.nav')
    @include('layouts.header')
    @section('main-content')
    @show
    @include('layouts.footer')
</body>
</html>
