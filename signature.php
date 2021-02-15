<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signature</title>
  <link rel="stylesheet" href="../assets/css/signature_style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container_layout">
      <div class="layout">
              <h2>SIGNATURE</h2>              
          <canvas id="canvas" name="signatures"></canvas> 
          <span id="bt-clear">
              <p> &#40; Effacer &#41; </p>
          </span>
      </div>

      <div class="layout">
          <h2>CONFIRMATION</h2>
        <div id="capture" name="signatures"></div>  
          
        <div class="submit_btn">
          <input class="submit" type="submit" name="submit" value="VALIDER">
        </div>
      </div>

     

    </div> 

<script src="../js/script.js"></script>

</body>
</html>
