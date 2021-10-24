<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->model('menu_model');
        is_logged_in();
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://localhost/ESDF/backend/data/user/index';
        $config['total_rows'] = $this->model_user->hitung_jumlah_user();
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
        $data['title'] = 'Data User';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengguna'] = $this->model_user->getSome($config['per_page'], $data['start']);
        $data['jumlahuser'] = $this->model_user->hitung_jumlah_user();

        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required|trim',
            [
                'required' => 'Nama tidak boleh kosong'
            ]
        );
        $this->form_validation->set_rules(
            'hak',
            'Hak Akses',
            'required',
            [
                'required' => 'Hak Akses tidak boleh kosong'
            ]
        );
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'required' => 'Email tidak boleh kosong',
            'valid_email' => 'Email Tidak Valid',
            'is_unique' => 'Email yang anda gunakan sudah terdaftar'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/data/user', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'foto_user' => $this->input->post('foto'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('hak'),
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/data/user");
        }
    }

    public function deleteus($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_user->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/data/user'));
        }
    }

    public function resetpass($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_user->reset($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil direset</div>');
            redirect(site_url('backend/data/user'));
        }
    }
}
