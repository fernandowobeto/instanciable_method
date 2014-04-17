<?php

class User extends Instanciable implements InstanciableInterface{
	private $uniqueid;
	
	public function __construct($prefix = ''){
		$this->uniqueid = $prefix.uniqid();
	}
	
	public function getId(){
		return $this->uniqueid;
	}
	
}