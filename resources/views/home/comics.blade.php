@extends("layout.layout_base")


@section("page_title", "DC Comics")


@section("content")

   <div class="content-fluid main-centrale">


     <div class="container central-main pt-4">
      
            <div class="row row-cols-1 row-cols-md-6 g-4 py-4" >
                @foreach($lista_fumetti as $item)
                    <div class="col">
                        <div class="card card-fumetto">
                            <img src="{{ $item['thumb'] }}"  alt="...">

                            <div class="card-img-title pt-3 text-white">{{  $item['title'] }}</div>
                        </div>
                    </div>
                @endforeach

                </div>

                <div class="loadMore">
                    <a href="#">LOAD MORE</a>
                </div>
          
    </div> 
</div>

@endsection