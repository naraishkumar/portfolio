<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Basic favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon.svg') }}">
    <title>@yield('title', 'Naraish Kumar')</title>

    {{-- Vite CSS & JS --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body data-page="@yield('page')">


    <main>
        @yield('content')
    </main>


</body>

</html>
