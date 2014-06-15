{if $page == 0}
	Bienvenido
	{$smarty.session.cuenta}
{elseif $page == 1 }
	<form action="controllers/insert_page.php" method="POST">
		<fieldset>
			<legend>Nueva Entrada</legend>
			<label for="titulo">T&iacute;tulo: </label>
			<input type="text" id="titulo" name="titulo" required="required" />
			<br />
			<label for="url">URL: </label>
			<input type="url" id="url" name="url" required="required" />
			<br />
			<label for="username">Username: </label>
			<input type="text" id="username" name="username" required="required" />
			<br />
			<label for="password">Password: </label>
			<input type="text" id="password" name="password" required="required" />
			<br />
			<input type="submit"/>
		</fieldset>
	</form>
{elseif $page == 2 }
	{foreach from=$pages item=row}
		{foreach from=$row item=col}
	   	{$col}
	   {/foreach}
	{/foreach}
{elseif $page == 3 }
	{include file="login.tpl" archivo="new_user" title="Nuevo Usuario"}
{elseif $page == 4 }
	<form action="controllers/logout.php" method="POST">
			<input type="submit" value="Confirmar Logout"/>
	</form>	
{/if}