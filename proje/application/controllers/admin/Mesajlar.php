<?php
class mesajlar extends CI_Controller {

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
        $data["title"]="Mesaj Listeleme Sayfası";      
        $query = $this -> db -> query ("SELECT * FROM mesajlar order by adsoy");
        $data['veriler'] = $query ->result();

        $this->load->view('admin/mesaj_listesi',$data);
       
    }   

 public function ekle ()
 {

   
        $this->load->view('admin/mesaj_ekle');
     


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
        $this->Database_Model->insert_data("mesajlar",$data);
        $this->session->set_flashdata("mesaj","KULLANICI BASARI ILE EKLENDI");
        redirect(base_url()."admin/mesajlar");

 }
 public function detay($id)

{       $this -> db -> query ("UPDATE mesajlar SET durum='Okundu' WHERE id=$id");
        $query = $this -> db -> query ("SELECT * FROM mesajlar WHERE id=$id");
        $data['veri'] = $query ->result();
        $this->load->view('admin/mesaj_detay',$data);


}


public function sil ($id)

{

        $this -> db -> query ("DELETE FROM mesajlar WHERE id=$id");
        $this->session->set_flashdata("mesaj","SILME BASARILI");
        redirect(base_url()."admin/mesajlar");
        

}

 public function guncelle($id)
 {

    $data=array(
        'adminnotu' => $this->input->post('adminnotu'),
      
        );
        //print_r($data);
        $this->Database_Model->update_data("mesajlar",$data,$id);
        $this->session->set_flashdata("mesaj","GUNCELLEME BASARILI");
        redirect(base_url()."admin/mesajlar/detay/$id"); //tekrar geleceği yer

 }
    
}


    ?>
