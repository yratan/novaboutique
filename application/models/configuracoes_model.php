<?php
	
	class Configuracoes_model extends CI_Model {
	
		var $id;
		var $chave;
		var $valor;
		var $dataCadastro;
		var $dataAlteracao;
	
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
	    
	    
		public function gravar()
		{
			
			if($this->id)
			{
				//atualiza
				$this->dataAlteracao = date("Y-m-d H:i:s");
				unset($this->dataCadastro);
				$this->db->where('id', $this->id);
				$this->db->update('configuracoes', $this); 
			}
			else
			{
				//insere novo registro
				$this->dataCadastro = date("Y-m-d H:i:s");
				$this->db->insert('configuracoes', $this);
			}
			
			
		}
		
		public function getAll()
		{
			$this->db->from('configuracoes');
			$this->db->order_by("id", "desc");
			$result = $this->db->get()->result();
			return $result;
		}
		
		public function getByKey($key)
		{
			return $this->db->get_where('configuracoes', array('chave' => $key))->row();
		}
		
		public function delete()
		{
			$this->db->delete('configuracoes', array('id' => $this->id)); 
		}
	    
	}

?>