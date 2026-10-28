<?php
$error = $error ?? "";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | My Website</title>

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
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #183c25;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 42px 35px;
            background: #185c2e;
            border-radius: 22px;
            box-shadow: 0 15px 35px rgba(24, 92, 46, 0.18);
        }

        .login-header {
            text-align: center;
            margin-bottom: 32px;
        }

        .login-icon {
            width: 68px;
            height: 68px;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: #e7f4e9;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }

        .login-header h1 {
            color: #ffffff;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .login-header p {
            color: #d3ead8;
            font-size: 14px;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 9px;
        }

        .form-group input {
            width: 100%;
            padding: 15px 17px;
            border: 2px solid transparent;
            border-radius: 12px;
            outline: none;
            background: #65ad76;
            color: #ffffff;
            font-size: 14px;
            transition: 0.2s;
        }

        .form-group input::placeholder {
            color: #edf8ef;
        }

        .form-group input:focus {
            background: #ffffff;
            border-color: #a6d8af;
            color: #183c25;
        }

        .login-button {
            width: 100%;
            padding: 15px;
            margin-top: 8px;
            border: none;
            border-radius: 12px;
            background: #ffffff;
            color: #185c2e;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-button:hover {
            background: #e7f4e9;
            transform: translateY(-2px);
        }

        .error-message {
            background: #ffe8e8;
            color: #a52626;
            padding: 12px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .login-footer {
            text-align: center;
            color: #d3ead8;
            font-size: 12px;
            margin-top: 25px;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 35px 25px;
            }

            .login-header h1 {
                font-size: 27px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="login-header">
            <div class="login-icon">♧</div>
            <h1>Welcome Back!</h1>
            <p>Silakan login untuk masuk ke akun kamu.</p>
        </div>

        <?php if (!empty($error)) : ?>
            <div class="error-message">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form action="index.php?page=login" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                    autocomplete="username"
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                    autocomplete="current-password"
                >
            </div>

            <button type="submit" class="login-button">
                Login →
            </button>

        </form>

        <div class="login-footer">
            &copy; 2026 My Website. All rights reserved.
        </div>

    </div>

</body>
</html>
