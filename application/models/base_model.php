<?php
	
	class Base_model extends CI_Model {
	
		function __construct()
		{
		    // Call the Model constructor
		    parent::__construct();
		}
	    
		public function __call($methodName, $params = null)
		{
			$methodPrefix = substr($methodName, 0, 3);
			$key = strtolower(substr($methodName, 3));
			
			if($methodPrefix == 'set' && count($params) == 1)
			{
				$value = $params[0];
				$this->$key = $value;
			}
			elseif($methodPrefix == 'get')
			{
				return $this->$key;
			}
		}
	}
?>