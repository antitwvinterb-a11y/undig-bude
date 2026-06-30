<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- CSS UNTUK FOOTER --- */
        .wedding-footer {
            background-color: #838f74; /* Warna background hijau sage */
            color: #ffffff; /* Warna teks putih */
            text-align: center;
            padding: 50px 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .wedding-footer .org-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .wedding-footer .logo-container {
            margin-bottom: 35px;
        }

        .wedding-footer .logo-img {
            max-width: 220px; /* Sesuaikan dengan ukuran logo asli Anda */
            height: auto;
            margin-bottom: 5px;
        }

        .wedding-footer .tagline {
            font-size: 0.65rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .wedding-footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .wedding-footer .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            background-color: #ffffff; /* Lingkaran putih */
            border-radius: 50%;
            text-decoration: none;
            color: #586985; /* Warna ikon biru keabuan */
            font-size: 28px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .wedding-footer .social-icons a:hover {
            transform: translateY(-5px); /* Efek melayang saat di-hover */
        }

        .wedding-footer .credit {
            font-size: 1.4rem;
            font-weight: 400;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<footer class="wedding-footer">
    
    <div class="org-title">Organized by</div>
    
    <div class="logo-container">
        <img src="logo-jurnal.png" alt="jurnal Logo" class="logo-img">
        <div class="tagline">JURNAL UNDIG DEVELOPER</div>
    </div>

    <div class="social-icons">
        <a href="https://instagram.com/username_anda" target="_blank" aria-label="Instagram">
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