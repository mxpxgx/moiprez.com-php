<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->twig->display(
				'base',
				'products' => 'Moises' 
			);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */