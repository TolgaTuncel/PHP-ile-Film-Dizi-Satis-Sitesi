<?php
class Home extends CI_Controller {

        public function __construct()
        {
              parent::__construct();
              $this->load->database();
			  $this->load->helper(array('form', 'url'));			
				//$this->load->model('Admin_Model');
				$this->load->library('session');
				$this->load->model('Database_Model');
				if(!$this->session->userdata('admin_session'))
				{
					$this->session->set_flashdata("mesaj","Giriş yapmanız gerekli.");
					redirect(base_url()."admin/login");
				}
			
        }

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
	}	
	
	public function ayarlar()
	{
		$query = $this -> db -> query ("SELECT * FROM ayarlar limit 1");
        $data['veri'] = $query ->result();
		$this->load->view('admin/ayarlar',$data);
	
	}	

	public function ayarguncelle($id)
	{
			$data=array(
			'adi' => $this->input->post('adi'),
			'aciklama' => $this->input->post('aciklama'),
			'keywords' => $this->input->post('keywords'),
			'smtpserver' => $this->input->post('smtpserver'),
			'smtpemail' => $this->input->post('smtpemail'),
			'smtpsifre' => $this->input->post('smtpsifre'),
			'adres' => $this->input->post('adres'),
			'sehir' => $this->input->post('sehir'),
			'tel' => $this->input->post('tel'),
			'hakkimizda' => $this->input->post('hakkimizda'),
			'facebook' => $this->input->post('facebook'),
			'instegram' => $this->input->post('instegram'),
			'iletisim' => $this->input->post('iletisim')
		);
	
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("sonuc","AYARLAR GUNCELLENDI");
		
		redirect(base_url()."admin/Home/ayarlar");
			
	}
}
	?>