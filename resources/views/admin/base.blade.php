<!DOCTYPE html>
<html>
<head>
    @include('admin.includes._head')
    <title>
        @yield('title') Real State
    </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body id="app">
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        @include('admin.includes._loader')
        @include('admin.includes._header')

        @include('admin.includes._sidebar')
        <div class="page-wrapper">
        @include('admin.includes._notification')
            @yield('content')
        </div>
        @include('admin.includes._footer')
        @include('admin.includes._scripts')
    </div>
</body>
</html>
