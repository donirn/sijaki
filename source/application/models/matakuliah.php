<?php 
class Matakuliah extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['kode_matakuliah']=="" || $data['nama_matakuliah']=="")
			return 0;

		$str = $this->db->insert_string('mata_kuliah', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('mata_kuliah');
		return $query->result();
	}
	function get($kode_matakuliah){
		$query = $this->db->get_where('mata_kuliah', array('kode_matakuliah' => $kode_matakuliah));
		return $query->result();
	}
	function update($data){
		if($data['kode_matakuliah']=="" || $data['nama_matakuliah']=="")
			return 0;
		$query = $this->db->update('mata_kuliah', $data, array('kode_matakuliah' => $data['kode_matakuliah']));
		return $query;
	}
	function delete($kode_matakuliah){
		$query = $this->db->delete('mata_kuliah', array('kode_matakuliah' => $kode_matakuliah));
		return $query;
	}

} ?>