@extends('layouts.master')
@section('title', 'O-Book: Results for - '.\Illuminate\Support\Facades\Request::query('q'))
@section('body')
    <div class="resources-page">
        <div class="left-nav-languages">
            <h3 class="site-title">O-Book</h3>
            <input name="left-nav-search" id="left-nav-search" type="text">
            <ul class="languages-list">
                @foreach($languages as $langid => $language)
                    <li><a class="language" id="{{$langid}}"><div class="logo-wrapper"><img class="logo" src="{{$language["logo"]}}"></div> <span>{{$language["name"]}}</span></a></li>
                    @endforeach
            </ul>
        </div>
        <div class="main-body">
            <div class="language-desc">
                <img class="language-logo" src="https://cdn.worldvectorlogo.com/logos/angular-icon.svg">
                <h3 class="language-header">Curated <span class="language-title">AngularJS</span> Resources</h3>
            </div>
            <div class="posts">
                <h3 class="post-title">Angular JS Mastering With Webapps</h3>
                <div class="post-meta">
                    <div class="author">By <span class="name">Chanx Singha</span></div>
                    <div class="price">Price: <span class="amnt">Free</span></div>
                    <ul class="post-tags-list">
                        <li class="post-tags"><a>Javascript</a></li>
                        <li class="post-tags"><a>AngularJS</a></li>
                    </ul>
                    <p class="post-details">Now, no matter how big your browser window is your divs will take up 80% of the right side of the screen, and 20% of the left side of the screen. NOTE This will depend on a good reset.css as the width of an element is by default does not include any padding, margin or border space. If you add a padding or margin or border, the above method will break. To get around that there are a few options. You can use % values for your padding and margins but that breaks if you add a border.</p>
                </div>
                <p></p>
            </div>
            <div class="posts">
                <h3 class="post-title">Angular JS Mastering With Webapps</h3>
                <div class="post-meta">
                    <div class="author">By <span class="name">Chanx Singha</span></div>
                    <div class="price">Price: <span class="amnt">Free</span></div>
                    <ul class="post-tags-list">
                        <li class="post-tags"><a>Javascript</a></li>
                        <li class="post-tags"><a>AngularJS</a></li>
                    </ul>
                    <p class="post-details">Now, no matter how big your browser window is your divs will take up 80% of the right side of the screen, and 20% of the left side of the screen. NOTE This will depend on a good reset.css as the width of an element is by default does not include any padding, margin or border space. If you add a padding or margin or border, the above method will break. To get around that there are a few options. You can use % values for your padding and margins but that breaks if you add a border.</p>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    @endsection