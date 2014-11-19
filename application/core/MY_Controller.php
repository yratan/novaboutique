<?php

    class MY_Controller extends CI_Controller {

    	public function __construct()
        {
        	parent::__construct();
			if(!$this->session->userdata('id') && $this->router->fetch_method() != 'login' && $this->router->fetch_method() != 'loginPOST')
			{
				$this->session->set_userdata('redirect', $_SERVER["REQUEST_URI"]);
				header("Location: " . base_url(). "admin/login/");
			}
			else
			{
				$this->smarty->assign("nomeUsuario", $this->session->userdata('nome'));
			}
			$this->smarty->assign("base_url", base_url());
			
        }

		public function __destruct()
		{

		}       
	}