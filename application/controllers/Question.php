<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Question extends CI_Controller
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
		$this->load->model("M_Tags", "tags");
	}

	private function response($res)
	{

		$pesan = ['code' => $res[0], 'pesan' => $res[1]];

		return $pesan;
	}

	public function index()
	{
		$data["title"] = "Renomeet - Online Meeting";
		$data["landingpage"] = false;
		$data['topic'] = $this->topic->getAllData_asc();
		$data['topicDropdown'] = $this->topic->getTopics_desc();
		$data['tags'] = $this->tags->getAll_asc();
		$data['content'] = 'content_question';
		// return $data['topic'];
		$this->load->view('index', $data);
	}

	public function action_store()
	{
		$question = $this->input->post('question');
		$contents = $this->input->post('contents');
		$idTopic = $this->input->post('idTopic');
		$tags = $this->input->post('tags');
		// echo json_encode($_POST);
		// return;
		$this->question->storeDataIna($question, $contents, $idTopic, $tags);
		$res = $this->response([1, 'Success Submit Your Data.']);
		echo json_encode($res);
		return;
	}

	public function action_store_en()
	{
		$question = $this->input->post('question');
		$contents = $this->input->post('contents');
		$idTopic = $this->input->post('idTopic');
		$tags = $this->input->post('tags');
		// echo json_encode($_POST);
		// return;
		$this->question->storeDataEn($question, $contents, $idTopic, $tags);
		$res = $this->response([1, 'Success Submit Your Data.']);
		echo json_encode($res);
		return;
	}

	public function action_update()
	{
		$question = $this->input->post('question');
		$steps = $this->input->post('contents');
		$statusQ = $this->input->post('statusQ');
		$idTopic = $this->input->post('idTopic');
		$idTags = $this->input->post('tags');
		$idQ = $this->input->post('idQ');

		// $data = array(
		// 	"question" => $this->input->post('question'),
		// 	"steps" => $this->input->post('contents'),
		// 	"statusQ" => $this->input->post('statusQ'),
		// 	"idTags" => $this->input->post('tags'),
		// 	"idQ" => $this->input->post('idQ'),
		// );
		$this->question->updateDataIna($question, $steps, $statusQ, $idTopic, $idTags, $idQ);
		$res = $this->response([1, 'Success Update Your Data.']);
		echo json_encode($res);
		return;
	}

	public function action_update_en()
	{
		$question = $this->input->post('question');
		$steps = $this->input->post('contents');
		$statusQ = $this->input->post('statusQ');
		$idTopic = $this->input->post('idTopic');
		$idTags = $this->input->post('tags');
		$idQ = $this->input->post('idQ');

		// $data = array(
		// 	"question" => $this->input->post('question'),
		// 	"steps" => $this->input->post('contents'),
		// 	"statusQ" => $this->input->post('statusQ'),
		// 	"idTags" => $this->input->post('tags'),
		// 	"idQ" => $this->input->post('idQ'),
		// );
		$this->question->updateDataEn($question, $steps, $statusQ, $idTopic, $idTags, $idQ);
		$res = $this->response([1, 'Success Update Your Data.']);
		echo json_encode($res);
		return;
	}

	//Upload image summernote
	function uploadImage()
	{
		if (isset($_FILES["image"]["name"])) {
			$config['upload_path'] = './assets/img/upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$filename = 'steps_' . time() . '_' . $_FILES["image"]["name"];
			$config['file_name'] = $filename;
			$this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image')) {
				$status = 'error';
				$msg = $this->upload->display_errors('', '');
			} else {
				$data = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/img/upload/' . $data['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				$config['quality'] = '60%';
				$config['width'] = 800;
				$config['height'] = 800;
				$config['new_image'] = './assets/img/upload/' . $data['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$status = "success";
				$msg = base_url() . 'assets/img/upload/' . $data['file_name'];
				// echo base_url() . './assets/img/upload/' . $data['file_name'];
			}
		}
		$res = array('status' => $status, 'msg' => $msg);
		echo json_encode($res);
	}

	public function getDataById()
	{
		$id = $this->input->post('id');

		$data = $this->question->getById($id);
		echo json_encode($data);
	}

	public function getDataByIdEn()
	{
		$id = $this->input->post('idQ');

		$data = $this->question->getByIdEn($id);
		echo json_encode($data);
	}

	public function getTagedByQuestion()
	{
		$id = $this->input->post('idQ');
		$data = $this->question->getTagedByQuestion($id)->result();
		// $value = array();
		foreach ($data as $result) {
			$value[] = (float) $result->keyword_id;
		}
		echo json_encode($value);
	}

	//Delete image summernote
	function deleteImage()
	{
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if (unlink($file_name)) {
			echo 'File Delete Successfully';
		}
	}

	public function getAllDataIna()
	{
		$list = $this->question->getAllDataIna_asc();

		$data = '';
		$no = 1;
		for ($i = 0; $i <= count($list) - 1; $i++) {
			$data .= '<tr>';
			$data .= '<td class="text-center">' . $no++ . '</td>';
			$data .= '<td>' . $list[$i]->question . '</td>';
			$data .= '<td>' . $list[$i]->namePF . ' - ' . $list[$i]->nameTopic . '</td>';
			if ($list[$i]->is_deleted == "n") :
				$data .= '<td><a href="#" class="btn btn-success btn-edit disabled">Active</a></td>';
			else :
				$data .= '<td><a href="#" class="btn btn-danger btn-edit disabled">Non-Active</a></td>';
			endif;
			$data .= '<td><a href="#" id="' . $list[$i]->id . '" class="btn btn-warning btn_edit"><i class="fa fa-fw fa-edit"></i></a><a href="#" id="' . $list[$i]->id . '" class="btn btn-danger btn_delete" style="margin-left:4px;"><i class="fa fa-fw fa-times-circle"></i></a></td>';
			$data .= '</tr>';
		}

		echo json_encode([$data]);
		// print_r(json_encode($list));
	}

	public function getAllDataEn()
	{
		$list = $this->question->getAllDataEn_asc();

		$data = '';
		$no = 1;
		for ($i = 0; $i <= count($list) - 1; $i++) {
			$data .= '<tr>';
			$data .= '<td class="text-center">' . $no++ . '</td>';
			$data .= '<td>' . $list[$i]->question . '</td>';
			$data .= '<td>' . $list[$i]->namePF . ' - ' . $list[$i]->nameTopic . '</td>';
			if ($list[$i]->is_deleted == "n") :
				$data .= '<td><a href="#" class="btn btn-success btn-edit disabled">Active</a></td>';
			else :
				$data .= '<td><a href="#" class="btn btn-danger btn-edit disabled">Non-Active</a></td>';
			endif;
			$data .= '<td><a href="#" id="' . $list[$i]->id . '" class="btn btn-warning btn-edit_en"><i class="fa fa-fw fa-edit"></i></a><a href="#" id="' . $list[$i]->id . '" class="btn btn-danger btn_delete_en" style="margin-left:4px;"><i class="fa fa-fw fa-times-circle"></i></a></td>';
			$data .= '</tr>';
		}

		echo json_encode([$data]);
		// print_r(json_encode($list));
	}

	public function action_delete()
	{
		$id_list = $this->input->post('idQ');

		$table = 'question_ina';
		$this->db->where('id', $id_list);
		$delete = $this->db->delete($table);

		$table2 = 'question_keyword';
		$this->db->where('question_id', $id_list);
		$delete2 = $this->db->delete($table2);

		if ($delete === false) {
			$res = $this->response([0, 'Failed Change Your Data Status.']);
			echo json_encode($res);
			return;
		}
		$res = $this->response([1, 'Success Change Your Data Status.']);
		echo json_encode($res);
		return;
	}
}
