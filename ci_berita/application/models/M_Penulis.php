<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Penulis extends CI_Model {

	

	function insert_penulis($name,$id_user){
		$hsl=$this->db->query("INSERT INTO tb_penulis (nama_penulis,id_user) VALUES ('$name','$id_user')");
		return $hsl;
	}
	
	function update_penulis_by_id($id,$name,$username){

		$sql = "UPDATE tb_penulis SET name_penulis='" .$name."',id_user='" .$username."', WHERE id_penulis='" .$id. "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	function get_all_penulis(){
		$hsl=$this->db->query("SELECT * FROM tb_penulis ORDER BY nama_penulis");
		return $hsl;
	}

	function delete_penulis($id) {
		$hsl = "DELETE FROM tb_penulis WHERE id_penulis='" .$id ."'";

		$this->db->query($hsl);

	return $this->db->affected_rows();
	}	

	function jumlah_data()
	{
		$hsl = $this->db->query("SELECT COUNT(id_penulis) as total FROM tb_penulis");
		return $hsl;
	}

}

/* End of file M_Penulis.php */
/* Lopenulision: ./applipenulision/models/M_Penulis.php */