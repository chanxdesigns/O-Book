@extends('layouts.master')
@section('body')
<div class="homepage">
    <div class="site-description">
        <h1 class="title-text">CURATED LIST OF <span>&lt;programming&gt;</span> <br>LANGUAGES RESOURCES</h1>
        <p class="short-description">Feed your mind with the right and actionable knowledge. 😻 </p>
        <form method="get" action="/search">
            <input type="text" name="q" placeholder="Search for PHP, AngularJS .etc" class="search-input">
        </form>
    </div>
    <div class="site-tags">
        <ul class="tags-list">
            <li class="tags"><a href="tags/articles">Articles</a></li>
            <li class="tags"><a href="tags/podcasts">Podcasts</a></li>
            <li class="tags"><a href="tags/videos">Videos</a></li>
            <li class="tags"><a href="tags/books">Books</a></li>
            <li class="tags"><a href="tags/mozilla-developer-network">MDN</a></li>
        </ul>
    </div>
    <div class="homepage-footer">
        <ul class="footer-links-list">
            <li><a href="" class="footer-links">About Us</a></li>
            <li><a href="" class="footer-links">Contact</a></li>
            <li><a href="" class="footer-links">Disclaimer</a></li>
        </ul>
        <p class="attribution">Made with 😍 by Chanx Singha</p>
    </div>
</div>
@endsection