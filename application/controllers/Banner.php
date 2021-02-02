<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
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
		$data['content'] = 'content_banner';
		$data['Banner'] = $this->banner->getAllData();

		$this->load->view('index', $data);
	}

	public function getAllData()
	{
		$list = $this->banner->getAllData();

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

	function action_store()
	{
		$config['upload_path'] = realpath(APPPATH . '../assets/images/upload/Banner');;
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = FALSE;
		$nmfile = time() . "_" . $_FILES['file_image']['name'];
		$config['file_name'] = $nmfile;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload("file_image")) {
			$data = array('upload_data' => $this->upload->data());

			$nameBanner = $this->input->post('nameBanner');
			$url = $this->input->post('url');
			$imageBanner = $data['upload_data']['file_name'];

			$result = $this->banner->storeData($nameBanner, $imageBanner, "n", $url);
			if ($result) {
				$res = $this->response([1, 'Success Submit Your Data.']);
				echo json_encode($res);
				return;
			}
		} else {
			$error = array('error' => $this->upload->display_errors());
			echo "<div class='alert alert-danger'>'" . $error['error'] . "</div>";
			return;
		}
	}

	public function getDataById()
	{
		$id = $this->input->post('idBanner');

		$data = $this->banner->getById($id);
		echo json_encode($data);
	}

	public function action_update()
	{
		// echo json_encode([$_POST, $_FILES]);
		// return;
		$id = $this->input->post('idBanner');
		if ($id != null) {
			$_image = $this->banner->getById($id);
			if (isset($_FILES['file_image'])) {
				$config['upload_path'] = realpath(APPPATH . '../assets/img/upload/Banner');
				$config['allowed_types'] = 'jpg|png';
				$config['encrypt_name'] = FALSE;
				$nmfile = time() . "_" . $_FILES['file_image']['name'];
				$config['file_name'] = $nmfile;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('file_image')) {
					$error = array('error' => $this->upload->display_errors());
					echo "<div class='alert alert-danger'>'" . $error['error'] . "</div>";
					return;
				} else {
					$_data = array('upload_data' => $this->upload->data());
					$uriFile = realpath(APPPATH . '../assets/img/upload/');
					$hapus = unlink($uriFile . "/" . $_image->image);
					$data = array(
						'name' => $this->input->post('nameBanner'),
						'is_deleted' => $this->input->post('statusBanner'),
						'urlBanner' => $this->input->post('urlBanner'),
						'image' => $_data['upload_data']['file_name']
					);
					$query = $this->banner->updateData($data, $id);
					$res = $this->response([1, 'Success Update Your Data.']);
					echo json_encode($res);
					return;
				}
			} else {
				$data = array(
					'name' => $this->input->post('nameBanner'),
					'url_banner' => $this->input->post('urlBanner'),
					'is_deleted' => $this->input->post('statusBanner'),
					'image' => $_image->image
				);
				$query = $this->banner->updateData($data, $id);
				$res = $this->response([1, 'Success Update Your Data.']);
				echo json_encode($res);
				return;
			}
		}
	}

	public function action_delete()
	{
		$id_list = $this->input->post('idBanner');

		$data = [
			'is_deleted' => "y"
		];

		$this->db->where('id', $id_list);
		$delete = $this->db->update('Banner', $data);

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
