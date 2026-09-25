
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .detail-kategori {
            max-width: 800px;
            margin: 20px 0;
            padding: 30px;
            /* border: 3px solid orange;
            border-radius: 10px; */
        }
        .container-fluid {
            display: flex;
            justify-content: flex-start;
        }
        .icon-wrapper {
            width: 150px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 30px;
        }
        .icon-wrapper img {
            width: 150px;
            height: 120px;
            border: 2px solid orange;
            border-radius: 5px;
        }
        .text-wrapper h5 {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        .text-wrapper p {
            margin-bottom: 20px;
            font-size: 20px;
        }
        .text-wrapper p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="detail-kategori">
            <div class="card-header bg-white border-0 mb-5">
                <h1 class="fw-bold" style="margin-top:1cm;">DETAIL KATEGORI</h1>
            </div>
            <div class="card-body d-flex align-items-start">
                <!-- Icon Section -->
                <div class="icon-wrapper">
                    <img src="<?php echo $this->config->item("url_produk").$jasa['foto_jasa'] ?>">
                </div>
                <!-- Text Section -->
                <div class="text-wrapper">
                    <h3>Nama Jasa</h3>
                    <p><?php echo $jasa['nama_jasa']?></p>
                    <h3>Harga</h3>
                    <p><?php echo $jasa['harga_jasa']?></p>
                    <h3>Deskripsi</h3>
                    <p><?php echo $jasa['isi_deskripsi']?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

