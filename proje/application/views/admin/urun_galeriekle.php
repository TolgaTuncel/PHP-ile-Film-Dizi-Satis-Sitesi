  <?php
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
?>
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">

                <h3>Resim Ekleme Formu</h3>
            <?php

            if($this->session->flashdata("mesaj"))
            {

            ?>
             <div class="alert alert-success">
             <?=$this->session->flashdata("mesaj")?>
             <?php
            }
            ?>
             </div>
                <form action="<?=base_url()?>admin/urunler/galeri_upload/<?=$id?>" method="post" enctype="multipart/form-data">

                <input type="file" name="userfile" size="20" onChange="this.form.submit()" />

                </form>

                <?php 

                  foreach ($veriler as $rs)

                   {
                   ?>
                   
                                    <a href="../../images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                        <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" width="200" height="200">
                                    </a>
                                     <td><a href="<?=base_url()?>admin/urunler/resimsil/<?=$rs->Id?>/<?=$rs->urun_id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a>

                                
                  <?php } ?>

               
            </div>
        </div>
    </section>
    <?php
    $this->load->view('admin/footer');
    
?>