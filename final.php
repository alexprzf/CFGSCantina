<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div id="content">

      <h1 id ="h1Final">Compra finalitzada</h1>
      <div id="divFinal">
      </div>
      <script src="js/final.js"></script>
      <?php
 
        if (!isset($_COOKIE["comanda"])){
          $hora = date("G");
          $cooldown = 23-intval($hora);
          $cooldown = $cooldown*3600;          

          setcookie("comanda","True",time()+$cooldown);
          $json = $_POST["comanda"];  
          do {
            $random = rand(0, 5000);
            $filename = "./Tiquets/".$random.".txt";
          } while (file_exists($filename));
          $myfile = fopen("./Tiquets/".$random.".txt", "w") or die("Unable to open file!");
          fwrite($myfile, $json);
          fclose($myfile); 

          // Enviar mail
            $to= $_POST["email"] ;
            $subject ="La teva comanda";
            $json = json_decode($_POST["comanda"],true);
            $txt = "Estimat client, la seva comanda s'ha tramitat correctament\r\nComanda:\r\n";
            foreach ($json['productes'] as $key => $value) {
              $txt.="\r\t-".$key." quantitat:".$value."\r\n";
            }
            $txt.="Preu: ".$json['preu'];
            $txt = wordwrap($txt,70);
            mail($to,$subject,$txt);      
        }
      ?>
    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
</body>
</html>