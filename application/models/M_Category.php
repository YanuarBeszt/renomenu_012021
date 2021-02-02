<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Category extends CI_Model
{
    private $_table = "category";

    public function getAll()
    {
        $this->db->where('is_deleted', "n");
        return $this->db->get($this->_table)->result();
    }

    public function getAllDropdown()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAllData_asc()
    {
        $this->db->order_by('id', 'asc');
        // $this->db->where('status', 1);
        return $this->db->get($this->_table)->result();
    }

    public function storeData($namePF, $statusPF)
    {
        $data = array(
            'name' => $namePF,
            // 'image' => $imagePF,
            'is_deleted' => $statusPF,
            'created_by' => $this->session->userdata('user_logged')->id,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        );
        $result = $this->db->insert($this->_table, $data);
        return $result;
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
