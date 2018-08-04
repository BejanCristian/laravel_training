<html>
    <head>
        <title>Default</title>
    </head>
    <body>
        @include('templates.partials.nav')

        @yield('content')

        <footer>
        This is a footer
        </footer>



    </body>


    @yield('scripts')
</html>