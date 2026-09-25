<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/registrasi/registrasi.css'); ?>">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Sign Up</h3>
                        <form method="post" enctype="multipart/form-data" >
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" >
                                <div class="text-danger small">
                                <?php echo form_error("email")?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                                <div class="text-danger small">
                                <?php echo form_error("password")?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_usaha" class="form-label">Nama Usaha</label>
                                <input type="text" class="form-control" id="nama_usaha" placeholder="Masukkan nama usaha" name="nama_usaha" >
                                <div class="text-danger small">
                                <?php echo form_error("nama_usaha")?>
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
                                <input type="text" class="form-control" id="wa_user" placeholder="Masukkan nomor hp" name="wa_user" >
                                <div class="text-danger small">
                                <?php echo form_error("wa_user")?>
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-custom">Daftar</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="<?php echo base_url("login")?>">Sudah punya akun? Masuk di sini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
