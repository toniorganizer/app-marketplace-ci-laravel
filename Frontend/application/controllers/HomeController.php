<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
    {
        $menu['title'] = 'Home';
        $api_url = 'http://127.0.0.1:8000/dataBarang';
        $data['barang'] = json_decode(file_get_contents($api_url), true);

        $this->load->view('template/header', $menu);
		$this->load->view('home/index');
		$this->load->view('home/product', $data);
		$this->load->view('template/footer');
    }

    public function belibrg($id){
		$data['title'] = 'Daftar Pembelian';

		$api_url = 'http://127.0.0.1:8000/beliBarang/'.$id;
        $data['belibarang'] = json_decode(file_get_contents($api_url), true);

		$this->load->view('template/header', $data);
		$this->load->view('home/detail_beli', $data);
		$this->load->view('template/footer');
	}

    public function checkout(){
		$now = new DateTime();
		$tglsekarang = $now->format('Y-m-d');

		$totalrp = $this->input->post('hargabeli') * $this->input->post('qty');
		$diskonrp = ($totalrp * $this->input->post('diskon')) / 100;

		$kodespl = $this->session->userdata('kodespl');

        $data = [
			'kodebrg' => $this->input->post('kodebrg', true),
			'hargabeli' => $this->input->post('hargabeli', true),
			'diskon' => $this->input->post('diskon', true),
			'kodespl' => $kodespl,
			'tglbeli' => $tglsekarang,
			'totalrp' => $totalrp,
			'diskonrp' => $diskonrp,
			'qty' => $this->input->post('qty', true),
		];

		$this->checkoutBarang($data);
	}

    private function checkoutBarang($data){
        $url = 'http://127.0.0.1:8000/checkoutBarang';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$response = curl_exec($ch);
		$httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		echo "HTTP Status: $httpStatus\n";
		echo "Response: $response\n";

		$responseData = json_decode($response, true);

		if ($httpStatus == 200 && isset($responseData['status']) && $responseData['status'] === 'success') {
			redirect('index.php/HomeController/detailBeli');
		} else {
			echo 'Gagal mengirim data.';
		}
    }

	public function detailBeli(){
		$id = $this->session->userdata('kodespl');
		$menu['title'] = 'Info Pembelian';
        $api_url = 'http://127.0.0.1:8000/detailBeli/'. $id;
        $data['detail_beli'] = json_decode(file_get_contents($api_url), true);

        $this->load->view('template/header', $menu);
		$this->load->view('home/detail_pembelian', $data);
		$this->load->view('template/footer');
	}
}
