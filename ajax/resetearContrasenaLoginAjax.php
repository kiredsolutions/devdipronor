<?php	
	$peticionAjax = true;
	require_once "../core/configGenerales.php";
	
	if(isset($_POST['usu_forgot'])){
		require_once "../controladores/cambiarContrase├▒aControlador.php";
		$insVarios = new cambiarContrase├▒aControlador();
		
		echo $insVarios->resetear_contrase├▒a_login_controlador();
	}else{
		echo "
			<script>
				swal({
					title: 'Error', 
					text: 'Los datos son incorrectos por favor corregir',
					type: 'error', 
					confirmButtonClass: 'btn-danger'
				});			
			</script>";
	}