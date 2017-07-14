@extends('layouts.main')

@section('title', 'Home - Forum')

@section('sortcuts')
    <div class="content_type_menu_area"><!-- content view type menu area begin -->
        <div class="container">
            <ul class="list-inline text-center right_bordered">
                <li><a href="#">Questions</a></li>
                <li><a href="tags.html">Tags</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Unanswered</a></li>
            </ul>
        </div>
    </div><!-- content view type menu area finish -->
@endsection

@section('highlighted-filter')
    <div class="row">
        <div class="col-md-8">
            <div class="question_filter_area">
                <ul class="list-inline">
                    <li><a href="#">active</a></li>
                    <li><a href="#">newest</a></li>
                    <li><a href="#">most viewed</a></li>
                    <li><a href="#">unanswered</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <section class="question_part_area"> <!--question part begin-->
        <article class="question_area">
            <div class="question_content pull-left">
                <div class="userinfo pull-left">
                    <div class="avatar">
                        <img src="{{ url('assets/img/user.jpg') }}" alt="" class="img-circle">
                    </div>
                </div>
                <div class="posttext pull-left">
                    <h2><a href="single-question.html">What Instagram Ads Will Look Like</a></h2>
                    <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="question_info pull-left">
                <div class="comments"><i class="fa fa-comments"></i> 89</div>
                <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                <div class="time"><i class="fa fa-clock-o"></i> 30 days</div>
            </div>
            <div class="clearfix"></div>
        </article>

        <article class="question_area">
            <div class="question_content pull-left">
                <div class="userinfo pull-left">
                    <div class="avatar">
                        <img src="{{ url('assets/img/user.jpg') }}" alt="" class="img-circle">
                    </div>
                </div>
                <div class="posttext pull-left">
                    <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                    <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="question_info pull-left">
                <div class="comments"><i class="fa fa-comments"></i> 89</div>
                <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                <div class="time"><i class="fa fa-clock-o"></i> 30 days</div>
            </div>
            <div class="clearfix"></div>
        </article>

        <article class="question_area">
            <div class="question_content pull-left">
                <div class="userinfo pull-left">
                    <div class="avatar">
                        <img src="{{ url('assets/img/user.jpg') }}" alt="" class="img-circle">
                    </div>
                </div>
                <div class="posttext pull-left">
                    <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                    <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="question_info pull-left">
                <div class="comments"><i class="fa fa-comments"></i> 89</div>
                <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                <div class="time"><i class="fa fa-clock-o"></i> 30 days</div>
            </div>
            <div class="clearfix"></div>
        </article>

    </section> <!--question part finished-->
    <div class="pagination_bottom"> <!-- pagination begin -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#" class="active">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div> <!-- pagination finish -->
@endsection