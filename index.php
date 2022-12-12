<?php
  $stringa = "Se ni’ mondo esistesse un po’ di bene
  e ognun si considerasse suo fratello,
  ci sarebbe meno pensieri e meno pene
  e il mondo ne sarebbe assai più bello.";
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
<body>
  <h1>Paragrafo:</h1>
  <h2>
    <?php echo $stringa; ?>
  </h2>
  <h6>Lunghezza paragrafo: <?php echo strlen ($stringa) ?></h6>

</body>
</html>