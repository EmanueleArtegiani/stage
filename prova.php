<script src="https://ihabbol.vg/scripts/jquery.js" type="text/javascript"></script>
<style>
	body{
		background: rgb(2,0,36);
        	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
	}
	table#prova{
		margin: 5 auto;
        	border: 5px solid white;
		border-collapse: collapse;
	}
	table#prova td{
		height: 50;
		width: 50px;
		color: #fff;
        	border: 5px solid white;
		text-align: center;
		font-size: 30px;
		font-family: sans-serif;
        	cursor: pointer;
	}
        input#testo{
        	position: relative;
        	top: 50px;
        	left: 44%;
        	outline: 3px solid red;
         }
</style>
<?php
$studenti=array(
		array("nome" => "Mario", "cognome" => "Rossi"),
		array("nome" => "Giovanni", "cognome" => "Bianchi"),
		array("nome" => "Luigi", "cognome" => "Verdi")
	);

function scorrimento($studenti){
    foreach($studenti as $studente){
    	echo "<tr>";
	echo "<td>".$studente["nome"]."</td>";
	echo "<td>".$studente["cognome"]."</td>";
	echo "</tr>";
    }
}
?>
<table border="5px" border-color="White" id="prova">
	<tr>
		<td><b>NOME</b></td>
		<td><b>COGNOME</b></td>
	</tr>
<?php
	scorrimento($studenti);
?>
</table>
	<input type="text" id="testo">
<script>
     $('td').hover(function(){
           $(this).css('color','yellow');
     }, function(){
           $(this).css('color','#fff');
     });
</script>
<script>if(input#testo=="prova") $(input#testo).css('background','yellow');</script>
