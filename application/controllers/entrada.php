<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entrada extends MY_Controller {

	private $table = 'entrada';
	private $title = 'Entrada';

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('entrada_model', 'saida');
		$this->load->model('produto_model', 'produto');
		$this->load->model('cadastro_model', 'cadastro');
		$this->load->model('fornecedor_model', 'fornecedor');
		
		$produtos = $this->produto->getAll();
		$cadastros = $this->cadastro->getAll();
		$fornecedores = $this->fornecedor->getAll();
		
		
		$this->smarty->assign("produtoModel", $this->produto);
		$this->smarty->assign("cadastroModel", $this->cadastro);
		$this->smarty->assign("fornecedorModel", $this->fornecedor);
		$this->smarty->assign("titulo", $this->title);
		$this->smarty->assign("produtos", $produtos);
		$this->smarty->assign("fornecedores", $fornecedores);
		$this->smarty->assign("cadastros", $cadastros);
		
	}


	public function index()
	{
		$this->smarty->display('admin/index.tpl');
	}
	
	public function listar($offset = 0)
	{
		
		$this->load->library('pagination');
		$offset = ($this->input->get_post("per_page")) ? $this->input->get_post("per_page") - 1 : 0;
		
		$config['base_url'] = base_url() . '/admin/entrada/listar';
		$config['total_rows'] = $this->db->get("produto")->num_rows();
		$config['per_page'] = 20;
		
		$this->load->model('entrada_model', 'entrada');
		$this->load->model('produto_model', 'produto');
		
		$this->load->model('cadastro_model', 'cadastro');
		$this->load->model('configuracoes_model', 'configuracoes');
		
		$percentual = $this->configuracoes->getByKey('valor_percentual_lucro');
		
		$produto_id = $this->input->get_post("produto_id", true);
		$fornecedor_id = $this->input->get_post("fornecedor_id", true);
		
		$itens = $this->entrada->getAllPaginate($config['per_page'], $offset, $produto_id, $fornecedor_id);
		
		$this->pagination->initialize($config);
		$this->smarty->assign("paginacao", $this->pagination->create_links());
		
		
		$this->smarty->assign("itens", $itens);
		$this->smarty->assign("percentual", $percentual->valor);
		$this->smarty->display('admin/entrada/listar.tpl');
	}
	
	public function cadastrar($id = null)
	{
		if($id)
		{
			$this->db->from($this->table);
			$this->db->where('id', $id);
			$item = $this->db->get();
			$item = $item->row();
			
			$dataCompra = new DateTime($item->dataCompra);
			$item->dataCompra = $dataCompra->format('d-m-Y');
			$this->smarty->assign("item", $item);
		}
		
		$this->smarty->assign("action", base_url() . 'admin/entrada/cadastrarPOST/');
		$this->smarty->display('admin/entrada/cadastrar.tpl');
	}
	
	public function cadastrarPOST()
	{
		
		$id = $this->input->get_post("id", true);
		$this->load->model('entrada_model');
		
		$dataCompra = $this->input->get_post("dataCompra", true);
		$dataCompra = explode("-", $dataCompra);
		$dataCompra = $dataCompra[2] . "-" . $dataCompra[1] . "-" . $dataCompra[0];
		
		$entrada = new Entrada_model();
		$entrada->setId($this->input->get_post("id", true));
		$entrada->setProduto_id($this->input->get_post("produto_id", true));
		$entrada->setQuantidade($this->input->get_post("quantidade", true));
		$entrada->setValor($this->input->get_post("valor", true));
		$entrada->setDataCompra($dataCompra);
		$entrada->gravar();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Criado com sucesso';
		$retorno['insert'] = ($id) ? '0' : '1';
		
		
		echo json_encode($retorno);
	}
	
	public function deletar($id)
	{
		$this->load->model('entrada_model');
		$entrada = new Entrada_model();
		$entrada->setId($id);
		$entrada->delete();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Deletado com sucesso';
		
		echo json_encode($retorno);
	}
	
	
}