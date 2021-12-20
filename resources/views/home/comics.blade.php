@extends("layout.layout_base")


@section("page_title", "DC Comics")


@section("content")

   <div class="content-fluid main-centrale">

    <div class="container">
      
        @foreach($fumetti as $value)

            <div class="row row-cols-1 row-cols-md-6 g-4">
                @foreach($value as $fumetto)
                    <div class="col">
                        <div class="card card-pasta">
                        <img src="{{ $fumetto['thumb'] }}" class="card-img-top" alt="...">

                        <div class="card-img-title">{{  $fumetto['title'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    
   </div>
</div>

@endsection