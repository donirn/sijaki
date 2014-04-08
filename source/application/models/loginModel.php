<?php 
class LoginModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function verify($data){
		if($data['username']=="" || $data['password']=="")
			return 0;
		$username = $data['username'];
		$password = md5($data['password']);

		$query = $this->db->query("SELECT username from admin where username='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "admin","result"=> $query->result());

		$query = $this->db->query("SELECT kode_dosen from dosen where kode_dosen='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "dosen","result"=> $query->result());

		$query = $this->db->query("SELECT nim from mahasiswa where nim='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "mahasiswa","result"=> $query->result());
		return 0;
	}
} ?>