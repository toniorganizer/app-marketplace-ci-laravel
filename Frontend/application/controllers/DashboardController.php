<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function index(){
		$data['title'] = 'Dashboard';
		
		$this->load->view('Dashboard/template/header',$data);
		$this->load->view('Dashboard/template/sidebar',$data);
		$this->load->view('Dashboard/template/topbar',$data);
		$this->load->view('Dashboard/template/footer');
	}

	public function daftarBarang(){
		$data['title'] = 'Daftar Barang';
		$api_url = 'http://127.0.0.1:8000/dataBarang';
        $data['barang'] = json_decode(file_get_contents($api_url), true);

		$this->load->view('Dashboard/template/header',$data);
		$this->load->view('Dashboard/template/sidebar',$data);
		$this->load->view('Dashboard/template/topbar',$data);
		$this->load->view('Dashboard/data_barang');
		$this->load->view('Dashboard/modal/modal_tambah_barang');
		$this->load->view('Dashboard/template/footer');
	}

	public function daftarSuplier(){
		$data['title'] = 'Daftar Suplier';

		$api_url = 'http://127.0.0.1:8000/dataSuplier';
        $data['suplier'] = json_decode(file_get_contents($api_url), true);

		$this->load->view('Dashboard/template/header',$data);
		$this->load->view('Dashboard/template/sidebar',$data);
		$this->load->view('Dashboard/template/topbar',$data);
		$this->load->view('Dashboard/data_suplier');
		$this->load->view('Dashboard/template/footer');
	}

	public function daftarPembelian(){
		$data['title'] = 'Daftar Pembelian';

		$api_url = 'http://127.0.0.1:8000/dataPembelian';
        $data['pembelian'] = json_decode(file_get_contents($api_url), true);

		$this->load->view('Dashboard/template/header',$data);
		$this->load->view('Dashboard/template/sidebar',$data);
		$this->load->view('Dashboard/template/topbar',$data);
		$this->load->view('Dashboard/data_pembelian');
		$this->load->view('Dashboard/template/footer');
	}

	public function stock(){
		$data['title'] = 'Stock';

		$api_url = 'http://127.0.0.1:8000/stock';
        $data['stock'] = json_decode(file_get_contents($api_url), true);

		$this->load->view('Dashboard/template/header',$data);
		$this->load->view('Dashboard/template/sidebar',$data);
		$this->load->view('Dashboard/template/topbar',$data);
		$this->load->view('Dashboard/stock');
		$this->load->view('Dashboard/template/footer');
	}

	public function addBarang(){
		$data = [
			'kodebrg' => $this->input->post('kodebrg', true),
			'namabrg' => $this->input->post('namabrg', true),
			'satuan' => $this->input->post('satuan', true),
			'harga' => $this->input->post('harga', true),
		];
		$this->kirimDataBarang($data);
	}

	private function kirimDataBarang($data){
		$url = 'http://127.0.0.1:8000/tambahDataBarang';
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
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Tambah data berhasil dilakukan. 
				</div>');
			redirect('index.php/DashboardController/daftarBarang');
		} else {
			echo 'Gagal mengirim data.';
		}
	}

	public function sendData()
	{
		$data = [
			'kodespl' => $this->input->post('kodespl', true),
			'namaspl' => $this->input->post('namaspl', true),
		];
		$this->sendDataToLaravel($data);
	}

	private function sendDataToLaravel($data)
	{
		$url = 'http://127.0.0.1:8000/tambahData';
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
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Tambah data berhasil dilakukan. 
				</div>');
			redirect('index.php/AuthController');
		} else {
			echo 'Gagal mengirim data ke Laravel.';
		}
	}


	public function editBarang($id){
		$data['title'] = 'Edit Barang';

		$api_url = 'http://127.0.0.1:8000/editBarang/'. $id;
        $data['editbarang'] = json_decode(file_get_contents($api_url), true);

		$this->load->view('Dashboard/template/header',$data);
		$this->load->view('Dashboard/template/sidebar',$data);
		$this->load->view('Dashboard/template/topbar',$data);
		$this->load->view('Dashboard/edit_data_barang',$data);
		$this->load->view('Dashboard/template/footer');

	}

	public function updateBarang(){
		$data = [
			'namabrg' => $this->input->post('namabrg', true),
			'hargabeli' => $this->input->post('hargabeli', true),
		];

		$kode = $this->input->post('kodebrg', true);
		$url = 'http://127.0.0.1:8000/updateBarang/'. $kode;
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
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Update data berhasil dilakukan. 
				</div>');
			redirect('index.php/DashboardController/daftarBarang');
		} else {
			echo 'Gagal mengirim data.';
		}
	}

	public function hapusBarang($id){

		$url = 'http://127.0.0.1:8000/hapusBarang/'. $id;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);

		$response = curl_exec($ch);
		$httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		echo "HTTP Status: $httpStatus\n";
		echo "Response: $response\n";

		$responseData = json_decode($response, true);

		if ($httpStatus == 200 && isset($responseData['status']) && $responseData['status'] === 'success') {
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Hapus data berhasil dilakukan. 
				</div>');
			redirect('index.php/DashboardController/daftarBarang');
		} else {
			echo 'Gagal mengirim data.';
		}
	}

}
