<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('branch_model');
		$this->load->model('unit_model');
		
		$branches = $this->branch_model->get_all();
		$units = $this->unit_model->get_random();

		$this->load->view('header');
		$this->load->view('main', array(
			'branches' => $branches,
			'units' => $units
		));
		$this->load->view('footer');
	}
}
