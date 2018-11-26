<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
public function __construct()
{
	parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_kategori');
		$this->load->helper('text');
        $this->load->library('upload');
}
	public function index()
	{
		$x['listKategori'] = $this->m_kategori->get_all_cat();
		$x['newpost'] = $this->m_berita->get_all_berita();
		$x['berita'] = $this->m_berita->get_all_berita();
		$x['sidebar'] = $this->m_berita->get_all_berita_mv();
		$x['content'] = '_frontend/_content';
		$this->load->view('_frontend/layout/_template',$x);
	}

	function view(){
		$id=$this->uri->segment(3);
		$this->m_berita->update_counter($id);
		$x['listKategori'] = $this->m_kategori->get_all_cat();
		$x['newpost'] = $this->m_berita->get_all_berita();
		$x['sidebar'] = $this->m_berita->get_all_berita_mv();
		$x['berita'] = $this->m_berita->get_all_berita();
		$x['beritautama']=$this->m_berita->get_berita_by_id($id);
		$x['content'] = '_frontend/_detailcontent';
		$this->load->view('_frontend/layout/_template',$x);
	}

	function kategori()
	{

	$id=$this->uri->segment(3);
		$x['listKategori'] = $this->m_kategori->get_all_cat();
	$x['newpost'] = $this->m_berita->get_all_berita();
	$x['sidebar'] = $this->m_berita->get_all_berita_mv();
	$x['berita'] = $this->m_berita->get_berita_by_kategori($id);
	$x['content'] = '_frontend/_content';
	$this->load->view('_frontend/layout/_template',$x);	
	}

	function cari()
	{
	$id = $this->input->post('cari');
		$x['listKategori'] = $this->m_kategori->get_all_cat();
	$x['title'] = '_frontend/_title';
	$x['newpost'] = $this->m_berita->get_all_berita();
	$x['sidebar'] = $this->m_berita->get_all_berita_mv();
	$x['berita'] = $this->m_berita->get_berita_by_cari($id);
	$x['content'] = '_frontend/_content';
	$this->load->view('_frontend/layout/_template',$x);	
	}


}


/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */