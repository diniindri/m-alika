<?php

class Sign_out extends CI_Controller
{
    public function index()
    {
        $data = [
            'nip', 'nama', 'level'
        ];
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
