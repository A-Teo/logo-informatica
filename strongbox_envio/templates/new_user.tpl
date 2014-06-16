<form name="{$archivo}" action="controllers/{$archivo}.php" method="POST">
	<fieldset>
		<legend>{$title}</legend>
		<label for="cuenta">Cuenta: </label>
		<input type="text" id="cuenta" name="cuenta" required="required" />
		<br />
		<label for="password">Password: </label>
		<input type="password" id="password" name="password" required="required" />
		<input type="checkbox" name="show" value="show" onchange="passShow({$archivo})"> Mostrar
		<br />
		<label for="passwordConf">Confirmar Password: </label>
		<input type="password" id="passwordConf" name="passwordConf" required="required" oninput="check(this, {$archivo})" />
		<br />
		<button type="submit">{$title}</button>
	</fieldset>	
</form>