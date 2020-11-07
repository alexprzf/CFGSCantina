function comrpobaCookie() {
    let pedido = sessionStorage.getItem("comanda");
    if (pedido == null) {
        window.location.href = "menu.php";
    } else {
        window.location.href = "error.php";
    }
}

function verificaPagina() {
    return window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1);
}
function creaCadenaTxt() {
    let cadena = "Hola";
    return cadena;

}
function actualitzaDades() {
    let json = JSON.parse(localStorage.getItem("comanda"));
    let mapDades = {};

    mapDades["Nom"]=document.getElementById("name").value;
    mapDades["Telefon"]=document.getElementById("telefon").value;
    mapDades["Email"]=document.getElementById("email").value;
    mapDades["Intolerancias"]=document.getElementById("intolerancies").value;
    mapDades["Extras"]=document.getElementById("extres").value;
    json["Dades"]=mapDades;
    json["Estat"]="Per preparar";
    localStorage.setItem("comanda", JSON.stringify(json));
    addLocalStorageToForm();
}
function verificaDades() {
    if (document.getElementById("name").value == "") {
        return false;
    }
    if (Number.isInteger(parseInt(document.getElementById("telefon").value))) {
        if (document.getElementById("telefon").value.length != 9) {
            return false;
        }

    } else {
        return false;
    }
    if (document.getElementById("email").value.slice(document.getElementById("email").value.length - 17, document.getElementById("email").value.length) == "@inspedralbes.cat" && document.getElementById("email").value.length > 17) {
        return true;
    } else {
        return false;
    }
}
function comrpobaCookie() {
    let pedido = sessionStorage.getItem("comanda");
    if (pedido == null) {
        return false;
    } else {
        return true;
    }
}
function finalDeComanda() {
    if (verificaDades() && !comrpobaCookie()) {
        actualitzaDades();
        document.getElementById("formComanda").submit();
    } else {
        Swal.fire(
            'Error en els camps del formulari',
            'Introduir nom, telefon de 9 xifres i un mail amb domini @inspedralbes.cat',
            'error'
          )
    }
}
function enviaComanda() {
    if (document.getElementById("total").textContent == 0) {
        Swal.fire(
            'Cap producte escollit',
            'Has de seleccionar mínim un producte',
            'error'
          )
    }
    else {
        let mapPedido = {};
        let mapProductes = {};

        let cantidades = document.getElementsByClassName("cantidad");
        for (let i = 0; i < cantidades.length; i++) {
            if (document.getElementsByClassName("cantidad")[i].textContent != 0) {
                mapProductes[document.getElementsByClassName("nombre")[i].textContent] = document.getElementsByClassName("cantidad")[i].textContent;
            }
        }
        mapPedido["productes"] = mapProductes;
        mapPedido["preu"] = document.getElementById("total").textContent;

        localStorage.setItem("comanda", JSON.stringify(mapPedido));
        window.location.href = "comanda.php";
    }
}
function endevant() {
    let pagina = verificaPagina();

    switch (pagina) {
        case "landing.php":
            if (comrpobaCookie()) {
                window.location.href = "error.php";
            } else {
                window.location.href = "menu.php";
            }

            break;


        case "menu.php":
            enviaComanda();
            break;


        case "comanda.php":
            finalDeComanda();
            break;
    }
}
function comprobaBtn() {
    let pagina = verificaPagina();

    switch (pagina) {
        case "landing.php":
            btn(">", true, "Veure Menú");
            btn("<", false);
            break;


        case "menu.php":
            btn(">", true, "Fer comanda");
            btn("<", true, "Tornar a Pàgina principal");
            break;


        case "comanda.php":
            btn(">", true, "Finalitzar comanda");
            btn("<", true, "Tornar a menú");
            break;

        case "final.php":
            btn(">", false);
            btn("<", true, "Tornar a Pàgina principal");
            break;


        case "error.php":
            btn(">", false);
            btn("<", true, "Tornar a Pàgina principal");
            break;
       
        case "avislegal.php":
            btn(">",false);
            btn("<",true,"Torna a Pàgina principal");
            break;
        
        case "landingStaff.php":
            btn(">", false);
            btn("<", true, "Tornar a Pàgina principal");
            break;

        case "staff.php":
            btn(">", false);
            btn("<", true, "Tornar a Staff");
            break;

        case "productes.php":
            btn(">", false);
            btn("<", true, "Tornar a Staff");
            break;
    }
}

function enrera() {
    let pagina = verificaPagina();

    switch (pagina) {
        case "menu.php":
            window.location.href = "landing.php";
            break;
        
        case "landingStaff.php":
            window.location.href = "../landing.php";
            break;

        case "staff.php":
            window.location.href = "landingStaff.php";
            break;
        
        case "productes.php":
            window.location.href = "landingStaff.php";
            break;


        case "comanda.php":
            window.location.href = "menu.php";
            break;


        case "final.php":
            window.location.href = "landing.php";
            break;


        case "error.php":
            window.location.href = "landing.php";
            break;
        case "admin/staff.php":
            window.location.href = "landing.php";
            break;
        case "avislegal.php":
            window.location.href = "landing.php";

        break;
    }
}

function btn(direccio, estat, nom) {
    if (direccio == ">") {
        if (!estat) {
            document.getElementById("btn2").style.display = "none";
        } else {
            document.getElementById("btn2").style.display = "inline";
        }
        document.getElementById("btn2").value = nom;
    } else {
        if (!estat) {
            document.getElementById("btn1").style.display = "none";
        } else {
            document.getElementById("btn1").style.display = "inline";
        }
        document.getElementById("btn1").value = nom;
    }
}
comprobaBtn();