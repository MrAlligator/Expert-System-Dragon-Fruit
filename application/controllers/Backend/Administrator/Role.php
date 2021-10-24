<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/template/topbar', $data);
        $this->load->view('backend/admin/dashboard', $data);
        $this->load->view('backend/template/footer', $data);
    }
}
