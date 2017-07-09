@include('includes.header')


<section class="content_area no_overflow"> <!--site content area begin-->
    <div class="container">
        @yield('highlighted-filter')
        <div class="row">
            <div class="col-md-8">
                @yield('main-content')
            </div>

            @include('includes.sidebar')

        </div>

    </div>
</section> <!--site content area finished-->



@include('includes.footer')
