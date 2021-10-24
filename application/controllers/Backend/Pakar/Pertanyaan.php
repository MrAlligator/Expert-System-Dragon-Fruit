<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pertanyaan');
        is_logged_in();
    }

    public function index()
    {   //PAGINATION
        //Config
        $config['base_url'] = 'http://localhost/ESDF/backend/pakar/pertanyaan/index';
        $config['total_rows'] = $this->model_pertanyaan->hitung_jumlah_pertanyaan();
        $config['per_page'] = '10';

        //Styling
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm justify-content-center">';
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

        //Initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(5);
        $data['title'] = 'Data Pertanyaan';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pertanyaan'] = $this->model_pertanyaan->getSome($config['per_page'], $data['start']);
        $data['pert'] = $this->db->get('tb_pertanyaan')->result_array();
        $data['opsi1'] = $this->model_pertanyaan->getOpsi1();
        $data['opsi2'] = $this->model_pertanyaan->getOpsi2();
        $data['opsi3'] = $this->model_pertanyaan->getOpsi3();
        $data['jumlahpertanyaan'] = $this->model_pertanyaan->hitung_jumlah_pertanyaan();

        $this->form_validation->set_rules('prt', 'Pertanyaan', 'required|trim', [
            'required' => 'Pertanyaan Tidak Boleh Kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/data/pertanyaan', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $data = [
                'pertanyaan' => $this->input->post('prt'),
                'opsi1' => $this->input->post('op1'),
                'opsi2' => $this->input->post('op2'),
                'opsi3' => $this->input->post('op3')
            ];
            $this->db->insert('tb_pertanyaan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/pakar/pertanyaan");
        }
    }

    public function editprt()
    {
        $this->form_validation->set_rules('prt', 'Pertanyaan', 'required|trim', [
            'required' => 'Pertanyaan Tidak Boleh Kosong'
        ]);
        if ($this->form_validation->run() == false) {
        } else {
            $data = [
                'pertanyaan' => $this->input->post('prt'),
                'opsi1' => $this->input->post('op1'),
                'opsi2' => $this->input->post('op2'),
                'opsi3' => $this->input->post('op3')
            ];
            $this->db->where('id_pertanyaan', $_POST['id']);
            $this->db->update('tb_pertanyaan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/pakar/pertanyaan");
        }
    }

    public function deleteprt($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_pertanyaan->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/pakar/pertanyaan'));
        }
    }
}
