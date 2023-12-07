<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function index()
    {
        $menu['title'] = 'Login';
        $this->load->view('template/header', $menu);
		$this->load->view('home/login');
		$this->load->view('template/footer');
    }

    public function loginAdmin()
    {
		$data['title'] = 'Daftar Pembelian';

		$this->load->view('Dashboard/login');
    }

    public function loginPage()
    {
        $data = [
			'kodespl' => $this->input->post('kodespl', true),
			'namaspl' => $this->input->post('namaspl', true),
		];

        if ($data) {
            $this->session->set_userdata($data);
            redirect('index.php/HomeController');
        } else {
            echo 'Login gagal!';
        }

    }

    public function loginDashboard()
    {
        $data = [
			'kodespl' => $this->input->post('kodespl', true),
			'namaspl' => $this->input->post('namaspl', true),
		];

        if ($data) {
            $this->session->set_userdata($data);
            redirect('index.php/DashboardController');
        } else {
            echo 'Login gagal!';
        }

    }

    public function logout(){
        $this->session->unset_userdata('namaspl');
		$this->session->unset_userdata('kodespl');
        redirect('index.php/HomeController');
    }
}
