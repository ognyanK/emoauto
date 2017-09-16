@include('partials._head')

    <body>

        @include('partials._nav')
        
        <!-- container -->
        <div class="container">

        	@yield('content')

        </div>
        <!-- end of .container -->

        @include('partials._scripts')

    </body>

    @include('partials._footer')

</html>