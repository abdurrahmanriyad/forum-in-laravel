<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,900,800,700,500' rel='stylesheet' type='text/css'>

    @yield('header_css')

    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/bootstrap-theme.min.css') !!}
    {!! Html::style('assets/css/normalize.css') !!}
    {!! Html::style('assets/css/main.css') !!}
    {!! Html::style('assets/css/responsive.css') !!}
    {!! Html::script('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') !!}


</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->



<header class="header_area no_overflow"><!--site main  header area begin-->
    <div class="container_fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="header_content">
                    <img src="{{ url('assets/img/top_bg.jpg') }}" alt="" class="img-responsive">
                    <div class="top_menu text-right">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-inline">
                                    <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="#"><i class="fa fa-key"></i> Login</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="site_title">
                        <h1>Fashion2Model</h1>
                        <p>Explore your creativity</p>
                    </div>
                    <div class="breadcrumb_bar">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="site_breadcrumb">
                                    <div class="pull-left breadcrumb_text"><a href="#"><i class="fa fa-home"></i></a> fashion2model > Home</div>
                                    <div class="pull-right">
                                        <ul class="social list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu_bar_area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <img src="{{ url('assets/img/logo.jpg') }}" alt="" class="logo pull-left">
                    <div class="site_info pull-left">
                        <h5>Fashion2Model</h5>
                        <p>Fasion to be smart</p>
                    </div>
                    <div class="search_bar pull-left">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                        </div><!-- /input-group -->
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="btn-group user_profile pull-right" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ url('assets/img/user.jpg') }}" alt="" class="img-circle">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                        </ul>
                    </div>

                    <div class="ask_question_btn pull-right">
                        <a href="http://localhost:8888/forum/askquestion.html"><button class="btn btn-success">Ask a Question</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

</header> <!--site main  header area finished-->
