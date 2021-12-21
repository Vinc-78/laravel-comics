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

];

$routeLink = Request::route()->getName();

@endphp



<header>

  <div class="container-fluid blu_line">

    <div class="container top-nav">

        <a class="nav-link text-white  " href="#">DC POWER <sup>SM</sup> VISA <i class="far fa-registered"></i> </a>
        <a class="nav-link text-white  " href="#">ADDICIONAL DC SITES</a>
     
    </div>

  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom justify-content-center">
   
        <div class="container">

          <div class="logo">
            <img class="w-75" src="{{ asset('img/dc-logo.png') }}" alt="">
          </div>

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ;">
                @foreach($nav_links as $value)
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ $routeLink === $value['route_name'] ? 'active' : ' ' }}" href="{{ route($value['route_name']) }}">{{ $value['text'] }}</a>
                </li>
                @endforeach
            </ul>

            <div class="search">
              <input type="search" placeholder="Search"><i class="fas fa-search"></i>
            </div>
        </div>

    
  </nav>

  <div class="container-fluid hero">
    {{-- <div class="currentSeries">
      <a href="#">CURRENT SERIES</a>
    </div> --}}
    
  </div>
</header>