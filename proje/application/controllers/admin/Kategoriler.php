<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategoriler extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->helper('url'); 
			$this->load->library('session');
			$this->load->database(); // Sayfada veritabanına erişmemizi sağlar.
			$this->load->model('Database_Model');
			 //Model çağırmak.
			if(!$this->session->userdata('admin_session')){  //Her sayfada giriş kontrolü yapmak.
				$this->session->set_flashdata("mesaj","Giriş yapmak için E-mail ve Şifrenizi yazınız.");
           		redirect(base_url()."admin/login");
			}
		}

	public function index()  // Bu index fonksiyonu otomatik olarak çağrılır.
	{
		$data["title"]="Kategori Listeleme Sayfası";
		$query = $this -> db -> query ("SELECT * FROM kategoriler order by ust_id");
		$data['veriler'] = $query ->result();

		$this->load->view('admin/kategori_listesi',$data);
	}
	public function ekle()
	{
		$this->load->view('admin/kategori_ekle');
		
	}
	public function kaydet()
	{
		$data=array(
			'adi' => $this->input->post('adi')
				
		);
		//print_r($data);
		$this->Database_Model->insert_data("kategoriler",$data);
		$this->session->set_flashdata("mesaj","KATEGORİ EKLENDİ.");
		redirect(base_url()."admin/kategoriler");
	}
	
	public function sil($id)
	{
		$this->Database_Model->delete_data("kategoriler",$id);
		$this->session->set_flashdata("mesaj","KATEGORİ SİLİNDİ.");		
		redirect(base_url()."admin/kategoriler");
	}
    




}
?>
