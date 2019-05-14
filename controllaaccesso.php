<script src="https://ihabbol.vg/scripts/jquery.js" type="text/javascript"></script>

<head>
  <title>Credenziali</title>
</head>

<style>
    table#prova{
			margin: 5 auto;
      border: 5px solid black;
			border-collapse: collapse;
		}
		table#prova td{
			height: 50;
			width: 50px;
			color: #000;
      border: 5px solid black;
			text-align: center;
			font-size: 30px;
			font-family: sans-serif;
      cursor: pointer;
		}
</style>

<?php
function richiesta($req){
	return array(
		array("nome" => $_POST["username"], "cognome" => $_POST["password"]),
		/*array("nome" => "nome2", "cognome" => "cognome2"),
		array("nome" => "nome3", "cognome" => "cognome3")*/
	);
}
$i=0;
function scorrimento($risorsa){
	global $i;
	if(isset($risorsa[$i])){
		$i++;
		return $risorsa[$i-1];
	}else{
		return false;
	}
}

if($_POST["username"] == "utente" && $_POST["password"] == "password"){
	echo "ACCESSO CONSENTITO";
	$studenti = richiesta("SELECT * FROM studenti WHERE classe = '4BIN'");
?>

	<table id="prova">
		<tr>
			<td font-faily="sans-serif"><b>USERNAME</b></td>
			<td><b>PASSWORD</b></td>
		</tr>
		<?php
			while($studente = scorrimento($studenti)){
				echo "<tr>";
				echo "<td>".$studente["nome"]."</td>";
				echo "<td>".$studente["cognome"]."</td>";
				echo "</tr>";
			}
		?>
	</table>

<?php
}else{
	echo "ACCESSO NEGATO";
}
?>

<script>
     $('td').hover(function(){
           $(this).css('color','white');
           $(this).css('background-color','green');
     }, function(){
           $(this).css('color','black');
           $(this).css('background-color','white');
     });
</script>

<script>if(input#testo=="prova") $(input#testo).css('background','yellow');</script>
