<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct ()
		{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Database_Model');

		}

	
	public function index() // bu fonksiyon otomatik olarak çağırılır.
	{
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
        $data['veri'] = $query ->result();

		$query = $this -> db -> query ("SELECT * FROM urunler limit 4");//slider'a kaç ürün gideceği limit ile belirlendi
        $data['slider'] = $query ->result();

        $query = $this -> db -> query ("SELECT * FROM urunler limit 8");
        $data['urunler'] = $query ->result();

		$this->load->view('_header',$data); 
		$this->load->view('_slider'); 
		$this->load->view('_sidebar'); 
		$this->load->view('_content');
		$this->load->view('_footer');  
	}

		public function iletisim() // bu fonksiyon otomatik olarak çağırılır.
	{
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
        $data['veri'] = $query ->result();

		$this->load->view('iletisim',$data); 
 
	}

		public function mesajkaydet() // bu fonksiyon otomatik olarak çağırılır.
	{
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'tel' => $this->input->post('tel'),						
			'mesaj' => $this->input->post('mesaj'),
			'IP' => $_SERVER['REMOTE_ADDR']	
		);
		//print_r($data);
		$this->Database_Model->insert_data("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Mesajınız Başarı ile Alındı.<br>Ilginiz Için Teşekkürler.");

		$adsoy=$this->input->post('adsoy');
		$email=$this->input->post('email');
		
		//Email ayarlarını veritabanından okuma
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		//Email Server ayarları
	  $config=array(
               	
		       'smtp_host' => $data["veri"][0]->smtpserver,
		       'smtp_port' => $data["veri"][0]->smtpport,
		       'smtp_user' => $data["veri"][0]->smtpemail,
		       'smtp_pass' => $data["veri"][0]->smtpsifre,
		       'mailtype' =>'html',
		       'charset' =>'utf-8',
		        'wordwrap' =>TRUE
		        );
				
				
		//İstediğniz Şekilde mail içeriğini Html Olarak oluşturabilirsiniz 
		$mesaj="Sayın : ".$adsoy."<br>Göndermiş olduğunuz mesaj alındı.<br>Isteğiniz doğrultusunda bilgilendirileceksiniz.<br> İlginiz için teşekkürlerimizi sunarız.<br>";
		$mesaj.="<br>-------------------------------------------------------<br>";
		$mesaj.=$data["veri"][0]->adi."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->smtpemail."<br>";
		$mesaj.="<br>-------------------------------------------------------<br>";
		$mesaj.="Gönderdiğiniz mesaj:<br>";
		$mesaj.=$this->input->post('mesaj');
		
		//Email Gönderme**********
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail);
		$this->email->to($email);
		$this->email->subject($data["veri"][0]->adi."Form Alındı Mesajı");
		$this->email->message($mesaj);
		
		//Send Email
		if($this->email->send()){
			$this->session->set_flashdata("email_sent","Email Başarıyla Gönderildi");
		}else
		{
			$this->session->set_flashdata("email_sent","Email Göndermede Hata Oluştu");
			show_error($this->email->print_debugger());//ayrıntılı hata dökümü için
		}	
		redirect(base_url()."home/iletisim");
 					
	}

		public function urundetay($id)
		{
			
		$data['veri'] = $this->Database_Model->urun_get($id);
		$query = $this -> db -> query ("SELECT * FROM urun_resimler WHERE urun_id = $id");
        $data['resimler'] = $query ->result();
        $this->load->view('urun_detay',$data); 

		}

	
	public function uyelik()
	{			
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$data["menu"] = "uyelik";
		$this->load->view('uyelik',$data);
	}

	public function login()
	{
		$data["menu"] = "login";
		$email=$this->input->post('email');
		$sifre=$this->input->post('sifre');

		$email=$this->security->xss_clean($email);
		$sifre=$this->security->xss_clean($sifre);

		if($email and $sifre)
		{
		$result=$this->Database_Model->login('musteriler',$email,$sifre);
		if($result) 
		{
				// Kullanıcı var ise bilgileri diziye aktarılıyor...
				
				
                 $sess_array = array(
			 	 'id' => $result[0]->Id,				 
				 'email' => $result[0]->email,
				 'adsoy' => $result[0]->adsoy
				 				 );
                 // Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktarılıyor...
                 $this->session->set_userdata('uye_session', $sess_array);
				 
				 redirect(base_url().'home/uyepanel/');
			     //$this->index();
           		//return TRUE;
        }
        else
		{
			$this->session->set_flashdata("mesaj","Geçersiz Email ya da Şifre");
        	redirect(base_url().'home/uyelik');
        }
			
		}
		else
		{
			$this->session->set_flashdata("mesaj","Lütfen alanları doldurun.");	
			redirect(base_url().'home/uyelik');
		}	
	}

		public function uyeekle()
	{
		$data["menu"] = "uyeekle";
		$data=array
		(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
			'tel' => $this->input->post('tel'),	
			'adres' => $this->input->post('adres'),	
			'sehir' => $this->input->post('sehir'),	
			'cinsiyet' => $this->input->post('cinsiyet'),
			'durum' => "aktif"
				
		);
	
		$this->Database_Model->insert_data("musteriler",$data);
		$this->session->set_flashdata("kayıt","Kayıt Olma işlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."home/uyelik");
		
	}

		public function cikis()
		{

			$this->session->unset_userdata("uye_session");
			redirect(base_url().'home/uyelik');


		}	

	public function uyepanel()
	{			
			if(!$this->session->userdata('uye_session')){  //Login kontrolü..
				$this->session->set_flashdata("mesaj","Giriş yapmak için E-mail ve Şifrenizi yazınız.");
           		redirect(base_url()."home/uyelik");
			}
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$id=$this->session->uye_session["id"];
		$query = $this -> db -> query ("SELECT * FROM musteriler WHERE Id=$id");
		
		$data['veri2'] = $query ->result();
		$data["menu"] = "uyepanel";
		$this->load->view('uye_paneli',$data);
	}

	public function uyeguncelle($id)
	{
		$data["menu"] = "uyeguncelle";
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'sifre' => $this->input->post('sifre'),
			'email' => $this->input->post('email'),
			'tel' => $this->input->post('tel'),
			'adres' => $this->input->post('adres'),
			'sehir' => $this->input->post('sehir'),
			'cinsiyet' => $this->input->post('cinsiyet')			
				
		);
		//print_r($data);
		$this->Database_Model->update_data("musteriler",$data,$id);
		$this->session->set_flashdata("guncel","ÜYE GÜNCELLENDİ.");
		redirect(base_url().'home/uyepanel/');
	}

	public function sepete_ekle($id)
	{
		$data["menu"] = "sepete_ekle";
		$data=array(
			'musteri_id' => $this->session->uye_session["id"],
			'urun_id' => $id,
			'miktar' => $this->input->post('miktar')						
				
		);
		//print_r($data);
		$this->Database_Model->insert_data("sepet",$data);
		$this->session->set_flashdata("mesaj","ÜRÜN SEPETE EKLENDİ.");
		redirect(base_url()."home/urundetay/$id");
	}

	public function sepetim()
	{
		$data["menu"] = "sepetim";
		if(!$this->session->userdata('uye_session'))
			{  //Login kontrolü..
				$this->session->set_flashdata("mesaj","Sepete eklemek için giriş yapınız.");
           		redirect(base_url()."home/uyelik");
			}
			
		$musteri_id=$this->session->uye_session["id"];
		
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$query = $this -> db -> query ("SELECT * FROM musteriler WHERE Id=$musteri_id limit 1");
		$data['musteri'] = $query ->result();
		
		$query = $this -> db -> query ("SELECT sepet.*, urunler.adi as urunadi, urunler.sfiyat as urunfiyat, urunler.resim as urunresim
				FROM sepet
				INNER JOIN urunler ON urunler.Id=sepet.urun_id
				WHERE sepet.musteri_id = $musteri_id
				ORDER BY urunadi");
		$data['veriler'] = $query ->result();
		$this->load->view('uye_sepet',$data);
	}

	public function sepetsil($id)
	{	
	$data["menu"] = "sepetsil";
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$this->Database_Model->delete_data("sepet",$id);
		$this->session->set_flashdata("mesaj","ÜRÜN SİLME BAŞARILI.");		
		redirect(base_url()."home/sepetim");	
	}

	public function siparis_tamamla()
	{	
	$data["menu"] = "siparis_tamamla";
		$musteri_id=$this->session->uye_session["id"];
		
		//KREDI KARTI BILGILERI GONDERILIP ONAY BEKLENIYOR
		
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'adres' => $this->input->post('adres'),
			'tel' => $this->input->post('tel'),						
			'sehir' => $this->input->post('sehir'),
			'tutar' => $this->input->post('tutar'),
			'musteri_id' =>$musteri_id,
			'IP' => $_SERVER['REMOTE_ADDR']
		);
		//print_r($data);
		$this->Database_Model->insert_data("siparisler",$data);
		
		$query= $this->db->query("SELECT max(Id) AS siparis_id FROM siparisler WHERE musteri_id=$musteri_id");
		$result=$query->result();
		$siparis_id=$result[0]->siparis_id;
		if($siparis_id){
				$query = $this -> db -> query ("SELECT sepet.*, urunler.adi as urunadi, urunler.sfiyat as urunfiyat, urunler.resim as urunresim
					FROM sepet
					INNER JOIN urunler ON urunler.Id=sepet.urun_id
					WHERE sepet.musteri_id = $musteri_id
					ORDER BY urunadi");
				$veriler = $query ->result();
				
				foreach	($veriler as $rs)
				{
					$data=array(
					'musteri_id' =>$this->session->uye_session["id"],
					'siparis_id' => $siparis_id,
					'urun_id' => $rs->Id,
					'adi' => $rs->urunadi,						
					'miktar' => $rs->miktar,
					'fiyat' => $rs->urunfiyat,
					'tutar' => $rs->miktar*$rs->urunfiyat
					);
					$this->Database_Model->insert_data("siparis_urunler",$data);
				}
			}
			
		$this -> db -> query ("DELETE FROM sepet WHERE musteri_id = $musteri_id");	// Siparişten sonra sepeti boşaltma işlemi..
		
		$this->session->set_flashdata("mesaj","Siparişiniz alınmıştır ve en yakın zamanda kargoya verilecektir. <br>Teşekkür ederiz.");
		redirect(base_url()."home/siparislerim");
	}

	public function siparislerim()
	{	
			$data["menu"] = "siparislerim";
			if(!$this->session->userdata('uye_session'))
			{  //Login kontrolü..
				$this->session->set_flashdata("mesaj","Giriş yapmak için E-mail ve Şifrenizi yazınız.");
           		redirect(base_url()."home/uyelik");
			}
			//title lar dinamik geldiği için ayarları çekiyoruz.
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$musteri_id=$this->session->uye_session["id"];
		$query = $this -> db -> query ("SELECT * FROM siparisler WHERE musteri_id = $musteri_id");
		
		$data['veriler'] = $query ->result();
		
		
		$this->load->view('uye_siparisler',$data);
		
		
	}
	public function urunlistele($id)
	{	
			$data["menu"] = "ürün listesi";
			 
			//title lar dinamik geldiği için ayarları çekiyoruz.
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$query = $this -> db -> query ("SELECT * FROM urunler WHERE kategori_id = $id");
		
		$data['urunler'] = $query ->result();
		
		
		$this->load->view('urun_listele',$data);
		
		
	}

	public function siparis_detay($id)
	{
		$data["menu"] = "siparis_detay";
		if(!$this->session->userdata('uye_session'))
			{  //Login kontrolü..
				$this->session->set_flashdata("mesaj","Sepete eklemek için giriş yapınız.");
           		redirect(base_url()."home/uyelik");
			}
			
		$musteri_id=$this->session->uye_session["id"];
		
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$musteri_id=$this->session->uye_session["id"];
		$query = $this -> db -> query ("SELECT * FROM siparisler WHERE Id = $id");
		$data['siparis'] = $query ->result();
		
		$query = $this -> db -> query ("SELECT * FROM siparis_urunler WHERE siparis_id = $id");
		$data['urunler'] = $query ->result();
		
		$this->load->view('uye_siparis_detay',$data);
	}

	public function hakkimizda()
	{
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$data["menu"] = "hakkimizda";
		
		$this->load->view('hakkimizda',$data);
	}

	public function kategori($id)
	{	
		$data["menu"] = "kategori";
		
		//result=$this->Database_Model->get_kategori($id);
		$sorgu=$this->db->query("SELECT * FROM urunler WHERE kategori_id=$id");
		$data["veri"]=$sorgu->result();

		if($data["veri"])
		{
			
			$sorgu=$this->db->query("SELECT * FROM urunler WHERE kategori_id=$id");
			$data["veri"]=$sorgu->result();
			
			$query = $this -> db -> get("kategoriler");
			$data['kategoriler'] = $query ->result();
			$this->load->view('kategori',$data);
		}
		else {
			$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
			$data['veri'] = $query ->result();
		
			$query = $this -> db -> get("kategoriler");
			$data['kategoriler'] = $query ->result();
			
			$this->load->view('sayfayok',$data);
		
	}
		
	}

	public function sorucevap()  //Sayfa ayarları contollers fonksiyonu...
	{	
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
		$data['veri'] = $query ->result();
		
		$query = $this -> db -> query ("SELECT * FROM sorucevaplar limit 10");
		$data['sorular'] = $query ->result();
		
		$this->load->view('sorucevap',$data);
		
	}
}
