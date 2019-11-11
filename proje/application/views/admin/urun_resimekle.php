  <?php
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
?>
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">

                <h3>Resim Ekleme Formu</h3>
                <form action="<?=base_url()?>admin/urunler/resim_upload/<?=$id?>" method="post" enctype="multipart/form-data">

                <input type="file" name="userfile" size="20" onChange="this.form.submit()" />

                </form>
            </div>
        </div>
    </section>
    <?php
    $this->load->view('admin/footer');
    
?>