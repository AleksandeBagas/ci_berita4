<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('m_berita');
			$this->load->model('m_kategori');
			$this->load->model('m_penulis');
			$this->load->helper('text');
	        $this->load->library('upload');
	}
	public function index()
	{
		
		$data['group']= $this->ion_auth->get_users_groups()->row();
		$data['page'] = "Berita";
		$data['listKategori'] = $this->m_kategori->get_all_cat();
		$data['listPenulis'] = $this->m_penulis->get_all_penulis();
		$data['listBerita'] = $this->m_berita->get_all_berita();
		$data['jumlahBerita'] = $this->m_berita->jumlah_data();
		$data['jumlahKategori'] = $this->m_kategori->jumlah_data();
		$data['content'] = '_backend/listBerita';
		$this->load->view('_backend/_layout/_template',$data);
	}

	public function listKategori()
	{	
		$data['group']= $this->ion_auth->get_users_groups()->row();
		$data['page'] = "Kategori";
		$data['listPenulis'] = $this->m_penulis->get_all_penulis();
		$data['listKategori'] = $this->m_kategori->get_all_cat();
		$data['listBerita'] = $this->m_berita->get_all_berita();
		$data['jumlahBerita'] = $this->m_berita->jumlah_data();
		$data['jumlahKategori'] = $this->m_kategori->jumlah_data();
		$data['content'] = '_backend/listKategori';
		$this->load->view('_backend/_layout/_template',$data);
	}

	public function listPenulis()
	{
		$data['page'] = "Penulis";
		$data['group']= $this->ion_auth->get_users_groups()->row();
		$data['listPenulis'] = $this->m_penulis->get_all_penulis();
		$data['listKategori'] = $this->m_kategori->get_all_cat();
		$data['listBerita'] = $this->m_berita->get_all_berita();
		$data['jumlahBerita'] = $this->m_berita->jumlah_data();
		$data['jumlahKategori'] = $this->m_kategori->jumlah_data();
		$data['content'] = '_backend/listPenulis';
		$this->load->view('_backend/_layout/_template',$data);
	}

	function proc_insertKategori()
	{	
		$data['group']= $this->ion_auth->get_users_groups()->row();
        $name=$this->input->post('name');
		$this->m_kategori->insert_cat($name);
		redirect('admin/listKategori');
	}

	function proc_insertPenulis()
	{

		$data['group']= $this->ion_auth->get_users_groups()->row();
        $name=$this->input->post('name');
        //$name=$this->input->post('id_user');
		$id_user=$this->ion_auth->user()->row()->id;
		$this->m_penulis->insert_penulis($name,$id_user);
		redirect('admin/listPenulis');
	}

	function editKategori()
	{
        $id=$this->input->post('id');
        $name=$this->input->post('name');
		$this->m_kategori->update_cat_by_id($id,$name);
		redirect('admin/listKategori');
	}
	function editPenulis()
	{
        $id=$this->input->post('id_penulis');
        $name=$this->input->post('penulis');
        $username=$this->input->post('username');
		$this->m_kategori->update_cat_by_id($id,$name,$username);
		redirect('admin/listPenulis');
	}

	function insertBerita()
	{	
		$data['listPenulis'] = $this->m_penulis->get_all_penulis();
		$data['listKategori'] = $this->m_kategori->get_all_cat();
		$data['listBerita'] = $this->m_berita->get_all_berita();
		$data['jumlahBerita'] = $this->m_berita->jumlah_data();
		$data['jumlahKategori'] = $this->m_kategori->jumlah_data();	
		$data['group']= $this->ion_auth->get_users_groups()->row();
		$data['page'] = "Berita";
		$data['content'] = '_backend/insertBerita';
        $this->load->view('_backend/_layout/_template', $data);
	}	

	function editBerita()
	{	$id=$this->uri->segment(3);
		$data['group']= $this->ion_auth->get_users_groups()->row();
		$data['page'] = "Berita";
		$data['listPenulis'] = $this->m_penulis->get_all_penulis();
		$data['listKategori'] = $this->m_kategori->get_all_cat();
		$data['listBerita'] = $this->m_berita->get_all_berita();
		$data['jumlahBerita'] = $this->m_berita->jumlah_data();
		$data['jumlahKategori'] = $this->m_kategori->jumlah_data();
		$data['data'] =  $this->m_berita->get_berita_by_id($id);
		$data['content'] = '_backend/editBerita';
        $this->load->view('_backend/_layout/_template', $data);
	}
	function insertKategori()
	{		
		$data['listPenulis'] = $this->m_penulis->get_all_penulis();
		$data['listKategori'] = $this->m_kategori->get_all_cat();
		$data['listBerita'] = $this->m_berita->get_all_berita();
		$data['jumlahBerita'] = $this->m_berita->jumlah_data();
		$data['jumlahKategori'] = $this->m_kategori->jumlah_data();
		$data['group']= $this->ion_auth->get_users_groups()->row();
		$data['page'] = "Kategori";
		$data['content'] = '_backend/insertKategori';
        $this->load->view('_backend/_layout/_template', $data);
	}

	function insertPenulis()
	{	$data['listPenulis'] = $this->m_penulis->get_all_penulis();
		$data['listKategori'] = $this->m_kategori->get_all_cat();
		$data['listBerita'] = $this->m_berita->get_all_berita();
		$data['jumlahBerita'] = $this->m_berita->jumlah_data();
		$data['jumlahKategori'] = $this->m_kategori->jumlah_data();	
		$data['group']= $this->ion_auth->get_users_groups()->row();
		$data['page'] = "Penulis";
		$data['content'] = '_backend/insertPenulis';
        $this->load->view('_backend/_layout/_template', $data);
	}



	// function editBerita()
	// {
	// 	$data['page'] = "Berita";
	// 	$id=$this->uri->segment(3);
	// 	$data['jumlahBerita'] = $this->m_berita->jumlah_data();
	// 	$data['jumlahKategori'] = $this->m_kategori->jumlah_data();
	// 	$data['data'] =  $this->m_berita->get_berita_by_id($id);
	// 	$data['option'] = $this->m_berita->kategori();
	// 	$data['content'] = '_backend/editBerita';
 //        $this->load->view('_backend/_layout/_template', $data);
	// }




	function proc_insertBerita(){
		$config['upload_path'] = './assets/images/upload'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/upload'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/images/upload'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				
	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');
				$cat=$this->input->post('kategori');
				$penulis=$this->input->post('penulis');
				
				$this->m_berita->insert_berita($jdl,$berita,$gambar,$cat,$penulis);
				redirect('admin');
		}else{
		$this->load->view('_backend/_post');
	    }              
	    }else{
		$this->load->view('_backend/_post');
		}		
	}

	function proc_editBerita()
	{
        if(empty($_FILES['filefoto']['name'])){
                $id = $this->input->post('txt_id');				
                $data['berita_judul']=$this->input->post('judul');
                $data['berita_isi']=$this->input->post('berita');
                $data['id_penulis']=$this->input->post('penulis');
				$data['cat_id']=$this->input->post('kategori');
				$this->m_berita->update_berita_by_id($id,$data);
				redirect('admin');
        }

        else
        {
        	$nm_gmb = $this->input->post('txt_gmb');
            $src_file = $config['source_image']='./assets/images/upload'.$nm_gmb;
            unlink($src_file);

            $config['upload_path'] = './assets/images/upload'; //path folder
	   		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    	$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	   		 $this->upload->initialize($config);
	   		 if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/upload'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/images/upload'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

                $id = $this->input->post('txt_id');			
				$data['berita_judul']=$this->input->post('judul');	
                $data['berita_isi']=$this->input->post('berita');
                $data['berita_image']=$gbr['file_name'];
				$data['cat_id']=$this->input->post('kategori');
				$data['id_penulis']=$this->input->post('penulis');
				
				$this->m_berita->update_berita_by_id($id,$data);
				redirect('admin');
			}
			else
			{
				$this->load->view('_backend/_post');
			}
        }
	}

	function delete_berita() {
		$id = $this->uri->segment(3);	
		$result = $this->m_berita->delete_berita($id);	
		redirect('admin');
	}
	function delete_cat() {
		$id = $this->uri->segment(3);	
		$result = $this->m_kategori->delete_cat($id);	
		redirect('admin/listKategori');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */