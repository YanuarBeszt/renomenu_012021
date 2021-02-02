<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('user_logged')) {
		// 	redirect('Dashboard');
		// }
		$this->load->model("M_Auth", "user");
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
		$data["title"] = "Login Admin";
		$data["landingpage"] = false;
		$data["dataF"] = "";
		$this->load->view('login', $data);
	}

	function action_login()
	{
		$data["dataF"] = "Username or Password Is Wrong";

		if ($this->user->doLogin()) {
			redirect(site_url('Dashboard'));
		} else {
			$this->load->view('login', $data);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Admin/Auth'));
	}
}
