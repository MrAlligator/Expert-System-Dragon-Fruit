<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Probabilitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pengetahuan');
        $this->load->model('menu_model');
        is_logged_in();
    }

    public function index()
    {
        $data['start'] = 0;
        $data['title'] = 'Data Probabilitas';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hamapenyakit'] = $this->db->get('tb_hamapenyakit')->result();
        $data['gejala'] = $this->db->get('tb_gejala')->result();
        $data['probabilitas'] = $this->model_pengetahuan->getHamaPenyakit();
        $data['jumlahprb'] = $this->model_pengetahuan->hitung_jumlah_pengetahuan();

        $this->form_validation->set_rules('prb', 'Probabilitas', 'required', [
            'required' => 'Probabilitas tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/data/probabilitas', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $data = [
                'id_hamapenyakit' => $this->input->post('hp'),
                'id_gejala' => $this->input->post('gj'),
                'probabilitas' => $this->input->post('prb')
            ];
            $this->db->insert('tb_pengetahuan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/data/probabilitas");
        }
    }

    public function deleteprb($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_pengetahuan->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/data/probabilitas'));
        }
    }

    public function editprb()
    {
        $this->form_validation->set_rules('prb', 'Probabilitas', 'required', [
            'required' => 'Probabilitas tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('id');
            $data = [
                'id_hamapenyakit' => $this->input->post('hp'),
                'id_gejala' => $this->input->post('gj'),
                'probabilitas' => $this->input->post('prb')
            ];
            $this->db->where('id_pengetahuan', $id);
            $this->db->update('tb_pengetahuan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/data/probabilitas");
        }
    }
}
