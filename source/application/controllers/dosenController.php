<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DosenController extends CI_Controller {
	public function index($kode_dosen){
		$data['active'] = "home";
		$data['kode_dosen'] = $kode_dosen;

		$this->load->view('header');
		$this->load->view('dosen/menu',$data);
		$this->load->view('footer');
	}
	function viewJadwal($kode_dosen){
		$data['active'] = "jadwal";
		$data['kode_dosen'] = $kode_dosen;

		$this->load->model('jadwal');
		$data['jadwal'] = $this->jadwal->getByKodeDosen($kode_dosen);

		$this->load->view('header');
		$this->load->view('dosen/menu',$data);
		$this->load->view('dosen/tabelJadwal',$data);
		$this->load->view('footer');
	}
}