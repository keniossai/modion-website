@extends('includes.layouts')
@section('content')

<div class="page-title">
    <div class="container">
        <div class="padding-tb-180px">
            <h1 class="title">{{$post->title}}</h1>
            <div class="post-meta align-items-center text-center">
                <figure class="author-figure mb-0 mr-3 d-inline-block">
                    <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('/img/user.png') }} @endif" alt="Image" class="img-fluid">
                </figure>
                <span class="d-inline-block mt-1">By {{ $post->user->name }}</span>
                <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }}</span>
            </div>
        </div>
    </div>
</div>

<section class="site-section py-lg">
    <div class="container mt-5">
        <div class="row blog-entries element-animate mt-5">

            
            <div class="col-md-12 col-lg-8 main-content">
                <div class="thum-img">
                    <a href="#"><img src="{{$post->image}}" alt=""></a>
                </div>
                <h1>{{$post->title}}</h1>
                <div class="post-content-body mt-4">
                    {!! $post->description !!}
                </div>
                <div class="pt-5">
                    <p>
                        Categories: <a href="#">{{ $post->category->name }}</a> 
                        @if($post->tags()->count() > 0)
                        Tags: 
                            @foreach($post->tags as $tag)
                                <a href="{{ route('pages.tag', ['slug' => $tag->slug]) }}">#{{ $tag->name }}</a>, 
                            @endforeach
                        @endif
                    </p>
                </div>
                <div class="pt-5">
                    <a href="{{ route('pages.post', ['slug' => $post->slug]) }}#disqus_thread">Comments</a>
                    
                    <div id="disqus_thread"></div>


                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-danger">
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('website/images/user.png') }} @endif" alt="Image Placeholder"
                            class="img-fluid mb-5">
                        <div class="bio-body">
                            <h2>{{ $post->user->name }}</h2>
                            <p class="mb-4">{{ $post->user->description }}</p>
                        </div>
                    </div>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">Popular Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach($posts as $post)
                            <li>
                                <a href="{{ route('pages.post', ['slug' => $post->slug]) }}">
                                    <img src="{{ $post->image }}" alt="Image placeholder"
                                        class="mr-4">
                                    <div class="text">
                                        <h4> {{ $post->title }} </h4>
                                        <div class="post-meta">
                                            <span class="mr-2"> {{ $post->created_at->format('M d, Y')}} </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

        </div>
    </div>
</section>



<br>
<br>
<br>
@endsection

@section('script')
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://laravel-blog-tutorial-series.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//laravel-blog-tutorial-series.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection          