<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda</title>
    <script src="js/comanda.js"></script>
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
    <div id="content">
      <h1 id="h1Comanda">Tramitació comanda</h1>
      <div class="columna">
        <h3 id="h3Comanda">Comanda</h3>
        <div id="ComandaPasada">
        </div>  
      </div>
      <div class="columna">
        <form id="formComanda" action="final.php" method="post" name="signup" >
                <fieldset>
                    <legend>Dades adicionals</legend>
                    <div>
                        <label for="name" class="label">Nom</label>
                        <input class="addicional" name="name" type="text" id="name" size="15">
                    </div>
                    <div>
                        <label for="telefon" class="label">Telefon</label>
                        <input class="addicional" name="telefon" type="text" id="telefon" size="15">
                    </div>
                    <div>
                        <label for="email" class="label">Email</label>
                        <input class="addicional" name="email" type="text" id="email" size="15">
                    </div>
                    <div>
                        <label for="extres" class="label">Intoleràncias</label>
                        <input class="addicional" rows="3" name="intolerancies" type="text" id="intolerancies" for="intolerancies" placeholder="Descriu les teves intoleràncies" ></input>
                    </div>
                    <div>
                        <label for="extres" class="label">Extres</label>
                        <input class="addicional" name="extres" for="extres" type="text" id="extres" placeholder="Descriu els extres pels entrepans" ></input>
                    </div>

                    <input id="comanda" type="hidden" name= "comanda" value="">  


                </fieldset>
        </form>
      </div>
    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
    <script>imprimirComanda();</script>
    <script>addLocalStorageToForm();</script>
</body>
</html>