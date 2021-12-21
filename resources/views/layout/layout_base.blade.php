<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title> @yield('page_title') </title>

  @include("partials.bootstrap_header")

  @yield('font_awesome')

</head>
<body>
  @include("partials.the_header")

  <main>
   
       @yield('content')  {{-- Si inserisce il contenuto specifico del main  --}}
    
  </main>

  @include("partials.the_footer")
</body>
</html>