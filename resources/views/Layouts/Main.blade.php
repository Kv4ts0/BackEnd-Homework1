<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title> <!-- Dynamic product 1 -->
</head>
<body style="background-color: {{ $Theme }} ; color: {{ $textcolor }} ">
    <!-- Header -->
    @include('Components.Content')
    
    <!-- Dynamic product 2 -->
    @yield('content')
</body>

</html>