<?php
	
	class Cadastro_model extends CI_Model {
	
		var $id;
		var $nome;
		var $sobrenome;
		var $endereco;
		var $telefone;
		var $celular;
		var $email;
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
	    
		public function getAll()
		{
			return $this->db->get('cadastro')->result();
			
		}
	    
		public function getAllPaginate($per_page, $offset)
		{
			$this->db->from('cadastro');
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
				$this->db->update('cadastro', $this); 
			}
			else
			{
				//insere novo registro
				$this->dataCadastro = date("Y-m-d H:i:s");
				$this->db->insert('cadastro', $this);
			}
		}
		
		public function getById($id)
		{
			return $this->db->get_where('cadastro', array('id' => $id))->row();
		}
		
		public function delete()
		{
			$this->db->delete('cadastro', array('id' => $this->id)); 
		}
		
		public function getLastEntries($limit)
		{
		
			$this->db->from('cadastro');
			$this->db->order_by("id", "desc");
			$this->db->limit($limit);
			$result = $this->db->get()->result();
			//echo $this->db->last_query();
			return $result;
		}
	    
	}

?>