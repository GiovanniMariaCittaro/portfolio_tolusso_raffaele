<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>{{$title}}</title>
  </head>
  <body>
    
    {{$slot}}
    
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>