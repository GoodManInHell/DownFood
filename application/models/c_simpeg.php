<?php
class m_simpeg extends CI_Controller {
	var $halo="Hello World";
	function katakata(){
		$kalimat=$this->halo."I am from model";
		return $kalimat;
	}
}
?>
