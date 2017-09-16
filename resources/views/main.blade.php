@include('partials._head')

    <body>

        @include('partials._nav')
        
        <!-- container -->
        <main class="site-main">

        	@yield('content')

        </main>
        <!-- end of .container -->

        @include('partials._scripts')

    </body>

    @include('partials._footer')

</html>