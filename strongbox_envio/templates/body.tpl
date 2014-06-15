{if $state == 0}
	{include file="login.tpl"  archivo="logincheck" title="Login"}
{else}
   {include file = "menu_usuario.tpl"}
   {include file = "user_body.tpl"}	
{/if}