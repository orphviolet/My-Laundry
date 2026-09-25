  <body>
    <div class="container" style="margin-top:1cm;">
      <h1><b>INFORMASI EDIT</b></h1>

      <form action="" method="post">
      <div class="form-floating">
      <textarea class="form-control"  style="border-color:#fe9e0b; height: 100px"name="isi_informasi" ><?php echo set_value("isi_informasi", $informasi['isi_informasi'])?></textarea>
      </div>
      <div class="container float-md-end" style="width: auto">
      <button type="submit" class="btn" style=" margin-top: 10px; background-color: #fe9e0b; color: white; font-weight:500; width: 3cm ;">SUBMIT</button>
      </div>
      </form>
      
    </div>

    <br>
  </body>
</html>
