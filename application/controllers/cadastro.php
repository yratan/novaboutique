<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends MY_Controller {

	private $table = 'cadastro';
	private $title = 'Cadastro';

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('cadastro_model', 'cadastro');
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
		
		$config['base_url'] = base_url() . '/admin/cadastro/listar';
		$config['total_rows'] = $this->db->get("cadastro")->num_rows();
		$config['per_page'] = 20;
		
		$this->load->model('cadastro_model', 'cadastro');
		$itens = $this->cadastro->getAllPaginate($config['per_page'], $offset);
		
		$this->pagination->initialize($config);
		$this->smarty->assign("paginacao", $this->pagination->create_links());
		
		
		$this->smarty->assign("itens", $itens);
		$this->smarty->display('admin/cadastro/listar.tpl');
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
		
		$this->smarty->assign("action", base_url() . 'admin/cadastro/cadastrarPOST/');
		$this->smarty->display('admin/cadastro/cadastrar.tpl');
	}
	
	public function cadastrarPOST()
	{
		
		$id = $this->input->get_post("id", true);
		$this->load->model('cadastro_model');
		
		$cadastro = new Cadastro_model();
		$cadastro->setId($this->input->get_post("id", true));
		$cadastro->setNome($this->input->get_post("nome", true));
		$cadastro->setSobrenome($this->input->get_post("sobrenome", true));
		$cadastro->setEndereco($this->input->get_post("endereco", true));
		$cadastro->setTelefone($this->input->get_post("telefone", true));
		$cadastro->setCelular($this->input->get_post("celular", true));
		$cadastro->setEmail($this->input->get_post("email", true));
		$cadastro->gravar();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Criado com sucesso';
		$retorno['insert'] = ($id) ? '0' : '1';
		
		echo json_encode($retorno);
	}
	
	public function deletar($id)
	{
		$this->load->model('cadastro_model');
		$entrada = new Cadastro_model();
		$entrada->setId($id);
		$entrada->delete();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Deletado com sucesso';
		
		echo json_encode($retorno);
	}
	
	
}