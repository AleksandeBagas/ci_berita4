<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {


	function insert_cat($name){
		$hsl=$this->db->query("INSERT INTO tbl_cat (name) VALUES ('$name')");
		return $hsl;
	}
	
	function update_cat_by_id($id,$data){

		$sql = "UPDATE tbl_cat SET name='" .$data."' WHERE cat_id='" .$id. "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	function get_all_cat(){
		$hsl=$this->db->query("SELECT * FROM tbl_cat ORDER BY name");
		return $hsl;
	}

	function delete_cat($id) {
		$hsl = "DELETE FROM tbl_cat WHERE cat_id='" .$id ."'";

		$this->db->query($hsl);

	return $this->db->affected_rows();
	}	

	function jumlah_data()
	{
		$hsl = $this->db->query("SELECT COUNT(cat_id) as total FROM tbl_cat");
		return $hsl;
	}

}

/* End of file M_Berita.php */
/* Location: ./application/models/M_Berita.php */