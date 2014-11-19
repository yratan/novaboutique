<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Saida extends MY_Controller {

	private $table = 'saida';
	private $title = 'Saída';

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('saida_model', 'saida');
		$this->load->model('produto_model', 'produto');
		$this->load->model('cadastro_model', 'cadastro');
		
		$produtos = $this->produto->getAll();
		$cadastros = $this->cadastro->getAll();
		
		
		$this->smarty->assign("produtoModel", $this->produto);
		$this->smarty->assign("cadastroModel", $this->cadastro);
		$this->smarty->assign("titulo", $this->title);
		$this->smarty->assign("produtos", $produtos);
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
		
		$config['base_url'] = base_url() . '/admin/saida/listar';
		$config['total_rows'] = $this->db->get("produto")->num_rows();
		$config['per_page'] = 20;
		
		$this->load->model('saida_model', 'saida');
		$this->load->model('configuracoes_model', 'configuracoes');
		$this->load->model('produto_model', 'produto');
		$this->load->model('cadastro_model', 'cadastro');
		
		$percentual = $this->configuracoes->getByKey('valor_percentual_lucro');
		
		$produto_id = $this->input->get_post("produto_id", true);
		$cadastro_id = $this->input->get_post("cadastro_id", true);
		$pagamento = $this->input->get_post("pagamento", true);
		
		$itens = $this->saida->getAllPaginate($config['per_page'], $offset, $produto_id, $cadastro_id, $pagamento);
		
		$this->pagination->initialize($config);
		$this->smarty->assign("paginacao", $this->pagination->create_links());
		
		
		$this->smarty->assign("itens", $itens);
		$this->smarty->assign("percentual", $percentual->valor);
		$this->smarty->display('admin/saida/listar.tpl');
	}
	
	public function cadastrar($id = null)
	{
		
		
		if($id)
		{
			$this->db->from($this->table);
			$this->db->where('id', $id);
			$item = $this->db->get();
			$item = $item->row();
			$dataVenda = new DateTime($item->dataVenda);
			$item->dataVenda = $dataVenda->format('d-m-Y');
			$this->smarty->assign("item", $item);
		}
		
		$this->smarty->assign("action", base_url() . 'admin/saida/cadastrarPOST/');
		$this->smarty->display('admin/saida/cadastrar.tpl');
	}
	
	public function cadastrarPOST()
	{
		
		$id = $this->input->get_post("id", true);
		$this->load->model('saida_model');
		
		$dataVenda = $this->input->get_post("dataVenda", true);
		$dataVenda = explode("-", $dataVenda);
		$dataVenda = $dataVenda[2] . "-" . $dataVenda[1] . "-" . $dataVenda[0];
		
		$saida = new Saida_model();
		$saida->setId($this->input->get_post("id", true));
		$saida->setProduto_id($this->input->get_post("produto_id", true));
		$saida->setCadastro_id($this->input->get_post("cadastro_id", true));
		$saida->setValor($this->input->get_post("valor", true));
		$saida->setPagamento($this->input->get_post("pagamento", true));
		$saida->setDataVenda($dataVenda);
		$saida->gravar();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Criado com sucesso';
		$retorno['insert'] = ($id) ? '0' : '1';
		
		echo json_encode($retorno);
	}
	
	public function deletar($id)
	{
		$this->load->model('saida_model');
		$entrada = new Saida_model();
		$entrada->setId($id);
		$entrada->delete();
		
		$retorno['status'] = 'ok';
		$retorno['msg'] = 'Deletado com sucesso';
		
		echo json_encode($retorno);
	}
	
	
}