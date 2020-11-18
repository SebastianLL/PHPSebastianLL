<!DOCTYPE html>
<html>
<head>
	<title>
		Calculadora PHP
	</title>
	<meta charset="utf-8">
</head>
<body>

	<fieldset>
		
		<form method="POST" action="app/test.php">
			
			<label>
				Primer número:
			</label>
			<input type="text" name="numero1">
			<br>

			<label>
				Segundo número:
			</label>
			<input type="text" name="numero2">

			<br>
			<label>
				Operación a realizar:
			</label>
			<select name="opcion">
				
				<option value="1">
					Suma
				</option>
				<option value="2">
					Resta
				</option>
				<option value="3">
					Multiplicación
				</option>
				<option value="4">
					División
				</option>
				
			</select>

			<button type="submit">Confirmar</button>
		</form>

	</fieldset>


</body>
</html>