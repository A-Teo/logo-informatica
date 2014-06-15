<nav>
{foreach from=$menuUsuario key=id item=value}
    <a href="?page={$id}" > {$value}</a> |
{/foreach}
</nav>
<br />