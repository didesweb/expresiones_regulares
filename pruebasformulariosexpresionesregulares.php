<?php 
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');
?>
<?php
	$valida_nm = $_POST["nombre"];
	if (preg_match("/^[aA-zZ]{3,29}$/", $valida_nm)) {
		echo '<p style="color:green">Nombre correcto</p>'; 
	}else{
		echo '<p style="color:red">Nombre incorrecto</p>'; 
	}
?>
<?php
	$valida_ml = $_POST["correo"];
	if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$valida_ml)) { 
		echo '<p style="color:green">Correo electronico valido</p>'; 
	}else {
		echo '<p style="color:red">Correo electronico no valido</p>'; 
	}
?>
<?php
	$valida_ct = $_POST["contraseña"];
	if (preg_match("/^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*$/", $valida_ct)) {
		echo '<p style="color:green">Contraseña segura</p>'; 
	}else{
		echo '<p style="color:red">La contraseña debe incluir mayúsculas, minúsculas, números, signos y más de seis caracteres</p>'; 
	}
?>
<?php
	$valida_ed = $_POST["edad"];
	if (preg_match("/^[0-9]{1,2}$/", $valida_ed)) {
		echo '<p style="color:green">Edad correcta</p>'; 
	}else{
		echo '<p style="color:red">Edad incorrecta</p>'; 
	}
?>
<?php
	$valida_tlf = $_POST["telefono"];
	if (preg_match("/^[9|8|6|7][0-9]{8}$/", $valida_tlf)) {
		echo '<p style="color:green">Teléfono correcto</p>'; 
	}else{
		echo '<p style="color:red">Teléfono incorrecto</p>'; 
	}
?>
<?php
	$valida_mv = $_POST["movil"];
	if (preg_match("/^6[0-9]{8}$/", $valida_mv)) {
		echo '<p style="color:green">Movil correcto</p>'; 
	}else{
		echo '<p style="color:red">Movil incorrecto</p>'; 
	}
?>
