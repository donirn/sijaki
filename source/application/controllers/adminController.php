<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends CI_Controller {


	public function index(){
		$data['active'] = "home";

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('footer');
	}
//mahasiswa
	function viewMahasiswa($message = -1, $messageData=""){
		$data['active'] = "mahasiswa";
		$this->load->model('mahasiswa');
		$data['mahasiswa'] = $this->mahasiswa->get_all();
		$data['messageData'] = $messageData;

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/tabelMahasiswa',$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view('footer');
	}
	function insertMahasiswa(){
		$data['active'] = "mahasiswa";
		$this->load->model('mahasiswa');
		$message = $this->mahasiswa->insert($_POST);

		$this->viewMahasiswa($message, "dinputkan");
	}
	function formUpdateMahasiswa($nim){
		$data['active'] = "mahasiswa";
		$this->load->model('mahasiswa');
		$data['mahasiswa'] = $this->mahasiswa->get($nim);

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/updateMahasiswa', $data);
		$this->load->view('footer');
	}
	function updateMahasiswa(){
		$data['active'] = "mahasiswa";
		$this->load->model('mahasiswa');
		$message = $this->mahasiswa->update($_POST);

		$this->viewMahasiswa($message,"diupdate");
	}
	function deleteMahasiswa($nim){
		$data['active'] = "mahasiswa";
		$this->load->model('mahasiswa');
		$message = $this->mahasiswa->delete($nim);

		$this->viewMahasiswa($message,"dihapus");
	}
//dosen
	function viewDosen($message = -1, $messageData=""){
		$data['active'] = "dosen";
		$this->load->model('dosen');
		$data['dosen'] = $this->dosen->get_all();
		$data['messageData'] = $messageData;

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/tabelDosen',$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view('footer');
	}
	function insertDosen(){
		$data['active'] = "dosen";
		$this->load->model('dosen');
		$message = $this->dosen->insert($_POST);

		$this->viewDosen($message, "dinputkan");
	}
	function formUpdateDosen($kode_dosen){
		$data['active'] = "dosen";
		$this->load->model('dosen');
		$data['dosen'] = $this->dosen->get($kode_dosen);

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/updateDosen', $data);
		$this->load->view('footer');
	}
	function updateDosen(){
		$data['active'] = "dosen";
		$this->load->model('dosen');
		$message = $this->dosen->update($_POST);

		$this->viewDosen($message,"diupdate");
	}
	function deleteDosen($kode_dosen){
		$data['active'] = "dosen";
		$this->load->model('dosen');
		$message = $this->dosen->delete($kode_dosen);

		$this->viewDosen($message,"dihapus");
	}
//matakuliah
	function viewMatakuliah($message = -1, $messageData=""){
		$data['active'] = "matakuliah";
		$this->load->model('matakuliah');
		$data['matakuliah'] = $this->matakuliah->get_all();
		$data['messageData'] = $messageData;

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/tabelMatakuliah',$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view('footer');
	}
	function insertMatakuliah(){
		$data['active'] = "matakuliah";
		$this->load->model('matakuliah');
		$message = $this->matakuliah->insert($_POST);

		$this->viewMatakuliah($message, "dinputkan");
	}
	function formUpdateMatakuliah($kode_matakuliah){
		$data['active'] = "matakuliah";
		$this->load->model('matakuliah');
		$data['matakuliah'] = $this->matakuliah->get($kode_matakuliah);

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/updateMatakuliah', $data);
		$this->load->view('footer');
	}
	function updateMatakuliah(){
		$data['active'] = "matakuliah";
		$this->load->model('matakuliah');
		$message = $this->matakuliah->update($_POST);

		$this->viewMatakuliah($message,"diupdate");
	}
	function deleteMatakuliah($kode_matakuliah){
		$data['active'] = "matakuliah";
		$this->load->model('matakuliah');
		$message = $this->matakuliah->delete($kode_matakuliah);

		$this->viewMatakuliah($message,"dihapus");
	}
//ruangan
	function viewRuangan($message = -1, $messageData=""){
		$data['active'] = "ruangan";
		$this->load->model('ruangan');
		$data['ruangan'] = $this->ruangan->get_all();
		$data['messageData'] = $messageData;

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/tabelRuangan',$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view('footer');
	}
	function insertRuangan(){
		$data['active'] = "ruangan";
		$this->load->model('ruangan');
		$message = $this->ruangan->insert($_POST);

		$this->viewRuangan($message, "dinputkan");
	}
	function formUpdateRuangan($kode_ruangan){
		$data['active'] = "ruangan";
		$this->load->model('ruangan');
		$data['ruangan'] = $this->ruangan->get($kode_ruangan);

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/updateRuangan', $data);
		$this->load->view('footer');
	}
	function updateRuangan(){
		$data['active'] = "ruangan";
		$this->load->model('ruangan');
		$message = $this->ruangan->update($_POST);

		$this->viewRuangan($message,"diupdate");
	}
	function deleteRuangan($kode_ruangan){
		$data['active'] = "ruangan";
		$this->load->model('ruangan');
		$message = $this->ruangan->delete($kode_ruangan);

		$this->viewRuangan($message,"dihapus");
	}
//kelas
	function viewKelas($message = -1, $messageData=""){
		$data['active'] = "kelas";
		$this->load->model('kelas');
		$data['kelas'] = $this->kelas->get_all();
		$data['messageData'] = $messageData;

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/tabelKelas',$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view('footer');
	}
	function insertKelas(){
		$data['active'] = "kelas";
		$this->load->model('kelas');
		$message = $this->kelas->insert($_POST);

		$this->viewKelas($message, "dinputkan");
	}
	function formUpdateKelas($kode_kelas){
		$data['active'] = "kelas";
		$this->load->model('kelas');
		$data['kelas'] = $this->kelas->get($kode_kelas);

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/updateKelas', $data);
		$this->load->view('footer');
	}
	function updateKelas(){
		$data['active'] = "kelas";
		$this->load->model('kelas');
		$message = $this->kelas->update($_POST);

		$this->viewKelas($message,"diupdate");
	}
	function deleteKelas($kode_kelas){
		$data['active'] = "kelas";
		$this->load->model('kelas');
		$message = $this->kelas->delete($kode_kelas);

		$this->viewKelas($message,"dihapus");
	}
//jadwal
	function viewJadwal($message = -1, $messageData=""){
		$data['active'] = "jadwal";
		$this->load->model('jadwal');
		$data['jadwal'] = $this->jadwal->get_all();
		$data['messageData'] = $messageData;

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/tabelJadwal',$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view('footer');
	}
	function insertJadwal(){
		$data['active'] = "jadwal";
		$this->load->model('jadwal');
		$message = $this->jadwal->insert($_POST);

		$this->viewJadwal($message, "dinputkan");
	}
	function formUpdatejadwal($kode_jadwal){
		$data['active'] = "jadwal";
		$this->load->model('jadwal');
		$data['jadwal'] = $this->jadwal->get($kode_jadwal);

		$this->load->view('header');
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/updateJadwal', $data);
		$this->load->view('footer');
	}
	function updateJadwal(){
		$data['active'] = "jadwal";
		$this->load->model('jadwal');
		$message = $this->jadwal->update($_POST);

		$this->viewJadwal($message,"diupdate");
	}
	function deleteJadwal($kode_jadwal){
		$data['active'] = "jadwal";
		$this->load->model('jadwal');
		$message = $this->jadwal->delete($kode_jadwal);

		$this->viewJadwal($message,"dihapus");
	}
}