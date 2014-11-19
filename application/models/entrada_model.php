<?php
	
	class Entrada_model extends CI_Model {
	
		var $id;
		var $produto_id;
		var $quantidade;
		var $valor;
		var $dataCompra;
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
			
			$key = (substr($methodName, 3));
			$firstLetter = strtolower(substr($key, 0, 1));
			$key = $firstLetter . substr($key, 1);
			
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
				$this->db->update('entrada', $this); 
			}
			else
			{
				//insere novo registro
				$this->dataCadastro = date("Y-m-d H:i:s");
				$this->db->insert('entrada', $this);
				
				//update estoque
				$this->load->model('produto_model', 'produto');
				$this->produto->updateEstoque($this->produto_id, $this->quantidade, 'inc');
			}
		}
		
		public function getAllPaginate($per_page, $offset, $produto_id = null, $fornecedor_id = null)
		{
			$where = array();
			
			if($produto_id)
				$where['produto_id'] = $produto_id;
				
			if($fornecedor_id)
				$where['fornecedor_id'] = $fornecedor_id;
			
			$this->db->from('entrada');
			$this->db->where($where);
			$this->db->order_by("id", "desc");
			$this->db->limit($per_page,$offset);
			$result = $this->db->get()->result();
			//echo $this->db->last_query();
			return $result;
		}
		
		public function getLastEntries($limit)
		{
		
			$this->db->from('entrada');
			$this->db->order_by("id", "desc");
			$this->db->limit($limit);
			$result = $this->db->get()->result();
			//echo $this->db->last_query();
			return $result;
		}
		
		public function getById($id)
		{
			return $this->db->get_where('entrada', array('id' => $id))->row();
		}
		
		public function delete()
		{
			$entrada = $this->getById($this->id);
			
			//update estoque
			$this->load->model('produto_model', 'produto');
			$this->produto->updateEstoque($entrada->produto_id, $entrada->quantidade, 'dec');
			
			$this->db->delete('entrada', array('id' => $this->id));
		}
	    
	}

?>