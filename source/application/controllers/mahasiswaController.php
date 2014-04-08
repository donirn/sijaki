<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MahasiswaController extends CI_Controller {
	public function index($nim){
		$data['active'] = "home";
		$data['nim'] = $nim;

		$this->load->view('header');
		$this->load->view('mahasiswa/menu',$data);
		$this->load->view('footer');
	}
	function viewKelas($nim){
		$data['active'] = "kelas";
		$data['nim'] = $nim;

		$this->load->model('kelas');
		$data['kelas'] = $this->kelas->getByNim($nim);

		$this->load->view('header');
		$this->load->view('mahasiswa/menu',$data);
		$this->load->view('mahasiswa/tabelKelas',$data);
		$this->load->view('footer');
	}
	function viewRegistrasi($nim, $message = -1, $messageData = ""){
		$data['active'] = "registrasi";
		$data['nim'] = $nim;
		$data['messageData'] = $messageData;

		$this->load->model('registrasi');
		$data['registrasi'] = $this->registrasi->getByNim($nim);

		$this->load->view('header');
		$this->load->view('mahasiswa/menu',$data);
		$this->load->view('mahasiswa/tabelRegistrasi',$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view('footer');
	}
	function insertRegistrasi($nim, $kode_kelas){
		$data['active'] = "registrasi";
		$dataInput['nim'] = $nim;
		$dataInput['kode_kelas'] = $kode_kelas;

		$this->load->model('registrasi');
		$message = $this->registrasi->insert($dataInput);

		$this->viewRegistrasi($nim, $message, "dinputkan");
	}
	function deleteRegistrasi($nim, $kode_registrasi){
		$data['active'] = "registrasi";
		$this->load->model('registrasi');
		$message = $this->registrasi->delete($kode_registrasi);

		$this->viewRegistrasi($nim, $message,"dihapus");
	}
	function viewJadwal($nim){
		$data['active'] = "jadwal";
		$data['nim'] = $nim;

		$this->load->model('jadwal');
		$data['jadwal'] = $this->jadwal->getByNim($nim);

		$this->load->view('header');
		$this->load->view('mahasiswa/menu',$data);
		$this->load->view('mahasiswa/tabelJadwal',$data);
		$this->load->view('footer');
	}
}
