@extends("layout.layout_base")


@section("page_title", $fumetto_singolo['title'] . " dettaglio")

@section("font_awesome")

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


@endsection


@section("content")

<div class="container page">

    <div class="vetrina">
        <img class="w-75" src="{{$fumetto_singolo['thumb']}}" alt=""> 
            <div class="go-galleria">
                <a href="{{route('home.comics')}}" > Vai alla Galleria </a>
            </div>
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
            <div class="descrizione py-1">
                <p>{{$fumetto_singolo['description']}}</p>
            </div>

        </div>

        <div class="col-4 pt-2 immagine-laterale">
            
            <img class="w-75" src="{{ asset('img/adv.jpg') }}" alt="">
            
        </div> 

    </div>


</div>

<div class="container-fluid sezione-dettagli mt-3">

    <div class="container">
        <div class="row g-4">
            <div class="col-6">
                <h4 class="text-secondary border-bottom py-4 mb-4">Talent</h4>

                <div class="art border-bottom d-flex mb-4">

                    <div class="title">
                        <span>Arta By:</span>
                    </div>

                    <div class="artists">

                        @foreach ($fumetto_singolo['artists'] as $item)
                            <span> {{$item}} </span>
                        @endforeach
                        
                    </div>

                </div>

                <div class="art border-bottom d-flex mb-4">

                    <div class="title">
                        <span>Writers By:</span>
                    </div>

                    <div class="artists">

                        @foreach ($fumetto_singolo['writers'] as $item)
                            <span> {{$item}} </span>
                        @endforeach
                        
                    </div>

                </div>

            </div>

            <div class="col-6">
                <h4 class="text-secondary border-bottom py-4 mb-2">Species</h4>

                <div class="art border-bottom d-flex mb-1">

                    <div class="title">
                        <span>Series</span>
                    </div>

                    <div class="dettagli">

                        <p>{{$fumetto_singolo['series']}}</p>
                        
                    </div>

                </div>

                <div class="art border-bottom d-flex mb-1">

                    <div class="title">
                        <span>US Price:</span>
                    </div>

                    <div class="dettagli">

                        <p>{{$fumetto_singolo['price']}}</p>
                        
                    </div>

                </div>
                <div class="art border-bottom d-flex mb-1">

                    <div class="title">
                        <span>On Sale Date:</span>
                    </div>

                    <div class="dettagli">

                        <p>{{$fumetto_singolo['sale_date']}}</p>
                        
                    </div>

                </div>

            </div>
            
        </div>

    </div>


</div>




@endsection