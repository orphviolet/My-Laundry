

<div class="container">

<h2 style="margin-top: 1cm; margin-bottom: 1cm;"><b>TAMBAH PELANGGAN</b></h2>
    <form action="<?php echo base_url("pelanggan/tambah")?>" method="post">
            <label for="" style="margin: 5px; color: #fe9e0b; font-weight:500;" >NAMA PELANGGAN</label> <br>
            <input type="text" class="form-control rounded" name="nama_pelanggan" id="nama_pelanggan" style="width: 100%; border-color: #fe9e0b; padding: 10px;" placeholder="Masukan nama pelanggan..">
            <div class="text-danger small">
            <?php echo form_error("nama_pelanggan")?>
            </div>

            <label for="" style="margin: 5px; color: #fe9e0b; font-weight:500;">NOMOR HP</label> <br>
            <input type="text" class="rounded form-control" name="nomor_hp" id="nomor_hp" style="width: 100%; border-color: #fe9e0b; padding: 10px;" placeholder="Masukan nomor hp pelanggan..">
            <div class="text-danger small">
            <?php echo form_error("nomor_hp")?>
            </div>
        
            <button type="submit" class="btn rounded float-end" style="margin-top: 15px; color: white; font-weight:500; background-color: #fe9e0b; padding: 2px 1cm 2px 1cm; border-color: #fe9e0b;">SUBMIT</button>
    </form>
</div>

