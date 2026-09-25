
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #FFA500;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
        }
        .price {
            font-size: 24px;
            color: #FFA500;
            margin: 0;
        }
        .duration {
            font-size: 18px;
            color: #FFA500;
            margin: 0;
        }
        .description {
            font-size: 16px;
            color: black;
            margin: 20px 0;
        }
        .button {
            background-color: #FFA500;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #ff7f00;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="price">Rp. 35.000</p>
        <p class="duration">1 Bulan</p>
        <p class="description">Mendapatkan semua akses fitur selama sebulan</p>
        <a href="<?php echo base_url("kasir")?>">
        <button class="button"  onclick="alert('Berhasil membeli langganan!')">BELI SEKARANG</button>
        </a>
    </div>
</body>
</html>
