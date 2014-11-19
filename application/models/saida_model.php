<?php
	
	class Saida_model extends CI_Model {
	
		var $id;
		var $produto_id;
		var $cadastro_id;
		var $valor;
		var $pagamento;
		var $dataVenda;
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
				$this->db->update('saida', $this); 
			}
			else
			{
				//insere novo registro
				$this->dataCadastro = date("Y-m-d H:i:s");
				$this->db->insert('saida', $this);
				
				//update estoque
				$this->load->model('produto_model', 'produto');
				$this->produto->updateEstoque($this->produto_id, 1, 'dec');
			}
		}
		
		public function getAllPaginate($per_page, $offset, $produto_id = null, $cadastro_id = null, $pagamento = null)
		{
			$where = array();
			
			if($cadastro_id)
				$where['cadastro_id'] = $cadastro_id;
			if($produto_id)
				$where['produto_id'] = $produto_id;
			if($pagamento)
				$where['pagamento'] = $pagamento;
			
			$this->db->from('saida');
			$this->db->where($where);
			$this->db->order_by("id", "desc");
			$this->db->limit($per_page,$offset);
			$result = $this->db->get()->result();
			//echo $this->db->last_query();
			return $result;
		}
		
		public function getLastEntries($limit)
		{
		
			$this->db->from('saida');
			$this->db->order_by("id", "desc");
			$this->db->limit($limit);
			$result = $this->db->get()->result();
			//echo $this->db->last_query();
			return $result;
		}
		
		public function getById($id)
		{
			return $this->db->get_where('saida', array('id' => $id))->row();
		}
		
		public function delete()
		{
			$saida = $this->getById($this->id);
			
			//update estoque
			$this->load->model('produto_model', 'produto');
			$this->produto->updateEstoque($saida->produto_id, 1, 'inc');
			
			$this->db->delete('saida', array('id' => $this->id)); 
		}
	    
	}

?>