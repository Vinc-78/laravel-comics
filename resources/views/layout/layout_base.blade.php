<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('page_title')</title>

  @include("partials.bootstrap_header")
</head>
<body>
  @include("partials.the_header")

  <main>
    <div class="d-flex">
      <div>
       

      </div>

      @yield('content')
    </div>
  </main>

  @include("partials.the_footer")
</body>
</html>