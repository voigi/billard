



function handler() {

  var input = document.getElementById("text").value;
  var list = document.getElementById("list");
  var printOutput = document.createElement('li');
  // var buttonOutput = document.createElement('button');
  // buttonOutput.classList.add('btn');  
  // buttonOutput.classList.add('btn-danger');


  if (input != '') {
    printOutput.appendChild(document.createTextNode(input));
    //  buttonOutput.appendChild(document.createTextNode('Effacer'));    
    list.appendChild(printOutput);
    //  printOutput.appendChild(buttonOutput);
  }

}


function effacer() {
  var input = document.getElementById("text").value;
  input = document.getElementById("text").value = '';
}

function tooltip() {

  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

}



var items = [];
function guardarNumeros() {

  var input = document.getElementById("text").value;
  items.push(input);
  console.log(items);
  return false;
}



tooltip();
document.getElementById("submit").addEventListener('click', handler);
document.getElementById("reset").addEventListener('click', effacer);
document.getElementById("text").addEventListener('keypress', function (e) { (e.which == 13) && handler(); });

