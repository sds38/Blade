<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<main roles="main">
    @yield('content')
</main>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
