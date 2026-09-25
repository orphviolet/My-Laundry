
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container" style="margin-top:1cm;">
        <h1><b>PELANGGAN</b></h1>
        
        <table class="table table-bordered table-responsive-lg" id="tabelku" style="border:#fe9e0b; ">
            <thead>
                <tr>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">No</th>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">PELANGGAN</th>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">NOMOR HP</th>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">AKSI</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($pelanggan as $k => $v):?>
                <tr>
                    <td style="text-align: center;"><?php echo $k+1; ?></td>
                    <td style="text-align: center;"><?php echo $v['nama_pelanggan']; ?></td>
                    <td style="text-align: center;">
                    <?php echo $v['nomor_hp']; ?>
                    </td>
                    <td style="text-align: center;">
                        <a href="<?php echo base_url("pelanggan/hapus/".$v["id_pelanggan"]) ?>" class="btn" style="margin: 5px; background-color: rgb(247, 8, 8); color: white; font-weight:500;">HAPUS</a>
                    </td>
                    
    
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
    </div>
    