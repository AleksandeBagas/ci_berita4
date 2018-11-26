<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model {


	function insert_berita($jdl,$berita,$gambar,$cat,$penulis){
		$hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image,cat_id,id_penulis) VALUES ('$jdl','$berita','$gambar','$cat','$penulis')");
		return $hsl;
	}
	
	function get_berita_by_id($id){
		$hsl=$this->db->query("SELECT * FROM tbl_berita,tbl_cat WHERE tbl_berita.cat_id=tbl_cat.cat_id AND berita_id='$id'");
		return $hsl;
	}

	function get_berita_by_kategori($id){
		$hsl=$this->db->query("SELECT * FROM tbl_berita WHERE cat_id='$id'");
		return $hsl;
	}
	function get_berita_by_cari($id){
		$hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_judul LIKE '%$id%'");
		return $hsl;
	}

	
	function update_berita_by_id($id,$data){
        $this->db->where('berita_id', $id);
        $this->db->update('tbl_berita', $data);
		
	}

	function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM tbl_berita, tbl_cat,tb_penulis WHERE tbl_berita.cat_id=tbl_cat.cat_id AND tbl_berita.id_penulis=tb_penulis.id_penulis ORDER BY berita_id DESC");
		return $hsl;
	}
	function get_all_berita_mv(){
		$hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_count>'7'");
		return $hsl;
	}

	function update_counter($id){
		$hsl=$this->db->query("UPDATE tbl_berita SET berita_count = berita_count + 1 where berita_id = '".$id."'");
		return $hsl;
	}

	function delete_berita($id) {
		$hsl = "DELETE FROM tbl_berita WHERE berita_id='" .$id ."'";

		$this->db->query($hsl);

	return $this->db->affected_rows();
	}	

	function jumlah_data()
	{
		$hsl = $this->db->query("SELECT COUNT(berita_id) as total FROM tbl_berita");
		return $hsl;
	}

}

/* End of file M_Berita.php */
/* Location: ./application/models/M_Berita.php */