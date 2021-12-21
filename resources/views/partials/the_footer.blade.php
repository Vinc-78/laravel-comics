@php

   /*  $comicsArray=["Characters","Comics","Movies","TV","Games","Videos","News"];
    $shop_array=["Shop DC","Shop DC Collectibles"]; */
    $dcArrat=["Terms Of Use","Privacy policy(New)","Ad Choices","Advertising","Jobs","Subscriptions","Talent Workshops","CPSC Certificates","Ratings","Shop Help","Contact Us"];
    $sitesArray=["DC","MAD Magazine","DC Kids","DC Universe","DC Power Visa"];
    $socialArray=["img/footer-facebook.png","img/footer-twitter.png","img/footer-youtube.png","img/footer-pinterest.png","img/footer-periscope.png"];
    
    $nav_links = [
  [
    "text"=> "Characters",
    "route_name"=> "home.index"
  ],
  [
    "text"=> "Comics",
    "route_name"=> "home.comics"
  ],
  
  [
    "text"=> "Movies",
    "route_name"=> "home.movies"
  ],
  [
    "text"=> "TV",
    "route_name"=> "home.tv"
  ],
  [
    "text"=> "Games",
    "route_name"=> "home.games"
  ],
  [
    "text"=> "Videos",
    "route_name"=> "home.videos"
  ],
  [
    "text"=> "News",
    "route_name"=> "home.news"
  ],
  
];

$shop_array = [
    [
    "text"=> "Shop DC",
    "route_name"=> "home.shop"
    ],
    [
    "text"=> "Shop DC Collectibles",
    "route_name"=> "home.collectibles"
    ],

]

@endphp


<footer class="footer">

    <div class="shellFooter">

           
        <div class="centralFooter">
    
            <div class="centralFooter-left">
                <div class="centralFooter-left-list-left">
    
                    <div class="centralFooter-left-list-left-sup">
                        <h2><a href="#">DC COMICS</a></h2>
                        <ul>
                            @foreach ($nav_links as $value)

                                <li><a href="{{ route($value['route_name']) }}">{{ $value['text'] }}</a></li>
                                
                            @endforeach
                        </ul>
                        
                    </div>
                    <div class="centralFooter-left-list-left-inf">
                        <h2><a href="#">SHOP</a></h2>
                        <ul>
                            @foreach ($shop_array as $shop)

                            <li><a href="{{ route($shop['route_name']) }}">{{ $shop['text'] }}</a></li>
                                
                            @endforeach
                        </ul> 

                    </div>
    
                </div>
                <div class="centralFooter-left-list-central">
                    <h2><a href="#">DC</a></h2>
                    <ul>
                       @foreach ($dcArrat as $dc)

                            <li><a href="#">{{$dc}}</a></li>
                            
                        @endforeach 
                    </ul>

                </div>
                <div class="centralFooter-left-list-right">
                    <h2><a href="#">SITES</a></h2>
                    <ul>
                        @foreach ($sitesArray as $sites)

                            <li><a href="#">{{$sites}}</a></li>
                            
                        @endforeach
                    </ul>
   
                </div>
    
            </div>
            <div class="centralFooter-right">
                <img  src="{{ asset('img/dc-logo-bg.png') }}" alt="logo nel footer"> 
            </div>
          
        </div>
        <div class="navSocial">
    
            <div class="navSocialContainer">
    
                <div class="navSocial-left">
                <a href="#">SIGN-UP NOW!</a>
    
                </div>
                <div class="navSocial-right">
                    <span>FOLLOW US</span>
                    <ul>
                        @foreach ($socialArray as $social)

                        <li><a href="#"> <img  src="{{ asset($social) }}" alt=""></a></li>
                            
                        @endforeach 
                    </ul>
                
                </div>
    
            </div>
            
            
    
        </div>
    
      </div>



</footer>