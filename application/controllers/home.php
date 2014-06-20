<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->twig->display(
				'home.html.twig',
				array(
					'name' => 'Moises',
					'base_url' => base_url())
			);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */