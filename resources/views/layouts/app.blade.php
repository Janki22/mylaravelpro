<!doctype html>
<html lang="en">
<head>
    @include('partials.header')
</head>
<body class="bg-light">

    <main class="container py-5">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
