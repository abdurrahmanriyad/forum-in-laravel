
<footer class="footer_area text-center no_overflow"> <!--footer area begin-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="logo pull-left"><img src="img/logo.jpg" alt=""></div>
                <div class="footer_text">
                    <div class="text-left">&copy; copyright Fashion2Model</div>
                    <ul class="list-inline text-left right_bordered footer_menu">
                        <li><a href="#">about</a></li>
                        <li><a href="#">faq</a></li>
                        <li><a href="#">privacy</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> <!--footer area finished-->






<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{!! url('assets/js/vendor') !!}/jquery-1.11.2.min.js"><\/script>')</script>


{{--<script src="js/magnitic-popup.js"></script>--}}


{!! Html::script('assets/js/vendor/bootstrap.min.js') !!}
@yield('footer_js')
{!! Html::script('assets/js/main.js') !!}

@yield('footer_script')

</body>
</html>