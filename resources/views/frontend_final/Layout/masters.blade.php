<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @include('frontend_final.Layout.header')

    <div class="content">
        @yield('content')
    </div>
    
    @include('frontend_final.Layout.footer')
    
</body>
</html>



