<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tags extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_logged')) {
			redirect('Auth');
		}
		$this->load->helper(array('form', 'url'));
		$this->load->model("M_Tags", "tags");
	}

	private function response($res)
	{

		$pesan = ['code' => $res[0], 'pesan' => $res[1]];

		return $pesan;
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
		$data['content'] = 'content_tags';

		$this->load->view('index', $data);
	}

	public function getAllData()
	{
		$list = $this->tags->getAll();

		$data = '';
		$no = 1;
		for ($i = 0; $i <= count($list) - 1; $i++) {
			$data .= '<tr>';
			$data .= '<td class="text-center">' . $no++ . '</td>';
			$data .= '<td>' . $list[$i]->name . '</td>';
			if ($list[$i]->is_deleted == "n") :
				$data .= '<td><a href="#" class="btn btn-success disabled">Active</a></td>';
			else :
				$data .= '<td><a href="#" class="btn btn-danger disabled">Non-Active</a></td>';
			endif;
			$data .= '<td><a href="#" id="' . $list[$i]->id . '" class="btn btn-warning btn-edit"><i class="fa fa-fw fa-edit"></i></a><a href="#" id="' . $list[$i]->id . '" class="btn btn-danger btn_delete" style="margin-left:4px;"><i class="fa fa-fw fa-times-circle"></i></a></td>';
			$data .= '</tr>';
		}

		echo json_encode([$data]);
		// print_r(json_encode($list));
	}

	public function action_store()
	{
		$nametags = $this->input->post('nametags');

		$this->tags->storeData($nametags);
		$res = $this->response([1, 'Success Submit Your Data.']);
		echo json_encode($res);
		return;
	}

	public function getDataById()
	{
		$id = $this->input->post('idTags');

		$data = $this->tags->getById($id);
		echo json_encode($data);
	}

	public function action_update()
	{
		$id = $this->input->post('idtags');

		$data = array(
			"name" => $this->input->post('nametags'),
			"is_deleted" => $this->input->post('statustags'),
		);
		$this->tags->updateData($data, $id);
		$res = $this->response([1, 'Success Update Your Data.']);
		echo json_encode($res);
		return;
	}

	public function action_delete()
	{
		$post = $this->input->post();
		$id_list = $post['idtags'];

		$data = [
			'is_deleted' => "y"
		];

		$this->db->where('id', $id_list);
		$delete = $this->db->update('keyword', $data);

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
