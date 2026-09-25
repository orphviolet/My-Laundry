
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-header {
            background-color: #ffc107;
            color: white;
            padding: 10px;
            text-align: left;
        }
        .logout-btn {
            float: right;
        }
        .dashboard-card {
            background-color: #fe9e0b;
            color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .dashboard-card > h3{
            text-align: center;
        }
        .dashboard-card:hover {
            transform: scale(1.05);
        }
        .dashboard-card i {
            font-size: 30px;
            margin-bottom: 10px;
        }
        a{
            color: white;
            text-decoration:none;
        }
    </style>
</head>
<body>
  <div class="container-fluid">
    
    <!-- Dashboard Content -->
    <div class="container mt-4">
        <div class="row g-3">
            <div class="col-md-4">
            <a href="<?php echo base_url("antrian")?>">
                <div class="dashboard-card">
                    <h3>ANTRIAN</h3>
                </div>
            </a>
            </div>
            <div class="col-md-4">
            <a href="<?php echo base_url("jasa")?>">
                <div class="dashboard-card">
                    <h3>KATEGORI JASA</h3>
                </div>
            </a>
            </div>
            <div class="col-md-4">
            <a href="<?php echo base_url("informasi")?>">
                <div class="dashboard-card">
                    <h3>INFORMASI</h3>
                </div>
                </a>
            </div>
            <div class="col-md-4">
            <a href="<?php echo base_url("pemasukan")?>">
                <div class="dashboard-card">
                    <h3>PEMASUKAN</h3>
                </div>
                </a>
            </div>
            <div class="col-md-4">
            <a href="<?php echo base_url("pelanggan")?>">
                <div class="dashboard-card">
                    <h3>PELANGGAN</h3>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
