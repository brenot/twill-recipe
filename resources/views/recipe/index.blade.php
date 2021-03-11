<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


@include('partials.navigation')

{{--{{dd($recipes)}}--}}
{{--{{ $media->toCmsArray()['original'] }}--}}
<!-- Begin Site Title
================================================== -->
<div class="container">
    <div class="mainheading">
        <h1 class="sitetitle">Mediumish Chupa</h1>
        <p class="lead">
            Bootstrap theme, medium style, simply perfect for bloggers
        </p>
    </div>
    <!-- End Site Title
    ================================================== -->

    <!-- Begin Featured
    ================================================== -->
    <section class="featured-posts">
        <div class="section-title">
            <h2><span>Featured</span></h2>
        </div>
        <div class="card-columns listfeaturedtag">

            @forEach($recipes as $recipe)
                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="{{route('recipes.show', ['slug'=> $recipe->slug])}}">
                                <div class="thumbnail" style="background-image:url({{$recipe->medias[0]->toCmsArray()['original']}});">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="{{route('recipes.show', ['slug'=> $recipe->slug])}}">{{$recipe->title}}</a></h2>
                                <h4 class="card-text">{!! $recipe->description !!}</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                                    <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
                                    </span>
                                        <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Steve</a></span><br/>
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
                                    </span>
                                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
            @endForEach

        </div>
    </section>
    <!-- End List Posts
    ================================================== -->

    <!-- Begin Footer
    ================================================== -->
    <div class="footer">
        <p class="pull-left">
            Copyright &copy; 2017 Your Website Name
        </p>
        <p class="pull-right">
            Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
        </p>
        <div class="clearfix">
        </div>
    </div>
    <!-- End Footer
    ================================================== -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>


</html>
