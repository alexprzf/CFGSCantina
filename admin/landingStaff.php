<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Staff</title>
    <link rel="stylesheet" href="../css/estils.css">
</head>
<body>
    <header>
      <?php require_once("../imports/headerStaff.php"); ?>
    </header>
    <div id="content">
        <div id="divLandingStaff">
            <div class="columna">
                <a class="enlaceHeader aHeader" href="staff.php">
                    <img class = "imgLandingStaff" src = "../src/img/Pedido.jpg">
                 </a>
                 <h3>Comandes</h3>
            </div>
            <div class="columna">
                <a class="enlaceHeader aHeader" href="productes.php">
                    <img class = "imgLandingStaff" src = "../src/img/Menu.jpg">
                 </a>
                 <h3>Menú</h3>
            </div>
        </div>
    </div>
    <footer>
      <?php require_once("../imports/footer.php"); ?>
    </footer> 
    <script src="../js/footer.js"></script>   
</body>
</html>