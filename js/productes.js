function enviaProducte() {
    if (verificaForm()) {
        let foto = document.getElementById("imgProducteStaff").value;
        let extensio = foto.split(".");
        let nom = document.getElementById("nomProducteStaff").value;
        nom = nom.replace(/ /g,"");
        nom += "."+extensio[1];
        document.getElementById("nomFoto").value = nom;
        document.getElementById("formAfegeixProducte").submit();
    } else {
        Swal.fire(
            'Error en els camps del formulari',
            'Introduir nom del producte, el preu ha de ser numèric i la imatge ha de ser .jpg o .png',
            'error'
          )
    }
}
function actualitzaNom(){
    document.getElementById("labelNom").innerHTML = document.getElementById("nomProducteStaff").value;
    document.getElementById("h3Previsualitzacio").style.display = "inline";
}
function actualitzaPreu(){
    document.getElementById("labelPreu").innerHTML = document.getElementById("preuProducteStaff").value+"€";
    document.getElementById("h3Previsualitzacio").style.display = "inline";
}
function verificaForm(){
    let foto = document.getElementById("imgProducteStaff").value;
    let extensio = foto.split(".");
    if(extensio[1]=='png' && extensio[1]=='jpg'){
        alert(1);
        return false;
    }
    if(document.getElementById("nomProducteStaff").value == ""){
        alert(2);
        return false;
    }
    if(!isNumeric(document.getElementById("preuProducteStaff").value)){
        alert(3);
        return false;
    }
    return true;
}
function isNumeric(str) {
    if (typeof str != "string") return false // we only process strings!  
    return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
           !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
}