@php
$nav_links = [
  [
    "text"=> "Home",
    "route_name"=> "home.index"
  ],
  
]
@endphp

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
    

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        @foreach($nav_links as $value)
          <li class="nav-item">
            <a class="nav-link" href="{{ route($value['route_name']) }}">{{ $value['text'] }}</a>
          </li>
        @endforeach
      </ul>

    </div>
  </nav>
</header>