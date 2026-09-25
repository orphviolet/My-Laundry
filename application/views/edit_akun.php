<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            border: 45px solid #FE9E0B ;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
        }
        .form-container h3 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }
        .form-container .btn-submit {
            background-color: #FE9E0B ;
            color: white;
            border: none;
        }
        .form-container .btn-submit:hover {
            background-color: #FE9E0B ;
            position:center;
        }
        body{
            background-color: #FE9E0B ;
        }
    </style>
</head>
<body>

<div class="container rouded">
    <div class="form-container rounded">
        <h3>Edit Akun</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value("email",$this->session->userdata("email"))?>">
                <span  class="text-danger small">
                    <?php echo form_error("email")?>
                </span>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password anda...">
                <p class="text-muted">Kosongkan jika password tidak diubah</p>
            </div>

            <div class="mb-3" >
                <label for="namaUsaha" class="form-label">Nama Usaha</label>
                <input type="text" class="form-control" id="nama_usaha" value="<?php echo set_value("nama_usaha",$this->session->userdata("nama_usaha"))?>" name="nama_usaha">
            </div>


            <div class="mb-3">
                <label for="logo_usaha" class="form-label">Logo Lama</label>
                <div>
                    <img src="<?php echo $this->config->item("url_logo").$user1["logo_usaha"] ?>" class="img-thumbnail" style="width: 80px; height: 80px;">
                </div>
            </div>

            <div class="mb-3">
                <label for="logo_usaha" class="form-label">Logo Usaha</label>
                <input type="file" class="form-control" id="logo_usaha" name="logo_usaha" >
                <div class="text-danger small">
                 <?php echo form_error("logo_usaha")?>
                </div>
            </div>

            <div class="mb-3">
                <label for="wa_user" class="form-label">Nomor Hp</label>
                <input type="text" class="form-control" id="wa_user" value="<?php echo set_value("wa_user",$this->session->userdata("wa_user"))?>" name="wa_user" >
                <div class="text-danger small">
                    <?php echo form_error("wa_user")?>
                </div>
            </div>

            

           <div class="text-end">
            <button type="submit" class="btn btn-warning text-white">SUBMIT</button>
        </div>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src=" https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
<script>new DataTable("#tabelku")</script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<?php if($this->session->flashdata('pesan_sukses')): ?>
	<script>swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");</script>
	<?php endif ?>

	<?php if($this->session->flashdata('pesan_gagal')): ?>
	<script>swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");</script>
	<?php endif ?>
</html>