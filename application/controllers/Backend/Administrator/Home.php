<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('model_ilmu');
        $this->load->model('model_hamapenyakit');
        $this->load->model('model_gejala');
        $this->load->model('model_solusi');
        $this->load->model('model_user');
        $this->load->model('model_pengetahuan');
        // $this->load->model('model_pertanyaan');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jmlhp'] = $this->model_hamapenyakit->hitung_jumlah_hama();
        $data['jmlgj'] = $this->model_gejala->hitung_jumlah_gejala();
        $data['jmlsl'] = $this->model_solusi->hitung_jumlah_solusi();
        $data['jmlus'] = $this->model_user->hitung_jumlah_user();
        $data['jmlpg'] = $this->model_pengetahuan->hitung_jumlah_pengetahuan();

        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/template/topbar', $data);
        $this->load->view('backend/admin/dashboard', $data);
        $this->load->view('backend/template/footer', $data);
    }

    public function manage()
    {
        $data['title'] = 'Menu Management';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required', [
            'required' => 'Harap Isikan Menu...!!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/admin/manage', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil DIsimpan</div>');
            redirect('backend/administrator/home/manage');
        }
    }

    public function editmenu()
    {
        $this->form_validation->set_rules('id', 'Id', 'required', [
            'required' => 'Harap Isikan Id...!!'
        ]);
        $this->form_validation->set_rules('menu', 'Menu', 'required', [
            'required' => 'Harap Isikan Menu...!!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', "Data Gagal Di Edit");
            redirect('backend/administrator/home/manage');
        } else {
            $data = array(
                "menu" => $_POST['menu']
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
            redirect('backend/administrator/home/manage');
        }
    }

    public function deletemenu($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->menu_model->deletemenu($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/administrator/home/manage'));
        }
    }

    public function submenu()
    {
        $data['title'] = 'Sub Menu Management';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['submenu'] = $this->menu_model->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Sub Menu', 'required', [
            'required' => 'Harap Isikan Sub Menu...!!'
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required', [
            'required' => 'Harap Isikan Menu...!!'
        ]);
        $this->form_validation->set_rules('url', 'Url', 'required', [
            'required' => 'Harap Isikan Url...!!'
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'required', [
            'required' => 'Harap Isikan Icon...!!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/admin/submenu', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil DIsimpan</div>');
            redirect('backend/administrator/home/submenu');
        }
    }

    public function deletesubmenu($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->menu_model->deletesubmenu($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/administrator/home/submenu'));
        }
    }

    public function role()
    {
        $data['title'] = 'Hak Akses';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/template/topbar', $data);
        $this->load->view('backend/admin/role', $data);
        $this->load->view('backend/template/footer', $data);
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Hak Akses';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['role_id' => $role_id])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/template/topbar', $data);
        $this->load->view('backend/admin/role-access', $data);
        $this->load->view('backend/template/footer', $data);
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses Berhasil Diubah</div>');
    }

    public function knowledge()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://localhost/ESDF/backend/administrator/home/knowledge';
        $config['total_rows'] = $this->model_ilmu->hitung_jumlah_ilmu();
        $config['per_page'] = '2';

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
        $data['title'] = 'Data Konteks';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ilmu'] = $this->model_ilmu->getSome($config['per_page'], $data['start']);
        $data['jumlahilmu'] = $this->model_ilmu->hitung_jumlah_ilmu();

        $this->form_validation->set_rules('class', 'Kelas', 'required', [
            'required' => 'Harap pilih kelas..!!'
        ]);
        $this->form_validation->set_rules('title', 'Judul', 'required', [
            'required' => 'Harap isikan judul..!!'
        ]);
        $this->form_validation->set_rules('context', 'Konteks', 'required', [
            'required' => 'Harap isikan konteks..!!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/template/topbar', $data);
            $this->load->view('backend/admin/context', $data);
            $this->load->view('backend/template/footer', $data);
        } else {
            $config['upload_path']         = './assets/img/ilmu/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) //sesuai dengan name pada form 
            {
                redirect("administrator/home/knowledge");
            } else {
                //tampung data dari form
                $class = $this->input->post('class');
                $title = $this->input->post('title');
                $file = $this->upload->data();
                $gambar = $file['file_name'];
                $context1 = $this->input->post('context');
                $context2 = $this->input->post('plain');
                $context3 = $this->input->post('text');

                $data = [
                    'class' => $class,
                    'title' => $title,
                    'gambar' => $gambar,
                    'p1' => $context1,
                    'p2' => $context2,
                    'p3' => $context3,
                    'date' => time()
                ];

                $this->db->insert('tb_ilmu', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("backend/administrator/home/knowledge");
            }
        }
    }

    public function deletekw($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_ilmu->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/administrator/home/knowledge'));
        }
    }

    public function deleterole($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->menu_model->deleterole($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/administrator/home/role'));
        }
    }
}
