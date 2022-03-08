<!DOCTYPE html>
<html lang="en-US">


<!-- home-100:13-->
<head>
    <title>Modion Communication: Nigeria's leading PR and Marketing Communications Agency</title>
    <meta name="author" content="Modion Coms">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Marketing Communications, Public Relations, Experiential Marketing, Digital Marketing, Insights, PR Agencies in Nigeria">
    <meta name="description" content="Nigeria's leading public relations and marketing communications agency">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <!-- owl Carousel /assets -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- hover anmation -->
    <link rel="stylesheet" href="{{asset('assets/css/hover-min.css')}}">
    <!-- flag icon -->
    <link rel="stylesheet" href="{{asset('assets/css/flag-icon.min.css')}}">
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- main slider -->
    {{--  <link rel="stylesheet" href="/assets/css/mainslide.css">  --}}
    <!-- elegant icon -->
    <link rel="stylesheet" href="{{asset('assets/css/elegant_icon.css')}}">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rslider/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rslider/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/resource.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
</head>

<body>
    <header>
        <div id="fixed-header-dark" class="header-output fixed-header">
            <div class="header-output">
                <div class="container header-in">

                    <!-- Up Head -->
                    <!-- // Up Head -->

                    <div class="position-relative">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <a id="logo" href="{{route('home')}}" class="d-inline-block margin-tb-15px"><img style='width: 150px;' src="/assets/img/white-logo.png" alt=""></a>
                                <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="col-lg-7 col-md-12 position-inherit">
                                <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px white-link dropdown-dark">
                                    <li class="has-dropdown"><a href="{{route('home')}}">Home</a></li>
                                    <li class="has-dropdown"><a href="{{route('pages.about')}}">Who We Are</a></li>
                                    <li class="has-dropdown"><a href="{{route('pages.resource')}}">Resources</a></li>
                                    <li class="has-dropdown"><a href="{{route('pages.verticals')}}">Our Verticals</a></li>
                                    <li class="has-dropdown"><a href="{{route('pages.blog')}}">Blog</a></li>
                                    <li class="has-dropdown"><a href="{{route('pages.contact')}}">Contact Us</a></li>

                                </ul>

                                {{--  Search icon here  --}}

                            </div>
                            @if(Auth::user())
                                <figure class="author-figure mb-0 mt-3 float-left"><img style="width: 50px;"
                                        src="{{ asset('img/user.png') }}"
                                        alt="Image" class="img-fluid"></figure>
                            @else
                            <div class="col-lg-2 col-md-12  d-none d-lg-block">
                                <a href="{{route('login')}}" class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                    <i class="fa fa-user margin-right-8px"></i>  LOGIN
                                </a>
                            </div>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{--  End of Header  --}}

    <div class="page-title">
        <div class="container">
            <div class="padding-tb-180px">
                <h1>Latest News</h1>
              </div>
        </div>
    </div>
    
    <div class="site-section">
        <div class="container mt-5">
            <div class="row mt-5">
                @foreach($recentPosts as $post)
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="{{ route('pages.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}"
                                alt="Image" class="img-fluid rounded"></a>
                        <div class="excerpt">
                            <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name }}</span>
                            <h2><a href="{{ route('pages.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left"><img
                                        src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('img/user.png') }} @endif"
                                        alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="#">{{ $post->user->name }}</a></span>
                                <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }} </span>
                            </div>
                            <p> {{ Str::limit(strip_tags($post->description), 100) }} </p>
                            <p><a class="nile-bottom sm" href="{{ route('pages.post', ['slug' => $post->slug]) }}">Read More</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row text-center pt-5 border-top">
                {{ $recentPosts->links() }}
                {{-- <div class="col-md-12">
              <div class="custom-pagination">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>...</span>
                <a href="#">15</a>
              </div>
            </div>
          </div> --}}
            </div>
        </div>
    </div>
    <br>
    <br>


    {{--  Footer  --}}

    <footer class="layout-dark">
        <div class="container padding-tb-100px">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="about-us sm-mb-45px">
                        <div class="logo-footer margin-bottom-35px">
                            {{--  <a href="#"><img src="/assets/img/modi" alt=""></a>  --}}
                        </div>
                        <div class="text margin-bottom-35px">
                            Modion Communications is focused on providing public relations, brand development, marketing activations, media engagement, crisis communications, financial PR, investors’ relation Support, event management, digital marketing and media publishing.
                        </div>
                        <a href="/about" class="nile-bottom sm">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget widget_nav_menu sm-mb-45px">
                        <h2 class="title">Our Services</h2>
                        <ul class="footer-menu">
                            <li><a href="#">Public Relation </a></li>
                            <li><a href="#">Event Marketing </a></li>
                            <li><a href="#">Digital Marketing </a></li>
                            <li><a href="#">Brand Development </a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget widget_nav_menu sm-mb-45px">
                        <h2 class="title">Pages</h2>
                        <ul class="footer-menu">
                            <li><a href="#">Home </a></li>
                            <li><a href="#">About </a></li>
                            <li><a href="#">What We Do </a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget">
                        <div class="margin-bottom-60px">
                            <div class="contact-info opacity-9">
                                <div class="icon"><span class="icon_pin_alt"></span></div>
                                <div class="text">
                                    <span class="">38A, Okunola Aina Street, off Sunmola Street, Mende, <br>Maryland.</span>
                                </div>
                            </div>
                        </div>
                        <div class="call_center">
                            <div class="contact-info opacity-9">
                                <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                <div class="text">
                                    <span class="">0803 226 2350 <br>0902 222 2226</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container padding-tb-50px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text text-lg-left text-center sm-mb-15px"><a target="_blank" href="">© 2021 Modion Communications.</a> </div>
                    </div>
                    <div class="col-lg-6">
                        <!--  Social -->
                        <ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/modioncomms/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="https://www.youtube.com/channel/UCBW_VSXvJMse_ChS9bhDDmg"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="https://ng.linkedin.com/company/modion-communications"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="https://twitter.com/@ModionComms"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="instagram" href="https://www.instagram.com/modioncommunications/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                </div>
            </div>
        </div>
    </footer>


<!-- jquery library  -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script> 
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
<script src="{{asset('assets/js/nile-slider.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<script src="{{asset('assets/js/jqueryfilter.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.1/ckeditor.js" integrity="sha512-2nFxKVmFuBhAR45DBnAANBjtxzf7z0m6wRU7NOquxibA6efrQpUtdjFT4wzqewqTI3/cCNbBzJNUtu1NxjFiKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- REVOLUTION JS FILES -->
<script src="/assets/rslider/js/jquery.themepunch.tools.min.js"></script>
<script src="/assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/js/YouTubePopUp.jquery.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script>
    CKEDITOR.replace('textContent');
</script>

</body>


<!-- home-100:30-->
</html>

