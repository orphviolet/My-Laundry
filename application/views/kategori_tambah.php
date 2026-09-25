
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
            margin-bottom: 20px;
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

        .file-container label,
        .file-container input[type="file"],
        .file-container .small-text {
            margin-bottom: 5px;
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
        <h1><b>TAMBAH KATEGORI</b></h1>
        <form method="post" enctype="multipart/form-data">

            <label for="nama">Nama</label>
            <input type="text" id="nama_jasa" name="nama_jasa" placeholder="Masukkan nama kategori...">
            <span  class="text-danger small">
                <?php echo form_error("nama_jasa")?>
            </span>

            <div class="row">
                <!-- Image Section -->
                <div class="file-container">
                    <label for="image">Gambar Jasa</label>
                    <input type="file" id="foto_jasa" name="foto_jasa">
                    <span class="small-text">160px * 160px</span>
                </div>
                <!-- Harga Section -->
                <div class="harga-container">
                    <label for="harga">Harga</label>
                    <input type="text" id="harga_jasa" name="harga_jasa" placeholder="Rp 0" >
                    <span  class="text-danger small">
                        <?php echo form_error("harga_jasa")?>
                    </span>
                </div>
            </div>

            <!-- Deskripsi Section -->
            <label for="deskripsi">Deskripsi</label>
            <textarea id="isi_deskripsi" name="isi_deskripsi" rows="5" placeholder="Masukkan deskripsi kategori..." ></textarea>
            <span  class="text-danger small">
                <?php echo form_error("isi_deskripsi")?>
            </span>

            <!-- Submit Button -->
            <div class="button-container">
                <button type="submit">SUBMIT</button>
            </div>
        </form>
        <br>
    </div>
</body>
</html>
