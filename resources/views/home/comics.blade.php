@extends("layout.layout_base")


@section("page_title", "DC Comics")

@section("font_awesome")

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


@endsection

@section("content")

   <div class="content-fluid ">

        <div class="main-centrale">

            <div class="currentSeries">
                <a href="#">CURRENT SERIES</a>
            </div>

            <div class="container central-main pt-4">
        
                <div class="row row-cols-1 row-cols-md-6 g-4 py-4" >
                    @foreach($lista_fumetti as $item)
                        <div class="col fumetto-singolo">
                            
                            <a href="{{route('fumetti.dettaglio',["id"=>$loop->index])}}" class="card card-fumetto">
                                <img src="{{ $item['thumb'] }}"  alt="...">

                                <div class="card-img-title pt-3 text-white">{{  $item['title'] }}</div>
                            </a>
                        </div>

                    @endforeach

                    </div>

                    <div class="loadMore">
                        <a href="#">LOAD MORE</a>
                    </div>
            
            </div> 

        </div>


        <div class="shellBlu">
            <div class="containerBlu">
            <div class="navBlu">
                <ul>
                <li>
                    <div class="img">

                    <img  src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                    
                    </div>
                    <a href="#">DIGITAL COMICS</a>
                </li>
                <li>
                    <div class="img">
                    <img  src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                    
                    </div>
                    <a href="#">DC MERCHANDISE</a>
                </li>
                <li>
                    <div class="img">
                    <img  src="{{ asset('img/buy-comics-subscriptions.png') }}" alt=""> 
                    
                    </div>
                    <a href="#">SUBSCRIPTION</a>
                </li>
                <li>
                    <div class="img">
                    <img  src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">   
                    
                    </div>
                    <a href="#">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <div class="img">
                    <img  src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">   
                    
                    </div>
                    <a href="#">DC POWER VISA</a>
                </li>
                </ul>
            </div>
            </div>
        </div>

 </div>

@endsection