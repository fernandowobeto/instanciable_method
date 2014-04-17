<?php

class User extends Instanciable{
	private $uniqueid;
	
	public function __construct($prefix = ''){
		$this->uniqueid = $prefix.uniqid();
	}
	
	public function getId(){
		return $this->uniqueid;
	}
	
}