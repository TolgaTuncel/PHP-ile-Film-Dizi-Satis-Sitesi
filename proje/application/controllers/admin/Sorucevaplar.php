<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sorucevaplar extends CI_Controller {
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
		$data["title"]="SoruCevap Listeleme Sayfası";
		$query = $this -> db -> query ("SELECT * FROM sorucevaplar order by Id");
		$data['veriler'] = $query ->result();

		$this->load->view('admin/sorucevap_listesi',$data);
	}
	public function ekle()
	{
		$this->load->view('admin/sorucevap_ekle');
	}
	public function kaydet()
	{
		$data=array(
			'soru' => $this->input->post('soru'),
			'cevap' => $this->input->post('cevap')
				
		);
		//print_r($data);
		$this->Database_Model->insert_data("sorucevaplar",$data);
		$this->session->set_flashdata("mesaj","SORUCEVAP EKLENDİ.");
		redirect(base_url()."admin/sorucevaplar");
	}
	public function duzenle($id)
	{
		$query = $this -> db -> query ("SELECT * FROM sorucevaplar WHERE Id=$id");
		$data['veri'] = $query ->result();
		$this->load->view('admin/sorucevap_duzenle',$data);
	}


	public function sil($id)
	{
		$this->Database_Model->delete_data("sorucevaplar",$id);
		$this->session->set_flashdata("mesaj","SİLME BAŞARILI.");		
		redirect(base_url()."admin/sorucevaplar");
	}
    public function guncelle($id)
	{
		$data=array(
			'soru' => $this->input->post('soru'),
			'cevap' => $this->input->post('cevap'),
				
		);
		//print_r($data);
		$this->Database_Model->update_data("sorucevaplar",$data,$id);
		$this->session->set_flashdata("mesaj","SORUCEVAP GÜNCELLENDİ.");
		redirect(base_url()."admin/sorucevaplar");
	}




}
?>
