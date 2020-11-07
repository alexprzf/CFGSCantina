<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Staff</title>
    <link rel="stylesheet" href="../css/estils.css">
    <script src="../js/productes.js"></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <header>
      <?php require_once("../imports/headerStaff.php"); ?>
    </header>
    <?php
        // Check if image file is a actual image or fake image
        if(isset($_POST["nomFoto"])) {
            $target_dir = "../src/menuFotos";
            $target_file = $target_dir . $_POST["nomFoto"];
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["imgProducteStaff"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "<script>Swal.fire(
                    'Error',
                    'La foto ja existeix',
                    'error'
                )</script>";
            echo "Sorry, file already exists.";
            $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["imgProducteStaff"]["size"] > 500000) {
                echo "<script>Swal.fire(
                    'Error',
                    'La foto es massa gran',
                    'error'
                )</script>";
            $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png") {
                echo "<script>Swal.fire(
                    'Error',
                    'La foto ha de ser jpg o png',
                    'error'
                )</script>";
            $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<script>Swal.fire(
                    'Error',
                    'La foto no s'ha pujat',
                    'error'
                )</script>";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imgProducteStaff"]["tmp_name"], $target_file)) {
                    echo "<script>Swal.fire(
                        'Enhorabona',
                        'El producte ha sigut afegit',
                        'success'
                    )</script>";

                    $data = array(
                        "nom" => $_POST['nomProducteStaff'],
                        "torn" => $_POST['torn'],
                        "preu" => $_POST['preuProducteStaff'],
                        "ruta" => $target_file,
                    );

                    $inp = file_get_contents('menu.json');
                    $tempArray = json_decode($inp);
                    array_push($tempArray, $data);
                    $jsonData = json_encode($tempArray);
                    file_put_contents('menu.json', $jsonData);

                } else {
                    echo "<script>Swal.fire(
                        'Error',
                        'alguna cosa ha anat malament',
                        'error'
                    )</script>";
                }
            }
        
        }

            
    ?>
    <div id="content">
        <div class="columna">
            <div id="columnaAfegir">
                <h1>Afegir Producte</h1>
                <form id="formAfegeixProducte" method="post" enctype="multipart/form-data">
                    <div class="columna">
                        <label class="labelsProducte">Nom del producte:</label>
                        <br>
                        
                        <label class="labelsProducte">Torn Menú:</label>
                        <br>
                        
                        <label class="labelsProducte">Preu del producte:</label>
                        <br>
                        
                        <label class="labelsProducte">Imatge del producte:</label>
                    </div>
                    <div class="columna">
                        
                        <input type="text" name="nomProducteStaff" id="nomProducteStaff" onchange="actualitzaNom()">
                        <br>
                        <input type="radio" id="rbPati" name="torn" value="pati" checked="checked">
                        <label for="male">Pati</label>
                        <input type="radio" id="rbMigdia" name="torn" value="migdia">
                        <label for="female">Migdia</label>
                        <br>
                        <input type="text" name="preuProducteStaff" id="preuProducteStaff" onchange="actualitzaPreu()">
                        <br>
                        <input type="file" name="imgProducteStaff" id="imgProducteStaff" accept="image/png, image/jpg" style="display: none;" onchange="loadFile(event)">
                        <input class="btnAfegirProducte" type="button" value="Selecciona foto" onclick="document.getElementById('imgProducteStaff').click();" />
                    </div>
                    
                    <input type="hidden" name="nomFoto" id="nomFoto">
                    <br>
                    <br>
                    <input class="btnAfegirProducte" type="button" name="" id="" onClick="enviaProducte()" value="Afegeix producte">
                    <br>
                    <br>
                    <h3 id="h3Previsualitzacio">Previsualització</h3>
                    <br>
                    <br>
                    <img id="output"/>
                    <br>
                    <text id="labelNom"></text>        
                    <text id="labelPreu"></text>
                </form>
            </div>
        </div>
        <div class="columna">
            <h1>Modificar Producte</h1>
            <div class="columna">
                <nav id="navProductes">
                    <ul id="ulProductes">
                        <li>Link 1</li>
                        <li>Link 2</li>
                        <li>Link 3</li>
                        <li>Link 4</li>
                        <li>Link 5</li>
                        <li>Link 6</li> 
                        <li>Link 7</li> 
                        <li>Link 8</li>
                        <li>Link 9</li>
                        <li>Link 10</li>
                        <li>Link 11</li>
                        <li>Link 13</li>
                        <li>Link 13</li>

                    </ul>
                </div>
            <div class="columna"></div>
        </div>
    </div>
    <footer>
      <?php require_once("../imports/footer.php"); ?>
    </footer>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            document.getElementById("output").style.display = "inline";
            document.getElementById("h3Previsualitzacio").style.display = "inline";
            }
        };
    </script>
    <script src="../js/footer.js"></script>    
</body>
</html>