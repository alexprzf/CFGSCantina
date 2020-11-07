function stringComanda(){
    let json = JSON.parse(localStorage.getItem("comanda"));
    
    let productes = json["productes"];
    let preu = json["preu"];
    let codiFinal = "<form>"
    for (let [key, value] of Object.entries(productes)) {
        codiFinal+='<tr class="trComanda">';
        codiFinal+=("<td>"+key+" -</td>");
        codiFinal+="<td> "+value+" unitats</td>";
        codiFinal+="</tr><br>";
    }
    codiFinal+=('<tr class="trComanda"><td>Preu: </td><td>'+preu+'€</td></tr></form>');
    codiFinal
    return codiFinal;
}
function imprimirComanda(){
    document.getElementById("ComandaPasada").innerHTML = stringComanda();
}
function addLocalStorageToForm(){
    document.getElementById("comanda").setAttribute("value", localStorage.getItem("comanda"));
}
