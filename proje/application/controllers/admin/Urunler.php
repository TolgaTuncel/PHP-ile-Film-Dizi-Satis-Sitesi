<?php
class urunler extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->database(); //Sayfada veritabanına erişmemize sağlar
                 $this->load->helper(array('form', 'url'));           
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
       // $data["title"]="Urun Listeleme Sayfası";

      
        $data['veriler'] = $this->Database_Model->urunler_get();


        $this->load->view('admin/urun_listesi',$data);
       
    }   

 public function ekle ()
 {

        $query = $this -> db -> query ("SELECT * FROM kategoriler order by adi");
        $data['kategoriler'] = $query ->result();

        $this->load->view('admin/urun_ekle',$data);
     


 }

 public function kaydet()
 {

    $data=array(
        'kodu' => $this->input->post('kodu'),
        'adi' => $this->input->post('adi'),
        'kategori_id' => $this->input->post('kategori_id'),
        'afiyat' => $this->input->post('afiyat'),
        'sfiyat' => $this->input->post('sfiyat'),
        //'resim' => $file_name,
        'miktar' => $this->input->post('miktar'),
        'birimi' => $this->input->post('birimi'),
        'durum' => $this->input->post('durum'),
        'aciklama' => $this->input->post('aciklama'),
        'keywords' => $this->input->post('keywords'),
        'detay' => $this->input->post('detay')
        );
        //print_r($data);
        $this->Database_Model->insert_data("urunler",$data);//ekleme fonksiyonu
        $this->session->set_flashdata("mesaj","URUN BASARI ILE EKLENDI");
        redirect(base_url()."admin/urunler");

 }
 public function duzenle($id)

{
        $query = $this -> db -> query ("SELECT * FROM urunler WHERE id=$id");
        $data['veri'] = $query ->result();
        $this->load->view('admin/urun_duzenle',$data);


}


public function sil ($id)

{

        $this -> db -> query ("DELETE FROM urunler WHERE id=$id");
        $this->session->set_flashdata("mesaj","SILME BASARILI");
        redirect(base_url()."admin/urunler");
        

}

 public function guncelle($id)
 {

    $data=array(
        'kodu' => $this->input->post('kodu'),
        'adi' => $this->input->post('adi'),
       // 'kategori_id' => $this->input->post('kategori_id'),
        'afiyat' => $this->input->post('afiyat'),
        'sfiyat' => $this->input->post('sfiyat'),
        //'resim' => $file_name,
        'miktar' => $this->input->post('miktar'),
        'birimi' => $this->input->post('birimi'),
        'durum' => $this->input->post('durum'),
        'aciklama' => $this->input->post('aciklama'),
        'keywords' => $this->input->post('keywords'),
        'detay' => $this->input->post('detay')
        );
        //print_r($data);
        $this->Database_Model->update_data("urunler",$data,$id);
        $this->session->set_flashdata("mesaj","GUNCELLEME BASARILI");
        redirect(base_url()."admin/urunler");

 }

 public function resimekle($id)
 {
    $data["id"]=$id;
    $this->load->view('admin/urun_resimekle',$data);



 }
    public function resim_upload($id)
    {
        $data["id"]=$id;
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('admin/urun_resimekle', $error);
                }
                else
                {
                        $data = $this->upload->data();
                        $dosyaadi=$data["file_name"];
                        //$this->load->view('upload_success', $data);
                
                $data=array(
                'resim' => $dosyaadi
                    
                    
        );
        //print_r($data);
        $this->Database_Model->update_data("urunler",$data,$id);
        $this->session->set_flashdata("mesaj","ÜRÜN RESMİ EKLENDİ.");
        redirect(base_url()."admin/urunler");
                }
    }   


    public function galeriekle($id)
 {
    $query = $this -> db -> query ("SELECT * FROM urun_resimler WHERE urun_id=$id");
    $data['veriler'] = $query ->result();
    $data["id"]=$id;
    $this->load->view('admin/urun_galeriekle',$data);



 }
    public function galeri_upload($id)
    {
        $data["id"]=$id;
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
                {
                         $this->session->set_flashdata("mesaj","Hata Oluştu..");

                        redirect(base_url()."admin/urunler/galeriekle/$id");
                }
                else
                {
                        $data = $this->upload->data();
                        $dosyaadi=$data["file_name"];
                        //$this->load->view('upload_success', $data);
                
                $data=array(

                'urun_id' => $id,   
                'resim' => $dosyaadi
                    
                    
        );
        //print_r($data);
        $this->Database_Model->insert_data("urun_resimler",$data);
        $this->session->set_flashdata("mesaj","ÜRÜN RESMİ EKLENDİ.");
        redirect(base_url()."admin/urunler/galeriekle/$id");
                }
    }

    public function resimsil($id,$urunid)

    {
        $this->Database_Model->delete_data("urun_resimler",$id);
        $this->session->set_flashdata("mesaj","Urun Resmi Silindi.");       
        redirect(base_url()."admin/urunler/galeriekle/$urunid");
    }  
    
}


    ?>
