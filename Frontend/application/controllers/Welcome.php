<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
    {
        $api_url = 'http://127.0.0.1:8000/data';
        $data = json_decode(file_get_contents($api_url), true);
        $this->load->view('frontend_view', ['data' => $data]);
    }
}
