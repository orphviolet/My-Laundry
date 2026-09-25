
  <style>
    
    .table-header {
      background-color: #FE9E0B ;
      color: white ;
      font-weight: bold;
      text-align: center;
    }
    .btn-detail {
      background-color: blue;
      color: white;
      font-weight: lato;
    }
    .table td{
      vertical-align: middle;
      text-align: center;
      border: 2px solid orange; /* Garis oranye */
      padding: 10px; /* Spasi dalam sel */
    }.table th {
      background-color: #FE9E0B ;
      color: white;
      font-weight: lato;
      border: 2px solid orange; /* Garis oranye */
      padding: 10px; /* Spasi dalam sel */
      text-align: center;
    }
    .orange-table th {
      background-color: orange; /* Latar belakang header tabel */
      color: white; /* Teks putih */
      font-weight: lato;
    }
  </style>
</head>
<body>
  <!-- Konten -->
  <div class="container mt-5">
    <h1 class="text-align fw-lato"><b>HALAMAN PEMASUKAN</b></h1>
    <table class="table table-bordered table-responsive-lg" id="tabelku">
      <thead>
        <tr class="table-header " >
          <th>NO</th>
          <th>PELANGGAN</th>
          <th>PESANAN</th>
          <th>PEMASUKAN</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($pemasukan as $k => $v):?>
                <tr>
                    <td style="text-align: center;"><?php echo $k+1; ?></td>
                    <td style="text-align: center;"><?php echo $v['nama_pelanggan']; ?></td>
                    <td style="text-align: center;"><?php echo $v['nama_jasa_beli']; ?></td>
                    <td style="text-align: center;"><?php echo $v['total_beli']; ?></td>
                    <td style="text-align: center;">
                    <a href="<?php echo base_url("pemasukan\online")?>" class="btn" type="submit" style="margin: 5px; background-color: blue; color: white; font-weight:500;">DETAIL</a>
                    </td>
                    
    
                </tr>
                <?php endforeach ?>
        
      </tbody>
    </table>
  </div>

  <!-- Link Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
