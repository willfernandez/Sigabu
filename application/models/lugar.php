<?php

/*
 * Copyright (c) 2011 Jhon Adri�n Cer�n <jadrian.ceron@gmail.com>
 *
 * This file is part of the Sigabu project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Lugar extends VanillaModel {
	
	function nuevo ($data) {
		$sql = '
		INSERT INTO lugares SET ';
		foreach ($data as $field => $value){
			$sql .= $field . ' = \'' . $value . '\', ';
		}
		$sql .= 'created_at = NOW()';
		return $this->query($sql);
	}
	
	function eliminar($datos){
	
		$j = 0; ## n�mero de querys exitosos
	
		## construyo las sentencias de eliminaci�n
		for($i = 0; $i < count($datos); $i++){
			## valido que id sea n�mero
			if(preg_match('/^[\d]{1,}$/', $datos[$i])){
				## query exitoso
				if($this->query('DELETE FROM lugares WHERE id = \'' . $datos[$i] . '\'')){
					$j++;
				}
			}
		}
	
		return (array('trueQuery' => $j, 'totalQuery' => count($datos)));
			
	}
	
	function consultar_lugar ($id) {
		return $this->query('SELECT * FROM lugares WHERE id = \'' . $id . '\'');
	}
	
	function get_lugares (){
		return $this->query('SELECT * FROM lugares');
	}
	
	function editar($id, $data){	
		$sql = '
		UPDATE lugares SET ';
		foreach ($data as $field => $value) {
			$sql .= $field . ' = ' . ((strlen($value)==0) ? 'NULL' : ' \'' . $value . '\'') . ', ';
		}
		$sql = substr_replace($sql, '', -2);
		$sql .= ' WHERE id = \'' . $id .'\'';
		return $this->query($sql);
	}
	
}