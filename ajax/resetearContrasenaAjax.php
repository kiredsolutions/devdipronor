<?php	
	$peticionAjax = true;
	require_once "../core/configGenerales.php";
	
	if(isset($_POST['users_id'])){
		require_once "../controladores/cambiarContrase├▒aControlador.php";
		$insVarios = new cambiarContrase├▒aControlador();
		
		echo $insVarios->resetear_contrase├▒a_controlador();
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