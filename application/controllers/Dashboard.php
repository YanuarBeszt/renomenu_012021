<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_logged')) {
			redirect('Auth');
		}
		$this->load->helper(array('form', 'url'));
		$this->load->model("M_Category", "category");
		$this->load->model("M_Question", "question");
		$this->load->model("M_Banner", "banner");
	}

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
		$data["title"] = "Renomeet - Online Meeting";
		$data["landingpage"] = false;
		$data['content'] = 'content_dashboard';

		$this->load->view('index', $data);
	}
}
