<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_ilmu');
		$this->load->model('menu_model');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['copyright'] = 'Politeknik Negeri Jember 2022';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ilmu'] = $this->db->get('tb_ilmu')->result_array();

		if (isset($_SESSION['role_id'])) {
			if ($_SESSION['role_id'] != '3') {
				redirect('frontend/auth/blocked');
			} else {
				$this->load->view('frontend/template/header', $data);
				$this->load->view('frontend/template/banner', $data);
				$this->load->view('frontend/template/navigation', $data);
				$this->load->view('frontend/dashboard', $data);
				$this->load->view('frontend/template/footer', $data);
			}
		} else {
			$this->load->view('frontend/template/header', $data);
			$this->load->view('frontend/template/banner', $data);
			$this->load->view('frontend/template/navigation', $data);
			$this->load->view('frontend/dashboard', $data);
			$this->load->view('frontend/template/footer', $data);
		}
	}

	public function tentang()
	{
		$data['title'] = 'Tentang Sistem';
		$data['copyright'] = 'Politeknik Negeri Jember 2022';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ilmu'] = $this->db->get('tb_ilmu')->result_array();

		$this->load->view('frontend/template/header', $data);
		$this->load->view('frontend/template/navigation', $data);
		$this->load->view('frontend/tentang', $data);
		$this->load->view('frontend/template/footer', $data);
	}

	public function details($id = null)
	{
		$data['title'] = 'Details';
		$data['copyright'] = 'Politeknik Negeri Jember 2022';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['details'] = $this->model_ilmu->getById($id);
		$data['ilmu'] = $this->db->get('tb_ilmu')->result_array();

		$this->load->view('frontend/template/header', $data);
		$this->load->view('frontend/template/navigation', $data);
		$this->load->view('frontend/details', $data);
		$this->load->view('frontend/template/footer', $data);
	}
}
