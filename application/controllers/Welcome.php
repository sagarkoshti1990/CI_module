<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 public function __construct()
    {
        parent::__construct();
        $this->load->model("car_model");
    }

	public function index()
	{
		
		$this->load->helper('url');
		$this->load->view('welcome_message', [
			'cars' => $this->car_model->all(),
			"bace_url" => site_url()
		]);
	}

	public function store()
	{
		$car = new $this->car_model;
		$car->name = $this->input->post('name');
		$car->color = $this->input->post('color');
		$car->date = $this->input->post('date');
		$car->description = $this->input->post('description');
		$car->save();
		redirect();
	}
}
