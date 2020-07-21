// Arrow scroll up
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
