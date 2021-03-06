<!DOCTYPE html>
<html lang="en">

    @include('partials._head')

    <body>

        @include('partials._nav')

        <div class="container">

            @yield('content')

            @include('partials._footer')
            
        </div><!-- end od .container -->

        @include('partials._javascripts')

        @yield('scripts')

  </body>
</html>