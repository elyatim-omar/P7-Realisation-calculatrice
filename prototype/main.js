function calcul() {
    var a = 0;
    a = eval(document.getElementById('affichage').value);
    document.getElementById('affichage').value = a;
  };

 function ajouter(nombre) {
  document.getElementById('affichage').value += nombre;

 };

 function del() {
  document.getElementById('affichage').value = "";
 }