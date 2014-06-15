<form action="controllers/{$archivo}.php" method="POST">
	<fieldset>
		<legend>{$title}</legend>
		<label for="cuenta">Cuenta: </label>
		<input type="text" id="cuenta" name="cuenta" />
		<br />
		<label for="password">Password: </label>
		<input type="password" id="password" name="password" />
		<br />
		<button type="submit">{$title}</button>
	</fieldset>	
</form>