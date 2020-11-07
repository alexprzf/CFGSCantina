<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <script lang="javascript" src="js/menu.js"></script>
</head>
<body>
    <?php 
      if (isset($_COOKIE["comanda"])){
        header('Location: error.php');
      }
    ?>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div class ="fila" id="content">
      <div class="columna">
        <h1 id="h1Carrito">Tu compra</h1>
        <div id="carrito"></div>
        <div id="divTotal">
          <text> TOTAL:</text>
          <text id = "total"> 0</text>
          <text>€</text>
          <br>
          <button id = "vaciar">Vaciar </button>
        </div>
      </div>    
      <div class = "columna">
        <div id = "pati">
          <table class = "tablaMenu">
            <tr>
              <th class="titolMenu" colspan = "3">Carta Pati</th>
            </tr>
            <tr>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_bocadillo_fuet.jpg">
                <div>
                  <text class="nombre">Bocadillo Fuet</text>        
                  <text class="precio">1.70€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_bocadillo_queso.jpg">
                <div>
                  <text class="nombre">Bocadillo Queso</text>        
                  <text class="precio">1.70€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_bocadillo_chistorra.jpg">
                <div>
                  <text class="nombre">Bocadillo Chistorra</text>        
                  <text class="precio">2.50€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/esmorzar_torrada.jpg">
                <div>
                <text class="nombre">Torrades</text>         
                  <text class="precio">0.90€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/esmorzar_pancakes.jpg">
                <div>
                  <text class="nombre">Pancakes</text>                      
                  <text class="precio">1.10€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/esmorzar_donutxoco.jpg">
                <div>
                  <text class="nombre">Donut</text>        
                  <text class="precio">0.90€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/esmorzar_cafe.jpg">
                <div>
                  <text class="nombre">Café</text>         
                  <text class="precio">1.70€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/esmorzar_te.jpg">
                <div>
                  <text class="nombre">Te</text>         
                  <text class="precio">1.70€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/esmorzar_naranja.jpg">
                <div>
                  <text class="nombre">Suc de taronja</text>        
                  <text class="precio">1.80€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
            </tr>
          </table> 
        </div>
        <div id = "migdia">
          <table class = "tablaMenu">
            <tr>
              <th class="titolMenu" colspan = "3">Carta Migdia</th>
            </tr>
            <tr>
              <td class="tdMenu"> 
                <img class = "menuImg" src = "./src/img/menu_ensalada.jpg">
                <div>
                  <text class="nombre">Amanida</text>          
                  <text class="precio">2.70€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_entrecot.jpg">
                <div>
                  <text class="nombre">Entrecot</text>          
                  <text class="precio">11.70€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_natillas.jpg">
                <div>
                  <text class="nombre">Natillas</text>                            
                  <text class="precio">1.50€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_tallarines.jpg">
                <div>
                  <text class="nombre">Tallarines</text>          
                  <text class="precio">7.50€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>         
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_sushi.jpg">
                <div>
                  <text class="nombre">Sushi</text>          
                  <text class="precio">12.80€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_tiramisú.jpg">
                <div>
                  <text class="nombre">Tiramisú</text>          
                  <text class="precio">4.50€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
            <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_leon.jpg">
                <div>
                  <text class="nombre">León come gambas</text>          
                  <text class="precio">7.50€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_trucha.jpg">
                <div>
                  <text class="nombre">Truita de granja</text>         
                  <text class="precio">7.90€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td class="tdMenu">
                <img class = "menuImg" src = "./src/img/menu_fruta.jpg">
                <div>
                  <text class="nombre">Fruita</text>        
                  <text class="precio">0.65€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>            
            </tr>
          </table>
        </div>
      </div>
    </div>   
    <footer id="footer">
        <?php require_once("imports/footer.php"); ?>
    </footer> 
</body>
</html>