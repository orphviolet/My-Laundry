<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Antrian Tambah</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container" >
        <h2 style="margin-top: 1cm; margin-bottom: 1cm;"><b>TAMBAH ANTRIAN</b></h2>

        <form method="post" enctype="multipart/form-data" >

        <div class="container clearfix">

        <a href="<?php echo base_url("pelanggan/tambah")?>" class="btn" style="margin-top: 20px; background-color: #fe9e0b; color: white; font-weight:500; padding:20px;"><h4>TAMBAH PELANGGAN +</h4> </a>

        <div class="col-md-7 float-md-end mb-3 ms-md-3">
            <label>Pelanggan</label>
            <select class="form-control form-select" name="id_pelanggan">
            <option value="" >Pilih Pelanggan</option>
                <?php foreach ($pelanggan as $key => $value):?>
                <option value="<?php echo $value["id_pelanggan"]?>"
                <?php echo $value["id_pelanggan"]==set_value("id_pelanggan") ? "selected" : ""?>>
                    <?php echo $value["nama_pelanggan"]?>
                </option>
                <?php endforeach?>
                
                </select>
                <span  class="text-muted">
                <?php echo form_error("id_pelanggan")?>
                </span>
        </div>
        
        </div>
           
            <br>
            
            <label for="" style="margin: 5px; color: #fe9e0b; font-weight:500;">PESANAN</label>
            <br>
            <?php foreach ($jasa as $key => $value): ?>
            <input type="checkbox" id="id_jasa" name="id_jasa" value="<?php echo $value['id_jasa']?>">
            <label class="btn" for="btn-check" style="background-color: #fe9e0b; color: white; width: 3cm;">
                <img src="<?php echo $this->config->item("url_produk").$value["foto_jasa"] ?>" alt="" class="rounded" style="width: 2.2cm; height: 2cm; margin-bottom: 5px;">
                <h6 name="nama_jasa"><b><?php echo $value['nama_jasa']?></b></h6>
            </label>
            
            <?php endforeach?>
            <span  class="text-muted">
                <?php echo form_error("id_jasa")?>
            </span>
            <br>
            <button type="submit" class="btn rounded float-end" style="margin-top: 15px; color: white; font-weight:500; background-color: #fe9e0b; padding: 2px 1cm 2px 1cm; border-color: #fe9e0b;">SUBMIT</button>
        </form>
    </div>