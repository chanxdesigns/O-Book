<div class="left-nav-languages">
    <h3 class="site-title">O-Book</h3>
    <form method="get" action="/search">
        <input id="left-nav-search" name="q" type="text" placeholder="Search">
    </form>
    <ul class="languages-list">
        @foreach($languages as $langid => $language)
            <li><a class="language" id="{{$langid}}"><div class="logo-wrapper"><img class="logo" src="{{$language["logo"]}}"></div> <span>{{$language["name"]}}</span></a></li>
        @endforeach
    </ul>
</div>