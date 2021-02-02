<?php

class M_Auth extends CI_Model
{
    private $_table = "user";

    public function doLogin()
    {
        $post = $this->input->post();

        $this->db->where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);

            if ($isPasswordTrue) {
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            } else {
            }
        }
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }
}
