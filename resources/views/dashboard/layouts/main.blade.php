@include('dashboard.includes.header')

<section class="admin_content_area no_overflow"> <!--site content area begin-->
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                @include('dashboard.includes.sidebar')
            </div>
            <div class="col-md-9">
                <section class="admin_content">
                    @yield('main_content')
                </section>
            </div>

        </div>

    </div>
</section> <!--site content area finished-->

@include('dashboard.includes.footer')