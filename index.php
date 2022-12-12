<?php
  // $parolaCensurata = "";
  $parolaCensurata = $_GET["parola"];
  $stringa = "Se ni’ mondo esistesse un po’ di bene e ognun si considerasse suo fratello, ci sarebbe meno pensieri e meno pene e il mondo ne sarebbe assai più bello.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="m-5">
  <h1 class="text-danger">Paragrafo:</h1>
  <h2>
    <?php echo $stringa; ?>
  </h2>
  <h6>Lunghezza paragrafo: <?php echo strlen ($stringa) ?></h6>
  <form name="form" action="#" method="get" class="my-3">
    Parola da censurare: <input type="text"placeholder="Inserisci una parola" name="parola">
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
  <h4>Paragrafo censurato: <?php echo str_replace($parolaCensurata, "***", $stringa) ?></h4>


</body>
</html>