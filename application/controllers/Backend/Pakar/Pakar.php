<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pakar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('model_hasil');
    }

    public function index()
    {
        $data['start'] = 0;
        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ilmu'] = $this->db->get('tb_ilmu')->result_array();
        $data['hasil'] = $this->model_hasil->getAll();

        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/template/topbar', $data);
        $this->load->view('backend/pakar/hasil', $data);
        $this->load->view('backend/template/footer', $data);
    }
}
