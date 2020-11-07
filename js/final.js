function imprimeixComanda(){
    let json = JSON.parse(localStorage.getItem("comanda"));
    let cadena = "";
    cadena+='<h3 id="h3Final"><b>Productes</b></h3>';
    cadena+='<ul id="ulFinal">';
    for (let key in json["productes"]){
        var attrName = key;
        cadena+=("<li><t>"+key+" - "+json["productes"][key]+" unitats </li>");
    }
    cadena+="</ul>"
    cadena+=('<p id="pFinal"><b>Preu </b>'+json["preu"]+'€</p>');
    document.getElementById("divFinal").innerHTML = cadena;
}
imprimeixComanda();