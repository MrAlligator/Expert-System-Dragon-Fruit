<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solusi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_solusi');
        $this->load->model('model_hamapenyakit');
        $this->load->model('menu_model');
        is_logged_in();
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://localhost/ESDF/backend/data/solusi/index';
        $config['total_rows'] = $this->model_solusi->hitung_jumlah_solusi();
        $config['per_page'] = '5';

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
        $data['title'] = 'Data Solusi';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['solusi'] = $this->model_solusi->getSome($config['per_page'], $data['start']);
        $data['hamapenyakit'] = $this->model_hamapenyakit->getAll();
        $data['jumlahsol'] = $this->model_solusi->hitung_jumlah_solusi();

        $this->form_validation->set_rules('solusi', 'Solusi', 'required', [
            'required' => 'Harap isi kolom solusi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/data/solusi', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $data = [
                'kode_solusi' => $this->input->post('kd'),
                'hamapenyakit' => $this->input->post('hp'),
                'solusi' => $this->input->post('solusi')
            ];
            $this->db->insert('tb_solusi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/data/solusi");
        }
    }

    public function editsol()
    {
        $this->form_validation->set_rules('solusi', 'Solusi', 'required', [
            'required' => 'Harap isi kolom solusi'
        ]);
        if ($this->form_validation->run() == false) {
        } else {
            $data = [
                'kode_solusi' => $this->input->post('kd'),
                'hamapenyakit' => $this->input->post('hp'),
                'solusi' => $this->input->post('solusi')
            ];
            $this->db->where('id_solusi', $_POST['id']);
            $this->db->update('tb_solusi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/data/solusi");
        }
    }

    public function deletesol($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_solusi->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/data/solusi'));
        }
    }
}
