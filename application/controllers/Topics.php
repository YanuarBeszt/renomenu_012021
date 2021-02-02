<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topics extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_Category", "category");
		$this->load->model("M_Question", "question");
		$this->load->model("M_Banner", "banner");
	}

	// function _remap($param1)
	// {
	// 	$this->index($param1);
	// }

	private function response($res)
	{

		$pesan = ['code' => $res[0], 'pesan' => $res[1]];

		return json_encode($pesan);
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
	public function index($param1)
	{
		$platforms = $this->topic->getById($param1);
		$data["title"] = "Topics";
		$data["headPage"] = $platforms;
		$data["landingpage"] = false;
		$data["platform"] = $this->platform->getAll();
		if ($this->session->userdata('site_lang') == 'english') {
			redirect('en/Topics/' . $param1);
		}
		$this->session->userdata;
		$this->session->set_userdata('site_lang', 'indonesia');
		// $data["questions"] = $this->question->getTopQuestions($param1);
		$this->load->view('topic', $data);
	}

	public function english($param1)
	{
		$platforms = $this->topic->getById($param1);
		$data["title"] = "Topics";
		$data["headPage"] = $platforms;
		$data["landingpage"] = false;
		$data["platform"] = $this->platform->getAll();
		if ($this->session->userdata('site_lang') == 'indonesia') {
			redirect('Topics/' . $param1);
		}
		$this->session->userdata;
		$this->session->set_userdata('site_lang', 'english');
		// $data["questions"] = $this->question->getTopQuestions($param1);
		$this->load->view('en_topic', $data);
	}

	public function setSessionsIna()
	{
		$this->session->set_userdata('site_lang', 'indonesia');
	}

	public function setSessionsEn()
	{
		$this->session->set_userdata('site_lang', 'english');
	}

	public function getPlatforms()
	{
		$list = $this->platform->getAll();
		$data = '';
		for ($i = 0; $i <= count($list) - 1; $i++) {
			$data .= '<a href="" class="btn btn-info radius">' . $list[$i]->name .  '</a>';
		}

		echo $data;
	}

	public function getTopQuestionsIna()
	{
		$id = $this->input->post('idQ');
		$questions = $this->question->getTopQuestionsIna_desc($id);
		$data = '';
		if ($questions == "") {
			print_r($this->response([0, 'Data Kosong']));
			return;
		} else {
			foreach ($questions as $q) {
				$data .= '<li><a href="" class="btn-question" id="' . $q->idq . '">' . $q->question . '</a></li>';
			}
		}

		echo $data;
	}

	public function getTopQuestionsEn()
	{
		$id = $this->input->post('idQ');
		$questions = $this->question->getTopQuestionsEn_desc($id);
		$data = '';
		if ($questions == "") {
			print_r($this->response([0, 'Data Kosong']));
			return;
		} else {
			foreach ($questions as $q) {
				$data .= '<li><a href="" class="btn-question" id="' . $q->idq . '">' . $q->question . '</a></li>';
			}
		}

		echo $data;
	}

	public function getStepsIna()
	{
		$id = $this->input->post('idQ');
		$questions = $this->question->getSteps($id);
		// $data = '';
		// if ($questions === null) {
		// 	print_r($this->response([0, 'Data Kosong']));
		// 	return;
		// } else {
		// 	foreach ($questions as $q) {
		// 		$data = $q->steps;
		// 	}
		// }
		$data['contentTitle'] = $questions[0]->question;
		$data['idQ'] = $questions[0]->id;
		$data['contents'] = $questions[0]->answer_desc;

		echo json_encode($data);
	}

	public function getStepsEn()
	{
		$id = $this->input->post('idQ');
		$questions = $this->question->getStepsEn($id);
		// $data = '';
		// if ($questions === null) {
		// 	print_r($this->response([0, 'Data Kosong']));
		// 	return;
		// } else {
		// 	foreach ($questions as $q) {
		// 		$data = $q->steps;
		// 	}
		// }
		$data['contentTitle'] = $questions[0]->question;
		$data['idQ'] = $questions[0]->id;
		$data['contents'] = $questions[0]->answer_desc;

		echo json_encode($data);
	}

	public function switchLang($language = "", $uri)
	{
		$pieces = explode("_", $uri);
		$uri1 = $pieces[0];
		$uri2 = $pieces[1];
		$this->session->set_userdata('site_lang', $language);
		// header('Location: http://localhost:8888/renomeet_BC_092020_1/help');
		redirect($uri1 . "/" . $uri2);
	}
}
