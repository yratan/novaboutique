<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends MY_Controller {

	private $table = 'fornecedor';
	private $title = 'Fornecedores';

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('fornecedor_model', 'fornecedor');
		$this->smarty->assign("titulo", $this->title);
	}


	public function index()
	{
		$this->smarty->display('admin/index.tpl');
	}
	
	public function listar($offset = 0)
	{
		$this->load->library('pagination');
		$offset = ($this->input->get_post("per_page")) ? $this->input->get_post("per_page") - 1 : 0;
		
		$config['base_url'] = base_url() . '/admin/fornecedor/listar';
		$config['total_rows'] = $this->db->get("fornecedor")->num_rows();
		$config['per_page'] = 20;
		
		$this->load->model('fornecedor_model', 'fornecedor');
		$itens = $this->fornecedor->getAllPaginate($config['per_page'], $offset);
		
		$this->pagination->initialize($config);
		$this->smarty->assign("paginacao", $this->pagination->create_links());
		
		
		$this->smarty->assign("itens", $itens);
		$this->smarty->display('admin/fornecedor/listar.tpl');
	}
	
	public function cadastrar($id = null)
	{
		
		if($id)
		{
			$this->db->from($this->table);
			$this->db->where('id', $id);
			$item = $this->db->get();
			$item = $item->row();
			$this->smarty->assign("item", $item);
		}
		
		$this->smarty->assign("action", base_url() . 'admin/fornecedor/cadastrarPOST/');
		$this->smarty->display('admin/fornecedor/cadastrar.tpl');
	}
	
	public function cadastrarPOST()
	{
		
		$id = $this->input->get_post("id", true);
		$this->load->model('fornecedor_model');
		
		$fornecedor = new Fornecedor_model();
		$fornecedor->setId($this->input->get_post("id", true));
		$fornecedor->setNome($this->input->get_post("nome", true));
		$fornecedor->setCnpj($this->input->get_post("cnpj", true));
		$fornecedor->setEndereco($this->input->get_post("endereco", true));
		$fornecedor->setTelefone($this->input->get_post("telefone", true));
		$fornecedor->setCelular($this->input->get_post("celular", true));
		$fornecedor->setEmail($this->input->get_post("email", true));
		$fornecedor->gravar();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Criado com sucesso';
		$retorno['insert'] = ($id) ? '0' : '1';
		
		echo json_encode($retorno);
	}
	
	public function deletar($id)
	{
		$this->load->model('fornecedor_model');
		$entrada = new Fornecedor_model();
		$entrada->setId($id);
		$entrada->delete();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Deletado com sucesso';
		
		echo json_encode($retorno);
	}
	
	
}