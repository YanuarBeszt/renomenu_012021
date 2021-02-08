<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('upload');
        $this->load->model('M_Blog');
        $this->load->model('M_Tags');
        $this->load->library('form_validation');
        $this->load->model("M_Blog", "blog");
        $this->load->model("M_Category", "category");
    }

    public function index()
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/support/blog/index/';
        $config['total_rows'] = $this->M_Blog->countBlogData();
        $config['per_page'] = 12;



        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        if (!$this->session->userdata('user_logged')) {
            redirect('Auth');
        }
        $data['start'] = $this->uri->segment(3);
        $data['blog'] = $this->M_Blog->getBlog($config['per_page'], $data['start']);

        // var_dump($data['blog']);
        // die;

        if ($this->input->post('searchKeyword')) {
            $data['blog'] = $this->M_Blog->searchBlogData();
        }
        $data["title"] = "Blog Index";
        $data["landingpage"] = false;
        $data['content'] = 'component/admin/blog/blog_index';

        $this->load->view('index', $data);
    }

    public function landingPage()
    {
        $data["category"] = $this->category->allKeyword();
        $data["blog"] = $this->blog->getListBlog();
        $this->load->view('blog', $data);
    }

    public function content($id)
    {
        $data["category"] = $this->category->allKeyword();
        $data["blog"] = $this->blog->getBlogContent($id);
        $data["blognew"] = $this->blog->getHomeBlog();
        $this->load->view('blog_content', $data);
    }

    public function create()
    {
        if (!$this->session->userdata('user_logged')) {
            redirect('Auth');
        }

        $data["title"] = "Form Create Blog";
        $data["landingpage"] = false;
        $data['content'] = 'component/admin/blog/blog_create';

        $this->form_validation->set_rules('blogTitle', 'Title tidak boleh kosong', 'required|max_length[50]');
        // $this->form_validation->set_rules('blogHeaderImg', 'Header Image tidak boleh kosong', 'required');
        if (empty($_FILES['blogHeaderImg']['name'])) {
            $this->form_validation->set_rules('blogHeaderImg', 'Document', 'required');
        }
        $this->form_validation->set_rules('blogContent', 'Content tidak boleh kosong', 'required');


        $data['keyword'] = $this->M_Tags->getAllKeyword();
        // var_dump($data['keyword']);
        // die;

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index', $data);
        } else {
            // $config['upload_path'] = './assets/images/upload/blog/header_image/';
            $config['upload_path'] = realpath(APPPATH . '../assets/images/upload/blog/header_image/');
            $config['allowed_types'] = 'jpg|png|PNG';
            $nmfile = time() . "_" . $_FILES['blogHeaderImg']['name'];
            $config['file_name'] = $nmfile;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload("blogHeaderImg")) {
                $data = array('upload_data' => $this->upload->data());

                $header_image = $data['upload_data']['file_name'];

                $keyword = $this->input->post('keyword');
                // $keyword_separator = explode(',', $keyword);

                // var_dump($_POST['keyword']);
                // die;

                $this->M_Blog->storeBlogData($header_image, $keyword);

                $this->session->set_flashdata('flashBlog', 'Data berhasil <strong>ditambahkan</strong>');
                redirect('blog');
            } else {
                $error = array('error' => $this->upload->display_errors());
                // redirect('blog/create', $error);
                echo '<div class="alert alert-danger">' . $error['error'] . '</div>';
            }
        }
    }

    public function action_edit($id)
    {
        if (!$this->session->userdata('user_logged')) {
            redirect('Auth');
        }

        $data["title"] = "Form Edit Blog";
        $data["landingpage"] = false;
        $data['content'] = 'component/admin/blog/blog_update';

        $data['blog'] = $this->M_Blog->getBlogById($id);

        $this->form_validation->set_rules('blogTitle', 'Title tidak boleh kosong', 'required|max_length[50]');
        // $this->form_validation->set_rules('blogHeaderImg', 'Header Image tidak boleh kosong', 'required');
        // if (empty($_FILES['blogHeaderImg']['name'])) {
        //     $this->form_validation->set_rules('blogHeaderImg', 'Document', 'required');
        // }
        $this->form_validation->set_rules('keyword', 'Keyword tidak boleh kosong', 'required');
        $this->form_validation->set_rules('blogContent', 'Content tidak boleh kosong', 'required');

        $data['keyword'] = $this->M_Tags->getAllKeyword();
        $data['keyword_id'] = $this->M_Blog->getKeywordByBlogId($id);

        // var_dump($data['keyword_id']);
        // die;

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index', $data);
        } else {
            $keyword = $this->input->post('keyword');

            $this->M_Blog->editBlogData($id, $keyword);

            var_dump($_POST);
            die;

            redirect('blog');
        }


        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('index', $data);
        // } else {
        //     if ($_FILES['blogHeaderImg']['name'] != '') {
        //         $config['upload_path'] = './assets/images/upload/blog/header_image/';
        //         $config['allowed_types'] = 'jpg|png|PNG';
        //         $nmfile = time() . "_" . $_FILES['blogHeaderImg']['name'];
        //         $config['file_name'] = $nmfile;

        //         $this->load->library('upload');
        //         $this->upload->initialize($config);

        //         if ($this->upload->do_upload("blogHeaderImg")) {
        //             $data = array('upload_data' => $this->upload->data());

        //             $header_image = $data['upload_data']['file_name'];

        //             $this->M_Blog->editBlogData($header_image);

        //             $this->session->set_flashdata('flashBlog', 'Data berhasil <strong>diedit</strong>');
        //             redirect('blog');
        //         } else {
        //             $error = array('error' => $this->upload->display_errors());
        //             // redirect('blog/create', $error);
        //             echo '<div class="alert alert-danger">' . $error['error'] . '</div>';
        //         }
        //     } else {
        //         $header_image = $this->input->post('old_headerImage');
        //     }
        // }
    }
    public function editHeaderImage($id)
    {
        $data["title"] = "Form Edit Header Image";
        $data["landingpage"] = false;
        $data['content'] = 'component/admin/blog/blog_update';

        $data['blog'] = $this->M_Blog->getBlogById($id);
        $this->load->view('index', $data);
    }

    public function action_delete($id)
    {
        if (!$this->session->userdata('user_logged')) {
            redirect('Auth');
        }

        $this->session->set_flashdata('flashBlog', 'Data berhasil <strong>dihapus</strong>');
        $this->M_Blog->deleteBlogData($id);
        redirect('blog');
    }

    // Upload image summernote
    function upload_image()
    {
        if (!$this->session->userdata('user_logged')) {
            redirect('Auth');
        }

        if (isset($_FILES["image"]["name"])) {
            // $config['upload_path'] = './assets/images/upload/blog/content_image/';
            $config['upload_path'] = realpath(APPPATH . '../assets/images/upload/blog/content_image/');
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/upload/blog/content_image/' . $data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 600;
                $config['height'] = 500;
                $config['new_image'] = './assets/images/upload/blog/content_image/' . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url() . 'assets/images/upload/blog/content_image/' . $data['file_name'];
            }
        }
    }

    // Delete image Summernote
    function delete_image()
    {
        if (!$this->session->userdata('user_logged')) {
            redirect('Auth');
        }

        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if (unlink($file_name)) {
            echo 'File Delete Successfully';
        }
    }

	public function Search()
	{
		$search =  $this->input->post('search');
		$query = $this->question->search($search);
		echo json_encode($query);
	}
}
