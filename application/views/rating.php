<!DOCTYPE html>
<html>
<head>
    <title>Rating dan Lanjut Langganan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffa500;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .rating-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .rating-box h1 {
            color: #ffa500;
            font-size: 48px;
            margin: 0;
        }
        .rating-box p {
            color: black;
            font-size: 18px;
            margin: 10px 0;
        }
        .stars {
            margin: 20px 0;
        }
        .stars i {
            color: #ddd;
            font-size: 48px;
            margin: 0 10px;
            cursor: pointer;
        }
        .stars i.active {
            color: #ffd700;
        }
        .submit-button {
            background-color: #ffa500;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="rating-box">
            <h1>RATING</h1>
            <p>Terimakasih sudah menggunakan kasir online kami!<br>Tolong berikan rating pada aplikasi kasir online ini</p>
            <div class="stars">
                <i class="fas fa-star" data-rating="1"></i>
                <i class="fas fa-star" data-rating="2"></i>
                <i class="fas fa-star" data-rating="3"></i>
                <i class="fas fa-star" data-rating="4"></i>
                <i class="fas fa-star" data-rating="5"></i>
            </div>
            <a href="<?php echo base_url("rating")?>">
            <button class="submit-button" disabled>SUBMIT</button>
            </a>
        </div>
    </div>

    <script>
        const stars = document.querySelectorAll('.stars i');
        const submitButton = document.querySelector('.submit-button');
        let selectedRating = 0;

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                selectedRating = index + 1;
                updateStars();
                submitButton.disabled = false;
            });
        });

        function updateStars() {
            stars.forEach((star, index) => {
                if (index < selectedRating) {
                    star.classList.add('active');
                } else {
                    star.classList.remove('active');
                }
            });
        }

        submitButton.addEventListener('click', () => {
            alert(`Terimakasih atas rating Anda: ${selectedRating} bintang!`);
        });
    </script>
</body>
</html>
