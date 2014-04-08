<?php 
class Registrasi extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['nim']=="" || $data['kode_kelas']=="")
			return 0;
		$str = $this->db->insert_string('registrasi', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('registrasi');
		return $query->result();
	}
	function get($kode_kelas){
		$query = $this->db->get_where('registrasi', array('kode_registrasi' => $kode_registrasi));
		return $query->result();
	}
	function getByNim($nim){
		$query = $this->db->get_where('registrasi', array('nim' => $nim));
		return $query->result();
	}
	function update($data){
		if($data['kode_registrasi']=="" || $data['kapasitas']=="" || $data['kode_matakuliah']=="" || $data['kode_dosen']=="")
			return 0;
		$query = $this->db->update('registrasi', $data, array('kode_registrasi' => $data['kode_registrasi']));
		return $query;
	}
	function delete($kode_registrasi){
		$query = $this->db->delete('registrasi', array('kode_registrasi' => $kode_registrasi));
		return $query;
	}

} ?>