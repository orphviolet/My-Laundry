
    <style>

      th,
      td {
        border: 1px solid #ffa500;
        padding: 10px;
        text-align: left;
        vertical-align: top;
      }

      th {
        background-color: #ffa500;
        color: white;
        text-transform: uppercase;
        font-size: 0.9rem;
      }

      td {
        font-size: 0.9rem;
      }

      .action-btn {
        display: block;
        width: 100px;
        height: 40px;
        font-size: 0.8rem;
        line-height: 1.2;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 10px;
        text-align: center;
      }

      .btn-detail {
        background-color: blue;
      }

      .btn-edit {
        background-color: rgb(8, 120, 8);
      }

      .btn-hapus {
        background-color: rgb(247, 8, 8);
      }

      .btn-detail:hover {
        background-color: #0056b3;
      }

      .btn-edit:hover {
        background-color: #218838;
      }

      .btn-hapus:hover {
        background-color: #c82333;
      }

      th{
        color: white; 
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top:1cm;">
      <h1><b>HALAMAN KATEGORI</b></h1>
      <div style="margin-bottom: 1.5cm;">
          <a href="<?php echo base_url("jasa/tambah")?>" class="btn float-end" style="background-color: #fe9e0b; margin-left: 10px; padding: 5px 20px 5px 20px; color: white; font-weight: 500;">TAMBAH +</a>  
        </div>
        <table class="table table-bordered table-responsive-lg" id="tabelku" style="border:#fe9e0b;">
        <thead>
          <tr>
            <th style="background-color: #fe9e0b; color: white; ">NO</th>
            <th style="background-color: #fe9e0b; color: white; " >NAMA</th>
            <th style="background-color: #fe9e0b; color: white; ">IMAGE</th>
            <th style="background-color: #fe9e0b; color: white; ">HARGA</th>
            <th style="background-color: #fe9e0b; color: white; ">AKSI</th>
          </tr>
        </thead>
        <tbody>

            <?php foreach ($jasa as $k => $v):?>
          <tr>
            <td style="text-align: center;"><?php echo $k+1; ?></td>
            <td><?php echo $v['nama_jasa']; ?></td>
            <td><img src="<?php echo $this->config->item("url_produk").$v['foto_jasa'] ?>" width="200"></td>
            <td><?php echo $v['harga_jasa']; ?></td>
            <td>
            <a href="<?php echo base_url("jasa/detail/".$v["id_jasa"]) ?>" class="btn" style="background-color: blue; margin-left: 10px; padding: 5px 20px 5px 20px; color: white; font-weight: 500;">DETAIL</a>
            <a href="<?php echo base_url("jasa/edit/".$v["id_jasa"]) ?>" class="btn" style="background-color: rgb(8, 120, 8); margin-left: 10px; padding: 5px 20px 5px 20px; color: white; font-weight: 500;" >EDIT</a>
            <a href="<?php echo base_url("jasa/hapus/".$v["id_jasa"]) ?>" class="btn" style="background-color: rgb(247, 8, 8); margin-left: 10px; padding: 5px 20px 5px 20px; color: white; font-weight: 500;" >HAPUS</a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
