<body>
    <div class="container" style="margin-top:1cm;">
      <h1><b>INFORMASI TAMBAH</b></h1>
      
      <form  method="post">
      <div class="form-floating">
      <textarea class="form-control" name="isi_informasi"  style="border-color:#fe9e0b; height: 100px"placeholder="Leave a information"></textarea>
      <span  class="text-danger small">
                <?php echo form_error("isi_informasi")?>
            </span>
      </div>
      <div class="container float-md-end" style="width: auto">
      <button type="submit" class="btn" style=" margin-top: 10px; background-color: #fe9e0b; color: white; font-weight:500; width: 3cm ;">SUBMIT</button>
      </div>
      </form>
      
    </div>

    <br>
  </body>
</html>