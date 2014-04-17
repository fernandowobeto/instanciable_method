<?php

class Instanciable{
	
	public function newInstance(){
		if(func_num_args() > 0):					
			$reflection = new \ReflectionClass(get_class($this));
			$myClassInstance = $reflection->newInstanceArgs(func_get_args());					
			return $myClassInstance;		
		endif;		
		return new self();
	}
	
}
