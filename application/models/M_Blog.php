<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Blog extends CI_Model
{
    private $_table = "blog";

    public function getAllBlog()
    {
        // return $this->db->get($this->_table)->result();
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('is_deleted = ', 'n');

        $query = $this->db->get();
        return $query->result();
    }

    public function storeBlogData($header_image, $keyword)
    {
        $data = [
            'title' => $this->input->post('blogTitle', TRUE),
            'header_image' => $header_image,
            'content' => $this->input->post('blogContent', TRUE),
            'created_by' => $this->session->userdata('user_logged')->id,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
            'is_deleted' => 'n'
        ];

        $this->db->insert($this->_table, $data);
        $blog_id = $this->db->insert_id();

        $tagged_keyword = array();
        foreach ($keyword as $k => $val) {
            $tagged_keyword[] = array(
                'blog_id' => $blog_id,
                'keyword_id' => $_POST['keyword'][$k]
            );
        }
        $this->db->insert_batch('blog_keyword', $tagged_keyword);
    }

    public function editBlogData($blog_id, $keyword)
    {
        $data = [
            'title' => $this->input->post('blogTitle', TRUE),
            'content' => $this->input->post('blogContent', TRUE),
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        ];

        $this->db->where('id', $blog_id);
        $this->db->update($this->_table, $data);

        $this->db->where('blog_keyword.blog_id', $blog_id);
        $this->db->delete('blog_keyword');

        if ($keyword != '') {
            $tagged_keyword = array();
            foreach ($keyword as $k => $val) {
                $tagged_keyword[] = array(
                    'blog_id' => $blog_id,
                    'keyword_id' => $_POST['keyword'][$k]
                );
            }
            $this->db->insert_batch('blog_keyword', $tagged_keyword);
        }
    }

    public function deleteBlogData($id)
    {
        $data = [
            'is_deleted' => 'y'
        ];
        $this->db->where('id', $id);
        $this->db->update($this->_table, $data);
    }

    public function getBlogById($id)
    {
        return $this->db->get_where($this->_table, ['blog.id' => $id])->row_array();
    }

    public function getBlogDetail($id)
    {
        $this->db->select('blog.id id, blog.title title, blog.header_image header_image, blog.content content, 
        user.name created_by, blog.created_date created_date, GROUP_CONCAT(keyword.name SEPARATOR ",") keyword');
        // $this->db->select('blog.id id, blog.title title, blog.header_image header_image, blog.content content, 
        // user.name created_by, blog.created_date created_date, blog_keyword.keyword_id keyword');
        $this->db->join('user', 'user.id = blog.created_by');
        $this->db->join('blog_keyword', 'blog_keyword.blog_id = blog.id');
        $this->db->join('keyword', ' keyword.id  = blog_keyword.keyword_id');
        // $this->db->group_by('blog_keyword.blog_id');
        return $this->db->get_where($this->_table, ['blog.id' => $id])->result_array();
    }

    public function getKeywordByBlogId($blog_id)
    {
        // $this->db->select('keyword_id');
        return $this->db->get_where('blog_keyword', ['blog_id' => $blog_id])->result_array();
    }

    public function getName()
    {
        $this->db->select('name');
        $this->db->from('user');
        $this->db->join($this->_table, 'user.id = blog.created_by');

        $query = $this->db->get();
        return $query->row_array();
    }

    public function searchBlogData()
    {
        $search_keyword = $this->input->post('searchKeyword', TRUE);

        $this->db->where('is_deleted', 'n');

        $this->db->like('title', $search_keyword);
        $this->db->or_like('header_image', $search_keyword);
        $this->db->or_like('content', $search_keyword);
        $this->db->or_like('blog_platform', $search_keyword);
        $this->db->or_like('blog_topic', $search_keyword);
        $this->db->or_like('blog_keyword', $search_keyword);

        return $this->db->get($this->_table)->result_array();
    }

    public function countBlogData()
    {
        return $this->db->get($this->_table)->num_rows();
    }

    public function getBlog($limit, $start)
    {
        // $this->db->distinct($this->_table);
        // $this->db->select('blog.id id, blog.title title, blog.header_image header_image, blog.content content, GROUP_CONCAT(keyword.name SEPARATOR ",") keyword');
        // $this->db->select('blog.id id, blog.title title, blog.header_image header_image, blog.content content, 
        // user.name created_by, blog.created_date created_date, GROUP_CONCAT(keyword.name SEPARATOR ",") keyword');
        $this->db->select('blog.id id, blog.title title, blog.header_image header_image, blog.content content, 
        user.name created_by, blog.created_date created_date, blog_keyword.keyword_id keyword');
        $this->db->join('user', 'user.id = blog.created_by');
        $this->db->join('blog_keyword', 'blog_keyword.blog_id = blog.id');
        $this->db->join('keyword', ' keyword.id  = blog_keyword.keyword_id');
        // $this->db->group_by('blog_keyword.blog_id');
        return $this->db->order_by('blog.created_date', 'DESC')->get_where(
            $this->_table,
            array('blog.is_deleted' => 'n'),
            $limit,
            $start
        )->result_array();
    }

    public function recentBlog()
    {
        return $this->db->order_by('created_date', 'DESC')->get_where($this->_table, array('is_deleted' => 'n'), 5, 0)->result_array();
    }
}
