var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl){
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
	  


function blinker(id)
{
        elm = document.getElementById(id);
        setTimeout(function() {setInterval(function () {elm.style.visibility="visible";},500);},5000);
        setInterval(function () {elm.style.visibility="hidden";},1000);
}
function init(ch){
      ch.style.backgroundColor=""; 
}        
function surligne(ch,err){
	if(err) ch.style.backgroundColor="#ff0004";
	else ch.style.backgroundColor="";
}
function verifemail(ch){
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	if(!regex.test(ch.value)){
		surligne(ch,true);
		return false;
	}
	else {
		surligne(ch,false);
		return true;
	}
}
function verifusername(ch){
	if(ch.value.length<5 || ch.value.length>30){
		surligne(ch,true);
		return false;
	}
	else {
		surligne(ch,false);
		return true;
	}
}
function verifpw(ch){
	if(ch.value.length<6 || ch.value.length>8){
		surligne(ch,true);
		return false;
	}
	else {
		surligne(ch,false);
		return true;
	}
}
function verifbt(b){
	if(b.checked) 
		return true;
	else return false;
}
function verifbtgroup(bt, val1, val2){
       if(bt.value == val1 || bt.value == val2){
        return true;
    }
       else return false;
} 
function verif(f){
	var usernameOk=verifusername(f.usname);
	var emailOk = verifemail(f.mail);
	var pwOk =verifpw(f.pw);
	var boutOk = verifbt(f.accepte);
   if(usernameOk && emailOk && pwOk && boutOk){
   	return true;
   }
   else if (usernameOk && emailOk && pwOk && !boutOk) {
     alert("Veillez cocher la case pour accepter les conditions et les règles de fixées");  
     return false; 	
   }
   else{
   	alert("Veillez fournir des information correctes dans le formulaire");
   return false;
   }
}
function verif2(f){
	var bout=verifbtgroup(f.boutiquier, 'oui', 'non');
	var usernameOk=verifusername(f.usname);
	var emailOk = verifemail(f.mail);
	var pwOk =verifpw(f.pw);
	var boutOk = verifbt(f.accepte);
   if(usernameOk && emailOk && pwOk && boutOk && bout){
   	return true;
   }
   else if (usernameOk && emailOk && pwOk && !boutOk) {
     alert("Veillez cocher la case pour accepter les conditions et les règles de fixées");  
     return false; 	
   }
   else{
   	alert("Veillez fournir des information correctes dans le formulaire");
   return false;
   }
}
function veriflogin(f){
    var typeOk=verifbtgroup(f.typecompte, 'clients', 'vendeurs');
	var usernameOk=verifusername(f.usname);
	var pwOk =verifpw(f.pw);
	if(usernameOk && pwOk && typeOk){
	 return true;
	}
	else if (usernameOk && pwOk && !typeOk) {
          alert("Précisez le type de compte");  
          return false; 	
      }
	else {
		alert("Veillez fournir des informations correctes dans le formulaire");
         return false;
	}
}
function veriffic(fic){
	if(fic.value) return true;
	return false;
}
function verifpub(f){
     if((f.imag).value && (f.nomproduit).value && (f.prix).value && (f.descript).value  && (f.categorie).value){
     	return true;
     }
     else {
     	alert ("Tous les champs sont obligatoires");
     	return false;
     }

}
function verifqte(f){
  if(f.value.length<1) {
  	surligne(f,true);	
  }	
}
 function verifcommande(f){
 	
 	if(!f.pointdelivraison.value && !f.quantite.value){
 		alert("Veillez remplir les champs du formulaire");
 		return false;
 	}
 	else if(f.quantite.value.length<1){
 	   alert("Cette quantité n'est pas valable")	
 		return false;
 	}
 	else if(!f.pointdelivraison.value){
 		alert("Choisissez une zone de livraison de votre choix")
 	 return false;
 	}
 	else return true;
 }


 const loader = document.querySelector('.loader');

 window.addEventListener('load',() => {
	 loader.classList.add('fondu-out');
 })

 (function($bs) {
	const CLASS_NAME = 'has-child-dropdown-show';
		$bs.Dropdown.prototype.toggle = function(_orginal) {
			return function() {
				document.querySelectorAll('.' + CLASS_NAME).forEach(function(e) {
					e.classList.remove(CLASS_NAME);
				});
				let dd = this._element.closest('.dropdown').parentNode.closest('.dropdown');
				for (; dd && dd !== document; dd = dd.parentNode.closest('.dropdown')) {
					dd.classList.add(CLASS_NAME);
				}
				return _orginal.call(this);
			}
		}($bs.Dropdown.prototype.toggle);

		document.querySelectorAll('.dropdown').forEach(function(dd) {
			dd.addEventListener('hide.bs.dropdown', function(e) {
				if (this.classList.contains(CLASS_NAME)) {
					this.classList.remove(CLASS_NAME);
					e.preventDefault();
				}
				if(e.clickEvent && e.clickEvent.composedPath().some(el=>el.classList && el.classList.contains('dropdown-toggle'))){
					e.preventDefault();
				}
				e.stopPropagation(); // do not need pop in multi level mode
			});
		});

		// for hover
		function getDropdown(element) {
			return $bs.Dropdown.getInstance(element) || new $bs.Dropdown(element);
		}

		document.querySelectorAll('.dropdown-hover, .dropdown-hover-all .dropdown').forEach(function(dd) {
			dd.addEventListener('mouseenter', function(e) {
				let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
				if (!toggle.classList.contains('show')) {
					getDropdown(toggle).toggle();
				}
			});
			dd.addEventListener('mouseleave', function(e) {
				let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
				if (toggle.classList.contains('show')) {
					getDropdown(toggle).toggle();
				}
			});
		});
	})(bootstrap);