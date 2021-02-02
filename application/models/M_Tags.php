<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Tags extends CI_Model
{
    private $_table = "keyword";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAll_asc()
    {
        $this->db->select('*');
        $this->db->where('is_deleted', "n");
        return $this->db->get($this->_table)->result();
    }

    public function getAllKeyword()
    {
        // $this->db->where('is_deleted', 'n');
        return $this->db->get_where($this->_table, ['is_deleted' => 'n'])->result_array();
    }

    public function storeData($nametags)
    {
        $data = array(
            'name' => $nametags,
            'is_deleted' => "n",
            'created_by' => $this->session->userdata('user_logged')->id,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        );
        $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function updateData($data, $id)
    {
        $this->db->update($this->_table, $data, array('id' => $id));
    }
}
