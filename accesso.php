<!DOCTYPE html>
<html>
	<head>
		<title>Accesso</title>
		<script src="https://ihabbol.vg/scripts/jquery.js" type="text/javascript"></script>
		<style>
      input#username, #password{
        <!--/*color: green;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;*/
        -->
      }
      input#accedi{
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
		<form method="post" action="controllaaccesso.php">
			<input type="text" name="username" id="username">
			<input type="password" name="password" id="password">
			<input type="submit" value="Accedi" id="accedi">
		</form>
	</body>
</html>
