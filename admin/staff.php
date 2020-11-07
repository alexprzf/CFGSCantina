<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link rel="stylesheet" href="../css/estils.css">
</head>
<body>    
    <header>
      <?php require_once("../imports/headerStaff.php"); ?>
    </header>
    <div id="content">
        <h1 id="titolStaff">Llista de comandes</h1>        
            <?php
                if(isset($_POST['realitzat'])) { 
                    $myfile = fopen("../Tiquets/".$_POST['fitxer'], "r");
                    $cadena = fgets($myfile);
                    $json = json_decode($cadena,true);
                    fclose($myfile);
                    $json['Estat'] = "Fet";
                    $myfile = fopen("../Tiquets/".$_POST['fitxer'], "w") or die("Unable to open file!");
                    fwrite($myfile, json_encode($json));
                    fclose($myfile); 

                    $to= $json['Dades']['Email'];
                    $subject ="La teva comanda";
                    $txt = "Estimat client, la seva comanda ja està llesta per recollir\r\nComanda:\r\n";
                    foreach ($json['productes'] as $key => $value) {
                        $txt.="\r\t-".$key." quantitat:".$value."\r\n";
                    }
                    $txt.="Preu: ".$json['preu'];
                    $txt = wordwrap($txt,70);
                    mail($to,$subject,$txt);
                } 
            ?>
            <?php
                //CONSTANT COLUMNES
                $columnes = 3;
                $dir = new RecursiveDirectoryIterator('../Tiquets/');
                $contador = 0;
                echo '<table id="taulaStaff">';
                foreach ($dir as $fileinfo) {
                    
                    if(strlen($fileinfo->getFilename())>4){//0,3,6,9,12  
                        if($contador%$columnes==0){
                            echo '<tr class="trStaff">';
                        }
                        $myfile = fopen("../Tiquets/".$fileinfo->getFilename(), "r");
                        $cadena = fgets($myfile);
                        $json = json_decode($cadena,true);
                        if(!($json['Estat']=="Fet")){
                            echo '<td class="tdStaff">';
                            echo '<div class="outer">';
                            echo '<div class="contingutStaff">';
                            echo '<h3>Tiquet nº'.substr($fileinfo->getFilename(), 0, 4).'</h3>';
                            echo '<label><b>Productes</b></label>';
                            echo '<ul>';
                            foreach ($json['productes'] as $key => $value) {
                                echo '<li>'.$key." quantitat:".$value.'</li>';
                            }
                            echo '</ul>';
                            echo '<label><b>Dades</b></label>';
                            echo '<ul>';
                            echo '<li>Nom: '.$json['Dades']['Nom'].'</li>';
                            echo '<li>Telèfon: '.$json['Dades']['Telefon'].'</li>';
                            echo '<li>Correu: '.$json['Dades']['Email'].'</li>';
                            if($json['Dades']['Intolerancias']!=""){
                                echo '<li>Intoleràncies: '.$json['Dades']['Intolerancias'].'</li>';
                            }
                            if($json['Dades']['Extras']!=""){
                                echo '<li>Extres: '.$json['Dades']['Extras'].'</li>';
                            }
                            echo '</ul>';
                            echo '<label><b>Preu: </b>'.$json['preu'].'€</label><br>';
                            echo '<label><b>Estat: </b>'.$json['Estat'].'</label>';
                            echo '</div>';
                            echo '<div class="inner">';
                            echo '<form class="formStaff" method="post">';
                            echo '<input type="hidden" value="'.$fileinfo->getFilename().'" name="fitxer" />';
                            echo '<input class="btnStaff" type="submit" name="realitzat" value="Marca com a Finalitzat"/> ';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                            echo "</td>";
                            $contador++;
                        }
                        fclose($myfile);    
                        if($contador%$columnes==0){
                            echo '</tr>';
                        }      
                    }
                }
                if(!($contador-1)%3==0){
                    echo '</tr>';
                }
                echo '</table>'
            ?>
    </div>
    <footer>
      <?php require_once("../imports/footer.php"); ?>
    </footer> 
    <script src="../js/footer.js"></script>   
</body>
</html>