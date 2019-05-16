<!DOCTYPE html>
<html>
	<head>
		<title>Invio file</title>
		<script src="https://ihabbol.vg/scripts/jquery.js" type="text/javascript"></script>
		<style>
      input#filename{
        <!--/*color: green;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;*/
        -->
      }
      input#invio{
        background-color: lightgreen;
        cursor: pointer;
        color: black;
        <!--/*padding: 10px 20px;*/-->
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        <!--/*border-color: white;*/-->
      }
		</style>
	</head>
	<body>
		<form method="post" action="file_exist.php">
			<input type="text" name="filename" id="filename">
			<input type="submit" value="Invio" id="invio">
		</form>
	</body>
</html>
