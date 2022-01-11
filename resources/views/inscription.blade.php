@extends ('layout.app')

@section ('content')
  <body>
  <section class="py-5 text-white">
      <div class="container">
        <h2 class="serif text-center text-light mb-4 py-3  my-4  justify-content-lg-center">Inscription Gratuite</h2>
        <form>
          <div class="row">
            <div class="col-md-6 col-sm">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control text-black" placeholder="votre nom et Prénoms">
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control text-black" placeholder="votre email">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
              </div>
              <div class="input-group mb-3">
                <input type="number" class="form-control text-black" placeholder="numero de téléphone">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control text-black" placeholder="adresse zone Ex:foreké 45">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
              </div>
        </div>
            
        <div class="col-md-6 col-sm">

              
              <div class="input-group mb-3 ">


                <input class="text-black" type="date" name="datenaissance" \>
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
                <label class="mx-3">Date de Naissance</label>
            </div>
            <div class="input-group mb-3 ">

              
                <select class="text-black">
                    <option>Masculin</option>
                    <option>Feminin</option>
                </select>
                <label class="mx-3">Sexe</label>
            </div>
            <div class="input-group mb-3">
            
          <input type="text" name="Mot de passe" class="text-black" placeholder="Entrer votre Mot de passe de taille d'au moins 8 carracteres"\>
          <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
            <input type="text" class="text-black" name="Mot de passe" placeholder="Confirmer le Mot de passe"\>
            </div>
            <div class="input-group mb-3">
            <label>Recevoir par Email les offres de partenaires</label>
          <input type="radio" class="text-black mx-3" name="offres" value="Oui"><label> OUI </label>
          <input type="radio" class="text-black mx-3" name="offres" value="Non"><label> NON </label><br>
          
          </div>
          
          </div>
              
          
          <div class="row">
            
            <div class="input-group">
              <span class="input-group-text" >Autre information</span>
              <textarea  class="form-control bg" aria-label="with textarea"></textarea>
    
            </div>
          </div>
          <button class="my-4 btn btn-lg btn-primary" type="submit">S'inscrire</button>

        </form>
      </div>
    </section>
    
</body>
@endsection
