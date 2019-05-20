<head>
  <title>Controlla esistenza file</title>
  <script src="https://ihabbol.vg/scripts/jquery.js" type="text/javascript"></script>
  <script>
    /*var temp=null;
    function Invio(){
      temp=document.getElementById("file").value;
    }*/
  </script>
</head>
<body>
  <!--
  <input type="text" id="file">
  <input type="button" onclick="Invio()" id="bottone" value="invio">
  </button>
  <form action="">
  	<input name="fileUtente" type="file" size="20">
  </form>
  -->
</body>

<?php
$esiste=0;
//$valido=0;
$dim=0;

if (file_exists($_POST["filename"])) {
      echo "file esistente<br>";
      $esiste=1;
  } else {
    echo "file non trovato<br>";
  }

  if (is_file($_POST["filename"])) {
    echo "file valido<br>";
  } else {
    echo "la risorsa non esiste oppure non è un file<br>";
  }

  $dim=filesize($_POST["filename"]);
  if($dim!=0) echo "la dimensione del file è di ".$dim/*filesize($_POST["filename"])*/." bytes<br>";

  if($esiste==1) {
    //echo readfile($_POST["filename"]);
    ?>
    <script>alert("Il file cercato esiste");</script>
    <br>
    Contenuto file:
    <br>
    <!--<img src="/var/www/html/prova">
    <img src="prova.jpg" class="img-circle">-->
    <?php
    if($dim<1000) readfile($_POST["filename"]);
  }
//?>
