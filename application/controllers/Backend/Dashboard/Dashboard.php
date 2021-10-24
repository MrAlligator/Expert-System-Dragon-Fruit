<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['hamapenyakit'] = $this->model_hamapenyakit->hitung_jumlah_hama();
        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/template/topbar', $data);
        $this->load->view('backend/dashboard', $data);
        $this->load->view('backend/template/footer', $data);
    }
}
