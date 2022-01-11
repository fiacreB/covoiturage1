<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=" {{asset('css/moncss.css')}}" rel="stylesheet">
    <link href=" {{asset('css/app.css')}}" rel="stylesheet">
    <link href=" {{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <title>mon site</title>
</head>

<body>
@include ('parti.navbar')
   <div class="baner">
    @yield ('content')
    </div>
    <div class="mc-navbar">
    @include ('parti.footer')

    </div>
   <script src="{{asset('js/app.js')}}"></script> 
   <script src="{{asset('js/monjs.js')}}"></script> 
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> 

</body>
</html>