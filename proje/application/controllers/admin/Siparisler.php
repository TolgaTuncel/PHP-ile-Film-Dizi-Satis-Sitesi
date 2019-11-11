<?php
class siparisler extends CI_Controller {

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
        $data["title"]="Sipariş Listeleme Sayfası";
        $query = $this -> db -> query ("SELECT * FROM siparisler order by Id");
        $data['veriler'] = $query ->result();

        $this->load->view('admin/siparis_listesi',$data);
    }
    
    public function duzenle($id)
    {
        $query = $this -> db -> query ("SELECT * FROM siparisler WHERE Id=$id");
        $data['veri'] = $query ->result();
        $this->load->view('admin/siparis_duzenle',$data);
    }


    public function sil($id)
    {
        $this->Database_Model->delete_data("siparisler",$id);
        $this->session->set_flashdata("mesaj","SİLME BAŞARILI.");       
        redirect(base_url()."admin/siparisler");
    }
    public function guncelle($id)
    {
        $data=array(
            'kargofirma' => $this->input->post('kargofirma'),
            'kargono' => $this->input->post('kargono'),
            'admin_aciklama' => $this->input->post('admin_aciklama'),                       
            'durum' => $this->input->post('durum')  
        );
        //print_r($data);
        $this->Database_Model->update_data("siparisler",$data,$id);
        $this->session->set_flashdata("mesaj","SİPARİŞ GÜNCELLENDİ.");
        redirect(base_url()."admin/siparisler");
    }

    
}


    ?>
