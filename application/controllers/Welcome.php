<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends AdminController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function Demo()
	{
		// $this->load->helper("html");
		// mytest();
		// echo heading("codeignitor 3",1);
		// $this->myTest();
		// $this->test();

		$this->load->library("Hello");
		$this->hello->test();
	}
}
