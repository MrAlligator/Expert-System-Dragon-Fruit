<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hamapenyakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_hamapenyakit');
        $this->load->model('menu_model');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Data Gejala';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->db->get('tb_hamapenyakit')->result_array();
        $data['hama'] = $this->model_hamapenyakit->getHama();
        $data['penyakit'] = $this->model_hamapenyakit->getPenyakit();
        $data['jumlahhama'] = $this->model_hamapenyakit->hama();
        $data['jumlahpenyakit'] = $this->model_hamapenyakit->penyakit();

        $this->form_validation->set_rules('nama', 'Nama Hama / Penyakit', 'required|trim', [
            'required' => 'Nama Hama / Penyakit tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/data/hamapenyakit', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $data = [
                'jenis' => $this->input->post('jenis'),
                'kode_hamapenyakit' => $this->input->post('kd'),
                'hamapenyakit' => $this->input->post('nama')
            ];
            $this->db->insert('tb_hamapenyakit', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/data/hamapenyakit");
        }
    }

    public function penyakit()
    {
        $this->form_validation->set_rules('nama', 'Nama Hama / Penyakit', 'required|trim', [
            'required' => 'Nama Hama / Penyakit tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
        } else {
            $data = [
                'jenis' => $this->input->post('jenis'),
                'kode_hamapenyakit' => $this->input->post('kdp'),
                'hamapenyakit' => $this->input->post('nama')
            ];
            $this->db->insert('tb_hamapenyakit', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/data/hamapenyakit");
        }
    }

    public function edithp()
    {
        $this->form_validation->set_rules('nama', 'Nama Hama / Penyakit', 'required|trim', [
            'required' => 'Nama Hama / Penyakit tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
        } else {
            $data = [
                'kode_hamapenyakit' => $this->input->post('kd'),
                'hamapenyakit' => $this->input->post('nama')
            ];
            $this->db->where('id_hamapenyakit', $_POST['id']);
            $this->db->update('tb_hamapenyakit', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/data/hamapenyakit");
        }
    }

    public function deletehp($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_hamapenyakit->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/data/hamapenyakit'));
        }
    }
}
