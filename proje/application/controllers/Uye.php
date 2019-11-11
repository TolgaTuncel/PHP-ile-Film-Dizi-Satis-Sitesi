<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {

	public function __construct ()
		{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Database_Model');
		$this->load->library('session');

		//login olma kontrolü
		if (!$this->session->userdata("uye_session"))
		{
			redirect(base_url().'home/login_ol');
		}

		}

	
	public function index() // bu fonksiyon otomatik olarak çağırılır.
	{
		$query = $this -> db -> query ("SELECT * FROM ayarlar");
        $data['veri'] = $query ->result();

		$query = $this -> db -> query ("SELECT * FROM musteriler WHERE Id=".$this->session->uye_session["id"]);
        $data['musteri'] = $query ->result();
     
        $data["sayfa"] = "Uye Paneli";
        $data["menu"] = "musteri";
        $this->load->view('hesabim',$data); 

 
	}

		public function cikis()
		{

			$this->session->unset_userdata("uye_session");
			redirect(base_url().'home/uyelik');


		}	

		public function hesabim()
	{

			$query = $this -> db -> query ("SELECT * FROM ayarlar");
			$data['veri'] = $query ->result();
			$data["sayfa"]="Uye Hesabı || " ;
			$data["menu"] = "musteri";
			$query = $this -> db -> query ("SELECT * FROM musteriler WHERE Id=".$this->session->uye_session["id"]);
        	$data['musteri'] = $query ->result();

			$this->load->view('hesabim',$data);



	}

	public function uye_guncelle()
	{
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'sehir' => $this->input->post('sehir'),
			'tel' => $this->input->post('tel'),	
			'adres' => $this->input->post('adres'),
			'sifre' => $this->input->post('sifre')					
			
		);

		$id=$this->session->uye_session["id"]; // id'leri uye_sessiondan alıyoruz.
		$this->Database_Model->update_data("musteriler",$data,$id);
		$this->session->set_flashdata("mesaj","Uye Bilgileriniz Güncellendi");
		redirect(base_url().'uye/hesabim');


	}

	public function uye_ekle()
	{
		$data=array
		(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
			'tel' => $this->input->post('tel'),	
			'adres' => $this->input->post('adres'),	
			'sehir' => $this->input->post('sehir'),	
			'cinsiyet' => $this->input->post('cinsiyet')
				
		);
	
		$this->Database_Model->insert_data("musteriler",$data);
		$this->session->set_flashdata("kayıt","Kayıt Olma işlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."home/yeni_uye");
		
	}


	
	
}
