
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>rechercher</title>
    <link href=" {{asset('css/moncss.css')}}" rel="stylesheet">
    <link href=" {{asset('css/app.css')}}" rel="stylesheet">
    <link href=" {{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<style>
    
</style>
    
     

    
  </head>
  <body class="text-center">
    <div>
    @extends ('parti.navbar')

    </div>
<div class="container py-5 my-5">
  <form>
  

    <div class="form-floating">
      <input type="text" class="form-control" aria-label="recherche" id="floatingInput" placeholder="ville de depart">
      <label for="floatingInput">ville de départ</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" aria-label="recherche" id="floatingPassword" placeholder="ville d'arrivée">
      <label for="floatingPassword">Ville d'arrivée</label>
      </div>
      <div class="form-floating">
      <input type="date" class="form-control me-2" aria-label="recherche"  name="datevoyage" placeholder="Date de voyage"\>
      <label for="floatingPassword">selectionner une date</label>
      </div>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">rechercher</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
  </form>
</div>
<div class="mc-foot">
@include ('parti.footer')

</div>
<script src="{{asset('js/app.js')}}"></script> 
   <script src="{{asset('js/monjs.js')}}"></script> 
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> 
  </body>
</html>
