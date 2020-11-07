<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <?php require_once("imports/headerError.php"); ?>
    </header>
    <div id="content">
      <div class="bodyerror">
        <div class="mainboxerror">
          <div class="err"><label class="errorText">ERR</label><i class="far fa-question-circle fa-spin "></i><label class="errorText">R</label></div>        
        </div>
      </div>
      <div class="msgerror"><p id="pError">Ja has fet una comanda avui, torna a la pàgina <a href="landing.php">principal</a>.<br>Esperem que tornis demà, et desitgem un bon dia.</p></div>
    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
</body>
</html>