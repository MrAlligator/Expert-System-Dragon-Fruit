<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        logged_in();
        $this->load->model('model_pertanyaan');
        $this->load->model('model_random');
        $this->load->model('model_hasil');
    }

    public function index()
    {
        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['wajib'] = $this->model_pertanyaan->get();
        $data['umum'] = $this->model_pertanyaan->getRandom();
        $data['ilmu'] = $this->db->get('tb_ilmu')->result_array();
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/template/header', $data);
            $this->load->view('frontend/template/navigation', $data);
            $this->load->view('frontend/konsultasi/hapen', $data);
            $this->load->view('frontend/template/footer', $data);
        } else {
            $result = array();
            foreach ($_POST['id_per'] as $key => $val) {
                $result[] = array(
                    'id_user' => $_POST['id'],
                    'id_pertanyaan' => $_POST['id_per'][$key],
                    'pertanyaan' => $_POST['pertanyaan'][$key],
                    'opsi1' => $_POST['o1'][$key],
                    'opsi2' => $_POST['o2'][$key],
                    'opsi3' => $_POST['o3'][$key]
                );
            }
            $query = $this->db->get('tmp_random');
            if ($query->num_rows() >= 1) {
                $this->db->where('id_user', $_POST['id']);
                $this->db->delete('tmp_random');
                $this->db->insert_batch('tmp_random', $result);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("frontend/konsultasi/konsultasi/hapen");
            } else {
                $this->db->insert_batch('tmp_random', $result);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("frontend/konsultasi/konsultasi/hapen");
            }
        }
    }

    public function hapen()
    {
        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tanya'] = $this->db->get('tmp_random')->result_array();
        $data['random'] = $this->model_random->get1();
        $data['ilmu'] = $this->db->get('tb_ilmu')->result_array();
        $data['jml'] = $this->model_random->hitung_jumlah_random();

        // var_dump($data);
        // die;

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/template/header', $data);
            $this->load->view('frontend/template/navigation', $data);
            $this->load->view('frontend/konsultasi/pertanyaan', $data);
            $this->load->view('frontend/template/footer', $data);
        } else {
        }
    }

    public function hasil()
    {
        $data['start'] = 0;
        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ilmu'] = $this->db->get('tb_ilmu')->result_array();
        $data['hasil'] = $this->model_hasil->getAll();

        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/template/navigation', $data);
        $this->load->view('frontend/konsultasi/hasil', $data);
        $this->load->view('frontend/template/footer', $data);
    }

    public function soal1()
    {
        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tanya'] = $this->db->get('tmp_random')->result_array();
        $data['random'] = $this->model_random->get1();
        $data['ilmu'] = $this->db->get('tb_ilmu')->result_array();
    }
}
