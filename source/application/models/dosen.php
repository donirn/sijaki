<?php 
class Dosen extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['kode_dosen']=="" || $data['nama_dosen']=="" || $data['password']=="")
			return 0;
		$data['password'] = md5($data['password']);

		$str = $this->db->insert_string('dosen', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('dosen');
		return $query->result();
	}
	function get($kode_dosen){
		$query = $this->db->get_where('dosen', array('kode_dosen' => $kode_dosen));
		return $query->result();
	}
	function update($data){
		if($data['kode_dosen']=="" || $data['nama_dosen']=="")
			return 0;
		if($data['password']=="")
			unset($data['password']);
		$query = $this->db->update('dosen', $data, array('kode_dosen' => $data['kode_dosen']));
		return $query;
	}
	function delete($kode_dosen){
		$query = $this->db->delete('dosen', array('kode_dosen' => $kode_dosen));
		return $query;
	}

} ?>