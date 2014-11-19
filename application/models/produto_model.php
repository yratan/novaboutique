<?php
	
	class Produto_model extends CI_Model {
	
		var $id;
		var $nome;
		var $foto;
		var $categoria_id;
		var $estoque;
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
			return $this->db->get('produto')->result();
		}
		
		public function getById($id)
		{
			return $this->db->get_where('produto', array('id' => $id))->row();
		}
		
		public function getAllPaginate($per_page, $offset)
		{
			$this->db->from('produto');
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
				$this->db->update('produto', $this); 
			}
			else
			{
				//insere novo registro
				$this->dataCadastro = date("Y-m-d H:i:s");
				$this->db->insert('produto', $this);
			}
			
		}
		
		public function updateEstoque($id, $qtd, $action)
		{
			$produto = $this->getById($id);
			
			if($action == 'inc')
			{
				$estoque = $produto->estoque + $qtd;
			}
			else
			{
				$estoque = $produto->estoque - $qtd;
			}
			
			$this->db->where('id', $id);
			$this->db->update('produto', array('estoque' => $estoque));
		}
		
		public function delete()
		{
			$this->db->delete('produto', array('id' => $this->id)); 
		}
		
		public function getLastEntries($limit)
		{
		
			$this->db->from('produto');
			$this->db->order_by("id", "desc");
			$this->db->limit($limit);
			$result = $this->db->get()->result();
			//echo $this->db->last_query();
			return $result;
		}
		
		
	}

?>