<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Sistem Informasi Jurusan TI')</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (opsional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    @include('layouts.header')

    <main class="flex-shrink-0 text-center">
      <div class="container">
        @yield('content')
      </div>
    </main>

    @include('layouts.footer')

    <!-- Bootstrap JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>