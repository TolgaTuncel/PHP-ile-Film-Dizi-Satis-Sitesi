<?php
class Database_Model extends CI_Model {

	function __construct() { 
    parent::__construct(); 
    //$this->load->database(); 
							}

	public function insert_data($tablo,$data)
		{
			if ($this->db->insert($tablo,$data)) // dataları ekler
			{
			return true;
			}
		}

	public function delete_data($tablo,$id)
	{
		$this->db->where('Id',$id);
		if($this->db->delete($tablo)) //dataları siler
		{
			return true;
		}
	}	

	public function update_data($tablo,$data,$id)
		{
			$this->db->where('Id',$id);
			if ($this->db->update($tablo,$data)) // dataları update eder
			{
			return true;
			}
		}	
	
		public function login($tablo,$email,$sifre)
		{
		$this->db->select('*');
		$this->db->from($tablo);
        $this->db->where('email',$email);
        $this->db->where('sifre',$sifre);
        $this->db->where('durum',"aktif");
        $this->db->limit(1);
         
        
        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            return $query->result(); 
        } 

        else
         {
            return false; 
         }

		}

		public function urunler_get() // urunleri kategori ile çekmek için kullanıldı
		{
			$query = $this -> db -> query('SELECT urunler.*, kategoriler.adi as katadi
			FROM urunler 
			INNER JOIN kategoriler 
			ON urunler.kategori_id=kategoriler.Id 
			order by urunler.adi ');

			return $query->result();

		}

			public function urun_get($id) //TEK bir urunu kategori ismi çekmek için kullanıldı.
		{
			$query = $this -> db -> query('SELECT urunler.*, kategoriler.adi as katadi
			FROM urunler 
			INNER JOIN kategoriler 
			ON urunler.kategori_id=kategoriler.Id 
			WHERE urunler.Id='.$id
			 );

			return $query->result();

		}
	}
	?>