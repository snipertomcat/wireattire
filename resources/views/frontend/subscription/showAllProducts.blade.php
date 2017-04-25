@extends('frontend.layouts.app')

@section('title', app_name() . ' : Subscriptions');

@section('before-styles')
    <link rel="stylesheet" href="{{ elixir("css/thumbnail-gallery.css") }}" />
@endsection

@section('before-scripts')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
@endsection

@section('content')

    <div class="row" style="padding-bottom: 20px;">

        @component('frontend.includes.navbar')
        @slot('progress_style')
        width: 30%
        @endslot
        @slot('step')
        {{ $step }}
        @endslot
        @slot('icon')
        <img src="<?php echo asset("storage/icon-tshirt.png")?>" height="100px" width="100px" style="margin-left:5px;"/>
        @endslot
        @slot('package_name')
        Get Wired
        @endslot
        @slot('category_id')
        {{ $category_id }}
        @endslot
        @slot('package_id')
        {{ $package_id }}
        @endslot
        @endcomponent
    </div>
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
            @foreach($thumbs as $thumb)
                    <div class="col-lg-2 col-md-4 col-xs-2 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src='{{ asset("storage/thumbnails/$thumb") }}' alt="" />
                        </a>
                    </div>
            @endforeach
        </div>


        <hr>

        <!-- Footer -->


    </div>
    <!-- /.container -->

        <!-- Navigation -->
    {{--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>--}}

    <!-- Half Page Image Background Carousel Header -->
{{--
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://modalyst.co/static/site_media/cache/47/ac/47ac371e33cec3252f513f6259f6b0c7.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://modalyst.co/static/site_media/cache/3a/67/3a6734aefb91cb29ae3e7d7b6828308f.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>


    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Half Slider by Start Bootstrap</h1>
                <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the <code>half-slider.css</code>file.</p>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
    --}}


@endsection


@section('after-scripts')
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>,
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

@endsection