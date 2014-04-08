<?php 
class Jadwal extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['nama_hari']=="" || $data['waktu_mulai']=="" || $data['waktu_akhir']=="" || $data['kode_kelas']=="" || $data['kode_ruangan']=="")
			return 0;
		$str = $this->db->insert_string('jadwal', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('jadwal');
		return $query->result();
	}
	function get($kode_jadwal){
		$query = $this->db->get_where('jadwal', array('kode_jadwal' => $kode_jadwal));
		return $query->result();
	}
	function getByKodeDosen($kode_dosen){
		$query = $this->db->query("SELECT kode_jadwal, nama_hari, waktu_mulai, waktu_akhir, kode_kelas, kode_ruangan FROM kelas NATURAL JOIN jadwal WHERE kode_dosen='".$kode_dosen."'");
		return $query->result();
	}
	function getByNim($nim){
		$query = $this->db->query("SELECT kode_jadwal, nama_hari, waktu_mulai, waktu_akhir, kode_kelas, kode_ruangan FROM registrasi NATURAL JOIN kelas NATURAL JOIN jadwal WHERE nim = '".$nim."'");
		return $query->result();
	}
	function update($data){
		if($data['kode_jadwal']=="" || $data['nama_hari']=="" || $data['waktu_mulai']=="" || $data['waktu_akhir']=="" || $data['kode_kelas']=="" || $data['kode_ruangan']=="")
			return 0;
		$query = $this->db->update('jadwal', $data, array('kode_jadwal' => $data['kode_jadwal']));
		return $query;
	}
	function delete($kode_jadwal){
		$query = $this->db->delete('jadwal', array('kode_jadwal' => $kode_jadwal));
		return $query;
	}

} ?>