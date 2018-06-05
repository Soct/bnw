//
var modal = document.getElementById('myModal');
    
//
var btn = document.getElementById("sized");

//
var span = document.getElementsByClassName("close")[0];

// quand on clique sur le menu ouvre le Modal
btn.onclick = function() {
   modal.style.display = "block";
   };

// le X nous fait sortir du Modal
span.onclick = function() {
   modal.style.display = "none";
   };

// Le click nous fait sortir du Modal
 window.onclick = function(event) {
    if (event.target == modal) {
       modal.style.display = "none";
       }
    }