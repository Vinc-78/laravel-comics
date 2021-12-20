@php
$nav_links = [
  [
    "text"=> "CHARACTERS",
    "route_name"=> "home.index"
  ],
  [
    "text"=> "COMICS",
    "route_name"=> "home.comics"
  ],
  
  [
    "text"=> "MOVIES",
    "route_name"=> "home.movies"
  ],
  [
    "text"=> "TV",
    "route_name"=> "home.tv"
  ],
  
  [
    "text"=> "COLLECTIBLES",
    "route_name"=> "home.collectibles"
  ],
  
  [
    "text"=> "VIDEOS",
    "route_name"=> "home.videos"
  ],
  [
    "text"=> "FANS",
    "route_name"=> "home.fans"
  ],
  [
    "text"=> "NEWS",
    "route_name"=> "home.news"
  ],
  [
    "text"=> "SHOP",
    "route_name"=> "home.shop"
  ],

  
]
@endphp

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
    
        <div class="container">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                @foreach($nav_links as $value)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route($value['route_name']) }}">{{ $value['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
  </nav>
</header>