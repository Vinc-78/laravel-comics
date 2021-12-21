@extends("layout.layout_base")


@section("page_title", $fumetto_singolo['title'] . " dettaglio")

@section("font_awesome")

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


@endsection


@section("content")

<div class="container page">

    <div class="vetrina">
        <img class="w-75" src="{{$fumetto_singolo['thumb']}}" alt=""> 
    </div>

    <div class="row pt-4">

        <div class="col-8 ">
            <h3>{{$fumetto_singolo['title']}}</h3>

            <div class="row">
                <div class="col-9 d-flex green justify-content-between">

                    <span>U.S: Price: {{$fumetto_singolo['price']}} </span>
                    <span>AVAILABLE </span>

                </div>
                <div class="col-3 green border-start border-dark">

                    <span>Check Available <i class="fas fa-arrow-alt-circle-down"></i></span>

                </div>

                
            </div>
            <div class="descrizione">
                <p>{{$fumetto_singolo['description']}}</p>
            </div>

        </div>

        <div class="col-4 pt-2 immagine-laterale">
            
            <img class="w-75" src="{{ asset('img/adv.jpg') }}" alt="">
            
        </div> 

    </div>


</div>




@endsection