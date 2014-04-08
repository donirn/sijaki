<?php 
class Ruangan extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['kode_ruangan']=="" || $data['kapasitas']=="" || $data['ada_proyektor']=="")
			return 0;

		$str = $this->db->insert_string('ruangan', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('ruangan');
		return $query->result();
	}
	function get($kode_ruangan){
		$query = $this->db->get_where('ruangan', array('kode_ruangan' => $kode_ruangan));
		return $query->result();
	}
	function update($data){
		if($data['kode_ruangan']=="" || $data['kapasitas']=="" || $data['ada_proyektor']=="")
			return 0;
		$query = $this->db->update('ruangan', $data, array('kode_ruangan' => $data['kode_ruangan']));
		return $query;
	}
	function delete($kode_ruangan){
		$query = $this->db->delete('ruangan', array('kode_ruangan' => $kode_ruangan));
		return $query;
	}

} ?>