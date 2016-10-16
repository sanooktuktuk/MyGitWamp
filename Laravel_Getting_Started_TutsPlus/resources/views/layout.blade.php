<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Application</title>
  </head>
  <body>
    <h2>Laravel Application</h2>

    <hr>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <h3>this is a base layout and content is loaded in the yield below</h3>
    <hr>

    @yield('content')

  </body>
</html>
