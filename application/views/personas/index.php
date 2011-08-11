<?php 
if(isset($showMensaje) && is_array($showMensaje) && count($showMensaje)!=0){
	?>
	<div class="flash">
		<div class="message <?php echo $showMensaje['tipo']?>">
			<p><?php echo $showMensaje['mensaje']?></p>
		</div>
	</div>
	<?php 
}
?>

<form action="#" method="get" class="form">
<div class="columns wat-cf">
	<div class="column left">
		<label class="label">Mostrar</label>
		<select id="reg_pag">
			<option value="10" selected="selected">10</option>
			<option value="20">20</option>
			<option value="50">50</option>
			<option value="100">100</option>
		</select>
		registros por p�gina
	</div>
	<div class="column right">
		<label class="label">Buscar</label>
		<input type="text" id="search" size="45"/>
	</div>
</div>
</form>
<div id="dynamic" style="padding-top:15px;"> <!-- div donde cargo el ajax -->
	
</div> <!-- end dynamic -->
