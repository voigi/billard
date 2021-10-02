



function handler (){ 

    var input = document.getElementById("text").value;
    var list = document.getElementById("list");
    var printOutput = document.createElement('li');
    
    if(input != ''){
   printOutput.appendChild(document.createTextNode(input));   
   list.appendChild(printOutput);
    }
    
  }

function effacer (){
      var input = document.getElementById("text").value;
      input = document.getElementById("text").value='';
}
function tooltip(){
    
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

}
  tooltip();
  document.getElementById("submit").addEventListener('click', handler);
  document.getElementById("reset").addEventListener('click', effacer);
  document.getElementById("text").addEventListener('keypress', function(e){ (e.which == 13) && handler();});

