<?php
class kullanicilar extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->database(); //Sayfada veritabanına erişmemize sağlar
                $this->load->helper('url');          
                $this->load->model('Database_Model'); //Model çağırma
                $this->load->library('session');
                if(!$this->session->userdata('admin_session'))
                {
                    $this->session->set_flashdata("mesaj","Giriş yapmanız gerekli.");
                    redirect(base_url()."admin/login");
                }
            
        }

    public function index()
    {   
        $data["title"]="Kullanıcı Listeleme Sayfası";
        $query = $this -> db -> query ("SELECT * FROM kullanicilar order by adsoy");
        $data['veriler'] = $query ->result();

        $this->load->view('admin/kullanici_listesi',$data);
       
    }   

 public function ekle ()
 {

   
        $this->load->view('admin/kullanici_ekle');
     


 }

 public function kaydet()
 {

    $data=array(
        'adsoy' => $this->input->post('adsoy'),
        'email' => $this->input->post('email'),
        'sifre' => $this->input->post('sifre'),
        'yetki' => $this->input->post('yetki'),
        'durum' => $this->input->post('durum')
        );
        //print_r($data);
        $this->Database_Model->insert_data("kullanicilar",$data);
        $this->session->set_flashdata("mesaj","KULLANICI BASARI ILE EKLENDI");
        redirect(base_url()."admin/kullanicilar");

 }
 public function duzenle($id)

{
        $query = $this -> db -> query ("SELECT * FROM kullanicilar WHERE id=$id");
        $data['veri'] = $query ->result();
        $this->load->view('admin/kullanici_duzenle',$data);


}


public function sil ($id)

{

        $this -> db -> query ("DELETE FROM kullanicilar WHERE id=$id");
        $this->session->set_flashdata("mesaj","SILME BASARILI");
        redirect(base_url()."admin/kullanicilar");
        

}

 public function guncelle($id)
 {

    $data=array(
        'adsoy' => $this->input->post('adsoy'),
        'email' => $this->input->post('email'),
        'sifre' => $this->input->post('sifre'),
        'yetki' => $this->input->post('yetki'),
        'durum' => $this->input->post('durum')
        );
        //print_r($data);
        $this->Database_Model->update_data("kullanicilar",$data,$id);
        $this->session->set_flashdata("mesaj","GUNCELLEME BASARILI");
        redirect(base_url()."admin/kullanicilar");

 }
    
}


    ?>
