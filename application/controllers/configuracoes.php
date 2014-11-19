<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuracoes extends MY_Controller {

	private $table = 'configuracoes';
	private $title = 'Configurações';

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('configuracoes_model', 'configuracoes');
		$this->smarty->assign("titulo", $this->title);
	}


	public function index()
	{
		$this->smarty->display('admin/index.tpl');
	}
	
	public function listar($offset = 0)
	{
		$this->load->model('configuracoes_model', 'configuracoes');
		$itens = $this->configuracoes->getAll();
		$this->smarty->assign("itens", $itens);
		$this->smarty->display('admin/configuracoes/listar.tpl');
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
		
		$this->smarty->assign("action", base_url() . 'admin/configuracoes/cadastrarPOST/');
		$this->smarty->display('admin/configuracoes/cadastrar.tpl');
	}
	
	public function cadastrarPOST()
	{
		
		$id = $this->input->get_post("id", true);
		$this->load->model('configuracoes_model');
		
		$configuracoes = new Configuracoes_model();
		$configuracoes->setId($this->input->get_post("id", true));
		$configuracoes->setChave($this->input->get_post("chave", true));
		$configuracoes->setValor($this->input->get_post("valor", true));
		$configuracoes->gravar();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Criado com sucesso';
		$retorno['insert'] = ($id) ? '0' : '1';
		
		echo json_encode($retorno);
	}
	
	public function deletar($id)
	{
		$this->load->model('configuracoes_model');
		$entrada = new Configuracoes_model();
		$entrada->setId($id);
		$entrada->delete();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Deletado com sucesso';
		
		echo json_encode($retorno);
	}
	
	
	
	
}