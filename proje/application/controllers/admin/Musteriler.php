<?php
class musteriler extends CI_Controller {

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
        $data["title"]="Musteri Listeleme Sayfası";
        $query = $this -> db -> query ("SELECT * FROM musteriler order by adsoy");
        $data['veriler'] = $query ->result();

        $this->load->view('admin/musteri_listesi',$data);
       
    }   

 public function ekle ()
 {

   
        $this->load->view('admin/musteri_ekle');
     


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
        $this->Database_Model->insert_data("musteriler",$data);
        $this->session->set_flashdata("mesaj","MUSTERI BASARI ILE EKLENDI");
        redirect(base_url()."admin/musteriler");

 }
 public function duzenle($id)

{
        $query = $this -> db -> query ("SELECT * FROM musteriler WHERE Id=$id");
        $data['veri'] = $query ->result();
        $this->load->view('admin/musteri_duzenle',$data);


}


public function sil ($id)

{

        $this -> db -> query ("DELETE FROM musteriler WHERE Id=$id");
        $this->session->set_flashdata("mesaj","SILME BASARILI");
        redirect(base_url()."admin/musteriler");
        

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
        $this->Database_Model->update_data("musteriler",$data,$id);
        $this->session->set_flashdata("mesaj","GUNCELLEME BASARILI");
        redirect(base_url()."admin/musteriler");

 }
    
}


    ?>
