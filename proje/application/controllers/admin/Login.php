<?php
class login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
				$this->load->helper(array('form', 'url'));			
				$this->load->model('Database_Model');
				$this->load->library('session');
			
        }

	public function index()
	{
		$this->load->view('admin/login');

		if($this->session->userdata('admin_session'))
				{
					
					redirect(base_url()."admin/home");
				}

	}	


	public function giris_yap()
	{

		  $email=$this->input->post('email');
		  $sifre=$this->input->post('sifre');

		  $email=$this->security->xss_clean($email);
		  $sifre=$this->security->xss_clean($sifre);

		  $result=$this->Database_Model->login('kullanicilar',$email,$sifre);

		if($result) {
				// Kullanıcı var ise bilgileri diziye aktarılıyor
                 $sess_array = array(
			 	 'id' => $result[0]->Id,
				 'yetki' => $result[0]->yetki,
				 'email' => $result[0]->email,
				 'adsoy' => $result[0]->adsoy
			
				 );
                 // Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktarılıyor
                 $this->session->set_userdata('admin_session', $sess_array);
				 
				 redirect(base_url()."admin/home");
			
				 //return TRUE;
                 }
          		
          
		  else 
		  {
            $this->session->set_flashdata("mesaj","Geçersiz Email ya da Şifre");   
          		
			redirect(base_url()."admin/login");

			
           // return FALSE;
          }

	}

	public function cikis_yap()
	{
			$this->session->unset_userdata('admin_session');
			redirect(base_url()."admin/login");


	}
	
}
	?>