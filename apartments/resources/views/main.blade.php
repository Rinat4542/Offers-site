<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Site</title>
    <link rel="stylesheet" href="{{ asset("assets\css\style.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <header>
      @include('components.navbar')
    </header>
  </head>
  <body>
    <div class="container">
      <div class="apartments">
        @yield('main')
      </div>
    </div>
  </body>
</html>
