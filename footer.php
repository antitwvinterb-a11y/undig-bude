<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- CSS UNTUK FOOTER --- */
        .wedding-footer {
            background-color: black; /* Warna background hijau sage */
            color: #ecd089; /* Warna teks putih */
            text-align: center;
            padding: 10px 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .wedding-footer .org-title {
            font-size: 0 rem;
            margin-bottom: 10px;
            font-weight: 100;
            letter-spacing: 0;
        }

        .wedding-footer .logo-container {
            margin-bottom: 20px;
        }

        .wedding-footer .logo-img {
            max-width: 160px; /* Sesuaikan dengan ukuran logo asli Anda */
            height: auto;
            margin-bottom: 0;
        }

        .wedding-footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 0;
            margin-bottom: 20px;
        }

        .wedding-footer .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 20px;
            background-color: black; /* Lingkaran putih */
            border-radius: 50%;
            text-decoration: none;
            color: #ecd089; /* Warna ikon biru keabuan */
            font-size: 28px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .wedding-footer .social-icons a:hover {
            transform: translateY(-5px); /* Efek melayang saat di-hover */
        }

        .wedding-footer .credit {
            font-size: 1 rem;
            font-weight: 300;
            letter-spacing: 0,5px;
        }
    </style>
</head>
<body>

<footer class="wedding-footer">
    
    <div class="org-title">Organized by</div>
    
    <div class="logo-container">
        <img src="assets/image/logo-jurnal.png" alt="jurnal Logo" class="logo-img">
    </div>

    <div class="social-icons">
        <a href="https://instagram.com/jurnal.inv" target="_blank" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://wa.me/6283199454804" target="_blank" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <div class="credit">
        Undangan Web by JURNAL
    </div>

</footer>
</body>
</html>