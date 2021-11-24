<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_gejala');
        $this->load->model('menu_model');
        is_logged_in();
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://localhost/Expert-System-Dragon-Fruit/backend/data/gejala/index';
        $config['total_rows'] = $this->model_gejala->hitung_jumlah_gejala();
        $config['per_page'] = '6';

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
        $data['title'] = 'Data Gejala';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gejala'] = $this->model_gejala->getSome($config['per_page'], $data['start']);
        $data['jumlahgejala'] = $this->model_gejala->hitung_jumlah_gejala();

        $this->form_validation->set_rules('nama', 'Nama Gejala', 'required|trim', [
            'required' => 'Nama Gejala tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/data/gejala', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $config['upload_path']         = './assets/img/gejala/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) //sesuai dengan name pada form 
            {
                redirect("backend/data/gejala");
            } else {
                //tampung data dari form
                $kode = $this->input->post('kd');
                $gejala = $this->input->post('nama');
                $file = $this->upload->data();
                $gambar = $file['file_name'];

                $data = [
                    'kode_gejala' => $kode,
                    'gejala' => $gejala,
                    'gambar' => $gambar
                ];
                $this->db->insert('tb_gejala', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("backend/data/gejala");
            }
        }
    }

    public function editgj()
    {
        $this->form_validation->set_rules('nama', 'Nama Gejala', 'required|trim', [
            'required' => 'Nama Gejala tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
        } else {
            $config['upload_path']         = './assets/img/gejala/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) { //sesuai dengan name pada form 
                redirect("backend/data/gejala");
            } else {
                $kode = $this->input->post('kd');
                $gejala = $this->input->post('nama');
                $file = $this->upload->data();
                $gambar = $file['file_name'];

                $data = [
                    'kode_gejala' => $kode,
                    'gejala' => $gejala,
                    'gambar' => $gambar
                ];
                $this->db->where('id_gejala', $_POST['id']);
                $this->db->update('tb_gejala', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect("backend/data/gejala");
            }
        }
    }

    public function deletegj($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_gejala->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/data/gejala'));
        }
    }
}
