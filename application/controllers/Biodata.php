<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

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
		$data = array(
			'title' => 'Form Biodata Mahasiswa',
		);

		$this->load->view('layout/header', $data);
		$this->load->view('form_biodata_view');
		$this->load->view('layout/footer', $data);
	}

	public function form()
	{
		$data = array(
			'title' => 'Biodata Mahasiswa',
		);

		$this->load->view('layout/header', $data);
		
		// Librari peraturan validasi isi Form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|min_length[3]', [
			'required' => 'Nama Mahasiswa Harus diisi',
			'min_length' => 'Nama yang dimasukan terlalu pendek atau tidak benar'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas Mahasiswa', 'required|min_length[3]', [
			'required' => 'Kelas Mahasiswa Harus diisi',
			'min_length' => 'Kelas yang dimasukan terlalu pendek atau tidak benar'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas Mahasiswa', 'required|min_length[3]', [
			'required' => 'Kelas Mahasiswa Harus diisi',
			'min_length' => 'Kelas yang dimasukan terlalu pendek atau tidak benar'
		]);

		// Memvalidasi isi form
		if ($this->form_validation->run() != true) {
			$this->load->view('form_biodata_view');
		}else {
			$data = array(
				'title' => 'Biodata Mahasiswa',
				'nama' => $this->input->post('nama'),
				'kelas' => $this->input->post('kelas'),
				'nim' => $this->input->post('nim')
			);
	
			$this->load->view('biodata_message', $data);
		}

		$this->load->view('layout/footer', $data);
	}
}
