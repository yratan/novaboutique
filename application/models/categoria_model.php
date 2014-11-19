<?php
	
	class Categoria_model extends CI_Model {
	
		var $id;
		var $nome;
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
	    
		public function getAll($order = 'id', $direction = 'desc')
		{
			$this->db->order_by($order, $direction);
			return $this->db->get('categoria')->result();
		}
		
		public function getById($id)
		{
			return $this->db->get_where('categoria', array('id' => $id))->row();
		}
		
		public function getAllPaginate($per_page, $offset)
		{
			$this->db->from('categoria');
			$this->db->order_by("id", "desc");
			$this->db->limit($per_page,$offset);
			$result = $this->db->get()->result();
			//echo $this->db->last_query();
			return $result;
		}
	    
		public function gravar()	
		{
			
			if($this->id)
			{
				//atualiza
				$this->dataAlteracao = date("Y-m-d H:i:s");
				unset($this->dataCadastro);
				$this->db->where('id', $this->id);
				$this->db->update('categoria', $this); 
			}
			else
			{
				//insere novo registro
				$this->dataCadastro = date("Y-m-d H:i:s");
				$this->db->insert('categoria', $this);
			}
			
		}
		
		public function delete()
		{
			$this->db->delete('categoria', array('id' => $this->id)); 
		}
	}

?>