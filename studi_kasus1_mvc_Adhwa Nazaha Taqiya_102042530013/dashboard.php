<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #183c25;
        }

        .dashboard-card {
            width: 100%;
            max-width: 440px;
            background: #185c2e;
            color: #ffffff;
            padding: 42px 35px;
            border-radius: 22px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(24, 92, 46, 0.18);
        }

        .icon-circle {
            width: 75px;
            height: 75px;
            background: #e7f4e9;
            color: #185c2e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
            margin: 0 auto 22px;
        }

        h1 {
            font-size: 29px;
            margin-bottom: 12px;
        }

        .subtitle {
            color: #d3ead8;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 28px;
        }

        .welcome-box {
            background: #287642;
            padding: 20px;
            border-radius: 14px;
            margin-bottom: 25px;
        }

        .welcome-box p {
            font-size: 14px;
            line-height: 1.7;
        }

        .welcome-box .welcome-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .back-button {
            display: block;
            background: #ffffff;
            color: #185c2e;
            text-decoration: none;
            padding: 14px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 14px;
            transition: 0.2s;
        }

        .back-button:hover {
            background: #e7f4e9;
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #d3ead8;
        }

        @media (max-width: 480px) {
            .dashboard-card {
                padding: 35px 25px;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard-card">

        <div class="icon-circle">✓</div>

        <h1>Dashboard</h1>

        <p class="subtitle">
            Login berhasil! Senang melihat kamu kembali.
        </p>

        <div class="welcome-box">
            <p class="welcome-title">Selamat Datang, Admin!</p>
            <p>Kamu berhasil masuk ke dalam sistem.</p>
            <p>Semoga harimu menyenangkan!</p>
        </div>

        <a href="index.php?page=login" class="back-button">
            Kembali ke Halaman Login
        </a>

        <p class="footer">
            &copy; 2026 My Website. All rights reserved.
        </p>

    </div>

</body>
</html>
