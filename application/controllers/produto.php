<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends MY_Controller {

	private $table = 'produto';
	private $title = 'Produto';

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('produto_model', 'produto');
		$this->smarty->assign("titulo", $this->title);
	}


	public function index()
	{
		$this->smarty->display('admin/index.tpl');
	}
	
	public function categorias($id = null)
	{
		if($id)
		{
			$this->db->from('categoria');
			$this->db->where('id', $id);
			$item = $this->db->get();
			$item = $item->row();
			$this->smarty->assign("item", $item);
		}
		
		$this->load->model('Categoria_model', 'categoria');
		$itens = $this->categoria->getAll();
		$this->smarty->assign('itens', $itens);
		$this->smarty->assign("action", base_url() . 'admin/produto/categoriaPOST/');
		$this->smarty->display('admin/produto/categorias.tpl');
	}
	
	public function listar($offset = 0)
	{
		$this->load->library('pagination');
		$offset = ($this->input->get_post("per_page")) ? $this->input->get_post("per_page") - 1 : 0;
		
		$config['base_url'] = base_url() . '/admin/produto/listar';
		$config['total_rows'] = $this->db->get("produto")->num_rows();
		$config['per_page'] = 20;
		
		$this->load->model('produto_model', 'produto');
		$itens = $this->produto->getAllPaginate($config['per_page'], $offset);
		
		$this->pagination->initialize($config);
		$this->smarty->assign("paginacao", $this->pagination->create_links());
		
		$this->load->model('categoria_model', 'categoria');
		$this->smarty->assign("categoriaModel", $this->categoria);
		$this->smarty->assign("itens", $itens);
		$this->smarty->display('admin/produto/listar.tpl');
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
		
		$this->load->model('categoria_model', 'categoria');
		
		$categorias = $this->categoria->getAll();
		
		$this->smarty->assign("categorias", $categorias);
		$this->smarty->assign("action", base_url() . 'admin/produto/cadastrarPOST/');
		$this->smarty->display('admin/produto/cadastrar.tpl');
	}
	
	public function cadastrarPOST()
	{
		
		$id = $this->input->get_post("id", true);
		$this->load->model('produto_model');
		
		$produto = new Produto_model();
		$produto->setId($this->input->get_post("id", true));
		$produto->setNome($this->input->get_post("nome", true));
		$produto->setCategoria_id($this->input->get_post("categoria_id", true));
		$produto->setEstoque($this->input->get_post("estoque", true));
		$produto->setFoto($this->input->get_post("foto", true));
		$produto->gravar();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Criado com sucesso';
		$retorno['insert'] = ($id) ? '1' : '0';
		
		echo json_encode($retorno);
	}
	
	public function categoriaPOST()
	{
		
		$id = $this->input->get_post("id", true);
		$this->load->model('categoria_model');
		
		$categoria = new Categoria_model();
		$categoria->setId($this->input->get_post("id", true));
		$categoria->setNome($this->input->get_post("nome", true));
		$categoria->gravar();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Criado com sucesso';
		$retorno['insert'] = ($id) ? '0' : '1';
		$retorno['redirect'] = base_url() . 'admin/produto/categorias/';
		
		echo json_encode($retorno);
	}
	
	public function categoriaDeletar($id)
	{
		
		$this->load->model('categoria_model');
		$categoria = new Categoria_model();
		$categoria->setId($id);
		$categoria->delete();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Deletado com sucesso';
		//$retorno['redirect'] = base_url() . 'admin/produto/categorias/';
		echo json_encode($retorno);
	}
	
	public function deletar($id)
	{
		$this->load->model('produto_model');
		$entrada = new Produto_model();
		$entrada->setId($id);
		$entrada->delete();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Deletado com sucesso';
		
		echo json_encode($retorno);
	}
	
	
}