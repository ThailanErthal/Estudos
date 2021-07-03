<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //Sempre deixar definido, pois se não achar o diretório vai aparecer a mensagem.

class Exemplo1 extends CI_Controller { //A classe sempre deve ter o mesmo nome do arquivo controller

	function __contruct(){ //construdor do controller, nele é possivel carregar as librari, helpers, models que serão utilizados nesse controller
		parent::__contruct();//Chamando o construtor da classe pai
		$this->load->model('Exemplo1_model');
	}

	public function index(){
		$dados['titulo'] = 'Olá, mundo!!!';
		$dados['conteudo'] = ' lorem ipsum solor site amet, consectetur';
		$this->load->view('exemplo1', $dados);
	}
	public function login(){
		$this->load->Exemplo1_model->salvar(); //Chamamos assim, pois o model ja foi carregado no construct.
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */