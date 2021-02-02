<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Banner extends CI_Model
{
    private $_table = "banner";

    public function getAllData()
    {
        $this->db->select('*');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        $this->db->select("*");
        $this->db->where('id', $id);
        return $this->db->get($this->_table)->row();
    }

    public function getPFById($id)
    {
        $this->db->select("*");
        $this->db->where('id', $id);
        return $this->db->get($this->_table)->result();
    }

    public function getBannerByIdPF($id)
    {
        $this->db->select("*");
        $this->db->where('id', $id);
        $this->db->where('is_deleted', "n");
        return $this->db->get($this->_table)->result();
    }

    public function storeData($nameBanner, $imageBanner, $statusBanner, $url)
    {
        $data = array(
            'name' => $nameBanner,
            'image' => $imageBanner,
            'url_banner' => $url,
            'is_deleted' => $statusBanner,
            'created_by' => $this->session->userdata('user_logged')->id,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        );
        $result = $this->db->insert($this->_table, $data);
        return $result;
    }

    public function updateData($data, $id)
    {
        $this->db->update($this->_table, $data, array('id' => $id));
    }
}
