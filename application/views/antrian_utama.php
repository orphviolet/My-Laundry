<body>
    <div class="container" style="margin-top:1cm;">
        <h1><b>HALAMAN ANTRIAN</b></h1>
        <div style="margin-bottom: 1.5cm;">
          <a href="<?php echo base_url("antrian/tambah_antrian")?>" class="btn float-end" style="background-color: #fe9e0b; margin-left: 10px; padding: 5px 20px 5px 20px; color: white; font-weight: 500;">TAMBAH +</a>  
        </div>
        
        <table class="table table-bordered table-responsive-lg" id="tabelku" style="border:#fe9e0b;">
            <thead>
                <tr>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">No</th>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">PELANGGAN</th>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">PESANAN</th>
                    <th style="background-color: #fe9e0b; color: white; text-align: center;">AKSI</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($antrian as $k => $v):?>
                <tr>
                    <td style="text-align: center;"><?php echo $k+1; ?></td>
                    
                    <td style="text-align: center;">
                    <?php foreach ($pelanggan as $p => $o):?>
                    <?php echo $o['nama_pelanggan']; ?>
                    <?php endforeach ?>
                  </td>
                    
                    <td style="text-align: center;">
                    <?php foreach ($jasa as $j => $l):?>
                      <P class="rounded" style="background-color: #fe9e0b; padding: 10px; width: fit-content; color: white;"><?php echo $l['nama_jasa']; ?></P>
                      <form method="post">
                        <input class="rounded form-control" style="border-color: #fe9e0b; padding: 10px; width: 2cm;" type="number" name="jumlah" id="">
                      </form>
                    <?php endforeach ?>
                    </td>
                    <td style="text-align: center;">
                    <a href="<?php echo base_url("antrian/online")?>" class="btn" type="submit" style="margin: 5px; background-color: rgb(7, 7, 248); color: white; font-weight:500;">KASIR ONLINE</a>
                        <a href="#" class="btn" type="submit" style="margin: 5px; background-color: rgb(8, 120, 8); color: white; font-weight:500;" data-bs-toggle="modal"data-bs-target="#tunai">KASIR TUNAI</a>
                     
                        <a href="<?php echo base_url("antrian/hapus/".$v["id_antrian"]) ?>" class="btn" style="margin: 5px; background-color: rgb(247, 8, 8); color: white; font-weight:500;">HAPUS</a>
                    </td>
                    
    
                </tr>
            <?php endforeach ?>

    
            </tbody>
        </table>
  
    </div>
    
    <!-- The Modal -->
      <div class="modal" id="tunai" >
        <div class="modal-dialog" >
          <div class="modal-content" style="background-color: #fe9e0b; border-color: #fe9e0b;">
      
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #fe9e0b; border-color: #fe9e0b;" >
              <h2 class="modal-title" style="font-weight: bolder; color: white;">Kasir Tunai</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body" style="font-weight: bolder; color: black;" >
              <h5>
                Total: 
              </h5>
              <h5>Uang Pelanggan</h5>
              <form action="" method="post">
                <input type="number"  class="form-control rounded" name="uang_pelanggan" id="" style="width: 100%; border-color: #fe9e0b; padding: 10px;" placeholder="Masukan uang pelanggan..">
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer" style="background-color: #fe9e0b; border-color: #fe9e0b;">
            
              <button type="submit" class="btn"  style="background-color: white; color: #fe9e0b; font-weight:500" data-bs-dismiss="modal">Submit</button>
            
            
            </form>
            <a href="<?php echo base_url("antrian/offline")?>">detail offline</a>   

            </div>
      
          </div>
        </div>
      </div>
    
    