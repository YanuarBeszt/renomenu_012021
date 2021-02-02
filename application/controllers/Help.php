<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Help extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_Banner", "banner");
		$this->load->model("M_Category", "category");
		$this->load->model("M_Question", "question");
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
		$data["title"] = "FAQ";
		$data["subTitle"] = "Frequently Asked Question";
		$data["landingpage"] = false;
		$data["topic"] = $this->topic->getAll();
		$this->session->userdata;
		$this->load->view('help', $data);
	}
	public function getPlatforms()
	{
		$list = $this->platform->getAll();
		$data = '';
		if (empty($list)) {
			$data .= '<div class="box"><p>Mohon maaf data belum tersedia.</p></div>';
		} else {
			for ($i = 0; $i <= count($list) - 1; $i++) {
				$data .= '<div class="col-md-4">';
				$data .= '<div class="box">';
				$data .= '<img src="' . base_url("assets") . '/img/upload/' . $list[$i]->image .  '" width="200">';
				$data .= '<a id="' . $list[$i]->id .  '" class="genric-btn info radius btn-platform">' . $list[$i]->name .  '</a>';
				$data .= '</div>';
				$data .= '</div>';
			}
		}
		echo $data;
	}

	public function getTopics()
	{
		$data = '';
		$id = $this->input->post('idPF');
		$list = $this->topic->getTopicByIdPF($id);
		if (empty($list)) {
			$data .= '<p>Mohon maaf data belum tersedia.</p>';
		} else {
			for ($i = 0; $i <= count($list) - 1; $i++) {
				$data .= '<div class="col-md-4">';
				$data .= '<div class="box">';
				$data .= '<img src="' . base_url("assets") . '/img/upload/' . $list[$i]->image .  '" width="120"><br>';
				$data .= '<div class="row d-flex justify-content-center">';
				$data .= '<a href="' . base_url() . 'Topics/' . $list[$i]->id .  '" class="genric-btn info radius">' . $list[$i]->name .  '</a>';
				$data .= '</div>';
				$data .= '</div>';
				$data .= '</div>';
			}
		}
		echo $data;
	}

	public function Search()
	{
		$search =  $this->input->post('search');
		$query = $this->question->search($search);
		echo json_encode($query);
	}

	public function SearchEn()
	{
		$search =  $this->input->post('search');
		$query = $this->question->searchEn($search);
		echo json_encode($query);
	}

	public function switchLang($language = "", $uri)
	{
		$this->session->set_userdata('site_lang', $language);
		// header('Location: http://localhost:8888/renomeet_BC_092020_1/help');
		redirect($uri);
	}
}
