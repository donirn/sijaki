<?php 
class Kelas extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['kode_kelas']=="" || $data['kapasitas']=="" || $data['kode_matakuliah']=="" || $data['kode_dosen']=="")
			return 0;
		$str = $this->db->insert_string('kelas', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('kelas');
		return $query->result();
	}
	function get($kode_kelas){
		$query = $this->db->get_where('kelas', array('kode_kelas' => $kode_kelas));
		return $query->result();
	}
	function getByNim($nim){
		$query = $this->db->query("SELECT * FROM kelas WHERE kode_kelas NOT IN (SELECT kode_kelas FROM kelas NATURAL JOIN registrasi WHERE nim='".$nim."')");
		return $query->result();
	}
	function update($data){
		if($data['kode_kelas']=="" || $data['kapasitas']=="" || $data['kode_matakuliah']=="" || $data['kode_dosen']=="")
			return 0;
		$query = $this->db->update('kelas', $data, array('kode_kelas' => $data['kode_kelas']));
		return $query;
	}
	function delete($kode_kelas){
		$query = $this->db->delete('kelas', array('kode_kelas' => $kode_kelas));
		return $query;
	}

} ?>