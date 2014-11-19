<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	//teste
	public function __construct()
	{
		parent::__construct();
		$this->smarty->assign("base_url", base_url());
		
		
		error_reporting(E_ALL);
		
		//$this->session->unset_userdata('id');
		
	}

	public function header()
	{
				$this->smarty->display('admin/inc/headerNovo.tpl');

	}

	public function index()
	{
		$this->load->model('entrada_model', 'entrada');
		$this->load->model('saida_model', 'saida');
		$this->load->model('produto_model', 'produto');
		$this->load->model('cadastro_model', 'cadastro');
		
		$entradas = $this->entrada->getLastEntries(5);
		$saidas   = $this->saida->getLastEntries(5);
		$produtos = $this->produto->getLastEntries(5);
		$cadastros = $this->cadastro->getLastEntries(5);
		
		$this->smarty->assign('produtoModel', $this->produto);
		$this->smarty->assign('cadastroModel', $this->cadastro);
		$this->smarty->assign('entradas', $entradas);
		$this->smarty->assign('cadastros', $cadastros);
		$this->smarty->assign('saidas', $saidas);
		$this->smarty->assign('produtos', $produtos);
		$this->smarty->display('admin/index.tpl');
	}
	
	
	
	public function criarUsuario()
	{
		
		$id = $this->input->get_post("id", true);
		
		if($id)
		{
			$this->db->from('usuario');
			$this->db->where('id', $id);
			$usuario = $this->db->get();
			$usuario = $usuario->row();
			$this->smarty->assign("usuario", $usuario);
		}
		
		
		$this->smarty->display('admin/criarUsuario.tpl');
	}
	
	public function listarUsuario()
	{
		$this->db->from('usuario');
		$this->db->order_by("nome", "asc");
		$usuarios = $this->db->get();
		$this->smarty->assign("usuarios", $usuarios);
		$this->smarty->display('admin/listarUsuario.tpl');
	}
	
	
	public function criarUsuarioPOST()
	{
	   
	   $id = $this->input->get_post("id", true);
	   $nome = $this->input->get_post("nome", true);
	   $email = $this->input->get_post("email", true);
	   $login = $this->input->get_post("login", true);
	   $senha = $this->input->get_post("senha", true);
	   $senha2 = $this->input->get_post("senha2", true);
	   
	   $data = array();
	   
	   if($senha && $senha2 )
	   {
		  if($senha <> $senha2)
		  {
			  $retorno["status"] = "errorSenha";
			  $retorno["msg"] = "As senhas não conferem.";
			  echo json_encode($retorno);
			  return;
		  }
		  else
		  {
			 $data["senha"] = base64_encode($senha);
		  }
	  }
	   
	  $data['nome']  = $nome;
	  $data['email'] = $email;
	  $data['login'] = $login;
	  
	  if($id)
	  {
		 $data['dataAlteracao'] = date("Y-m-d H:i:s");
	  }
	  
	   if($id)
	   {
		$this->db->where('id', $id);
		$this->db->update('usuario', $data);
		$success = true;
	   }
	   else
	   {
		$this->db->insert('usuario', $data);
		$success = true;
		
	   }

	   if($success)
	   {
		$retorno["status"] = "ok";
		$retorno["url"] = base_url() . "index.php?c=admin&m=listarUsuario";
		
	   }
	   else
	   {
		$retorno["status"] = "ok";
	  }
	   
	   echo json_encode($retorno);
	   
	}
	
	public function deleteUsuario()
	{
	   $id = $this->input->get_post("id", true);
	   
	   if($this->db->delete('usuario', array('id' => $id)))
	   {
		$retorno["status"] = "ok";
		$retorno["url"] = base_url() . "index.php?c=admin&m=listarUsuario";
	   }
	   else
	   {
		$retorno["status"] = "error";
	   }
	   
	   echo json_encode($retorno);
	   
	}
	
	
	public function login()
	{
		$this->smarty->display('admin/login.tpl');
	}
	
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('redirect');
		header("Location: " . base_url(). "admin/login");
		//$this->smarty->display('admin/login.tpl');
	}
	
	public function loginPOST()
	{
		$login = $this->input->get_post("login", true);
		$senha = $this->input->get_post("senha", true);
		//$senha = $this->encrypt->encode($senha);
		
		
		$senha = base64_encode($senha);
		
		$this->db->from('usuario');
		$this->db->where('login', $login);
		$this->db->where('senha', $senha);
		$usuario = $this->db->get();
		$usuario = $usuario->row();
		
		if($usuario)
		{
		   $retorno["status"] = "ok";
		   $retorno["url"] = ($this->session->userdata('redirect') ? $this->session->userdata('redirect') : base_url());
		   $this->session->unset_userdata('redirect');
		   $this->session->set_userdata(array('id' => $usuario->id, 'nome' => $usuario->nome, 'login' => $usuario->login));
		}
		else
		{
		   $retorno["status"] = "error";
		}
		
		echo json_encode($retorno);
	  
	}
	
	
}