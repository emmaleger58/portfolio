
// Arrow scroll up (gets really upset if you dont scroll with it)
jQuery(function(){
   $(function () {
       $(window).scroll(function () { //Fonction appelée quand on descend la page
           if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
               $('#scrollUp').css('right','-50px'); // Replace à 10pixels de la droite l'image
           } else {
               $('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
           }
       });
   });
});

// Pop up
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 7000);
};

function myFunctionBis() {
  var x = document.getElementById("snackbar2");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 7000);
};



// Empeche l'envoi du formulaire à chaque refresh
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

const nome = document.getElementById("nome");
const scendi = document.getElementById("scendi");

nome.addEventListener("mouseenter", () => {
  nome.style.display = "none";
  scendi.style.display = "flex";
  console.log("em lpb\n");
})

scendi.addEventListener("mouseleave", () => {
  scendi.style.display = "none";
  nome.style.display = "flex";
  console.log("by em\n");
})
