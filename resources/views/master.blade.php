<!-- Master Blade template : /resources/views/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Listr: Personal Assistant</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

</head>
<body>

    <header class="page-header">
        @yield('page_sections.master_header')
        {{-- @include('mini-views.logo') --}}
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ elixir('js/app.js') }}"></script>

</body>
</html>
