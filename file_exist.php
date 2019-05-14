<head>
  <title>Controlla esistenza file</title>
  <script src="https://ihabbol.vg/scripts/jquery.js" type="text/javascript"></script>
  <script>
    var temp=null;
    function Invio(){
      temp=document.getElementById("file").value;
    }
  </script>
</head>
<body>
  <input type="text" id="file">
  <input type="button" onclick="Invio()" id="bottone" value="invio">
  </button>
  <form action="">
  	<input name="fileUtente" type="file" size="20">
  </form>
</body>
<script>
if(temp!=null){
<?php
if (file_exists($temp/*'/var/www/html/miofile'*/)) {
      echo "file esistente<br>";
  } else {
    echo "file non trovato<br>";
  }

  if (is_file('/var/www/html/miofile')) {
    echo "file valido<br>";
  } else {
    echo "la risorsa non esiste oppure non è un file<br>";
  }

  echo "la dimensione del file è di ".filesize('/var/www/html/miofile')." bytes<br>";
?>
}
</script>
