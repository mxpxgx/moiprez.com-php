<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->twig->display(
				'base.html.twig',
				array('name' => 'Moises')
			);
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */