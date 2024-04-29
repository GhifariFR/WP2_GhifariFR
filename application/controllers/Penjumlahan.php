<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjumlahan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $this->load->controller('penjumlah');
	}
	
	public function jumlah($nilai1, $nilai2)
	{
		$this->load->model('Model_penjumlahan');

		$data['nilai1'] = $nilai1;
		$data['nilai2'] = $nilai2;
		$data['hasil'] = $this->Model_penjumlahan->jumlah($nilai1, $nilai2);

		$this->load->view('penjumlahan_view', $data);
	}
}
