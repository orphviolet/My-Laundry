
    <style>
 

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
            font-size: 16px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #ffa500;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #ff8000;
            outline: none;
        }

        input[type="file"] {
            display: block;
            font-size: 16px;
        }

        .small-text {
            font-size: 12px;
            color: #888;
            margin-top: 5px;
        }

        textarea {
            resize: none;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 15px;
        }

        .file-container {
            flex: 1;
        }

        .file-container:first-child {
            text-align: left;
        }

        .file-container img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 2px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .harga-container {
            flex: 1;
        }

        .harga-container input[type="text"] {
            width: 100%;
            padding: 14px;
            border: 2px solid #ffa500;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .harga-container input[type="text"]::placeholder {
            color: #888;
        }

        .button-container {
            text-align: right;
        }

        button {
            background-color: #ffa500;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }

        button:hover {
            background-color: #e69500;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top:1cm;">
        <h1><b>EDIT KATEGORI</b> </h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <!-- Nama -->
            <label for="nama">Nama</label>
            <input type="text" id="nama_jasa" name="nama_jasa" value="<?php echo set_value("nama_jasa", $jasa['nama_jasa'])?>">

            <!-- Image Section -->
            <div class="row">
                <!-- Image Lama -->
                <div class="file-container">
                    <label for="image-lama">Image lama</label>
                    <img src="<?php echo $this->config->item("url_produk").$jasa['foto_jasa'] ?>">
                </div>
                <!-- Image Baru -->
                <div class="file-container">
                    <label for="image">Image baru</label>
                    <input type="file" id="foto_jasa" name="foto_jasa" >
                    <span class="small-text">160px * 160px<br>*tidak wajib diisi</span>
                </div>
            </div>

            <!-- Harga -->
            <label for="harga">Harga</label>
            <input type="text" id="harga_jasa" name="harga_jasa" value="<?php echo set_value("harga_jasa", $jasa['harga_jasa'])?>">

            <!-- Deskripsi -->
            <label for="deskripsi">Deskripsi</label>
            <textarea id="isi_deskripsi" name="isi_deskripsi" rows="5"><?php echo set_value("isi_deskripsi", $jasa['isi_deskripsi'])?></textarea>

            <!-- Submit Button -->
            <div class="button-container">
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>
