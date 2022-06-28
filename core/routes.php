<?php
	
	function cargarControlador($controlador){
		
		$nombreControlador = ucwords($controlador)."Controlador";
		$archivoControlador = 'Controlador/'.ucwords($nombreControlador).'.php';
		
		if(!is_file($archivoControlador)){
			
			$archivoControlador= 'Controlador/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}
		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}
	
	function cargarAccion($controlador, $accion, $id = null, $id2=null){
		
		if(isset($accion) && method_exists($controlador, $accion)){
			if($id == null){
				$controlador->$accion();
				} else {
				$controlador->$accion($id,$id2);
			}
			} else {
			$controlador->ACCION_PRINCIPAL();
		}	
	}
?>