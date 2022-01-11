

    <nav class="mc-navbar navbar navbar-expand-lg fixed-top navbar-dark pe-3 w-100">
        <div class="container-fluid">
            <a href="#" class=" navbar-brand text-uppercase mx-3 py-3 fw-bolder">COVOITURAGE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " tabindex="-1" id="navbar" aria-labelledby="navbar">
      
                <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
   
                    <li class="nav-item pe-3">
                        <a href="{{route('bien venu')}}" class="btn nav-link active" aria-current="page">acceuil</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a href="{{route('bien venu')}}" class="btn nav-link active" aria-current="page">covoiturer</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a href="{{route('bien venu')}}" class="btn nav-link active" aria-current="page">publier un trajet</a>
                    </li>
                
              
                    <li class="nav-item me-2">

                        <form  class="d-inline-flex postion-fixed" method="GET" action="">
                        <a href="{{route('une recherche')}}" class="btn nav-link active" aria-current="page">rechercher</a>

                        </form>

                    </li> 
                    <li class=" nav-item pe-2 fs-10 dropdown"><a href="#" class=" btn dropdown-toggle active nav-link " id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Log-in/log-out</a>
                <ul class="dropdown-menu sous-m" aria-labelledby="navbardropdown">
                    <li><a href="#" class=" btn dropdown-item ">connexion</a></li>
                    <li><a href="{{route('une inscription')}}" class="btn dropdown-item ">Inscription</a></li>
                    </ul>
              </li> 
                </ul> 
            </div> 
        </div>
    </nav> 