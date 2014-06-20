<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->twig->display(
				'blog.html.twig',
				array(
					'name' => 'Moises',
					'base_url' => base_url())
			);
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */