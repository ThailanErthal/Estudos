<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //Sempre deixar definido, pois se não achar o diretório vai aparecer a mensagem.

class Exemplo1_model extends CI_ModeL { //A classe sempre deve ter o mesmo nome do arquivo

	function __contruct(){ //construdor do controller, nele é possivel carregar as librari, helpers, models que serão utilizados nesse controller
		parent::__contruct();//Chamando o construtor da classe pai
	}
	public function salvar(){
		echo 'executado método salvar do model'; //Somente para fins de aprendizagem, nunca deve ser executado um metodo de printar no model
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */