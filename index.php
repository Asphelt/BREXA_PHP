<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREXA Industrial - Login</title>
    <style>
        :root {
            --primary: #000000;
            --accent: #FFA500;
            --background: #ffffff;
            --gray: #f5f5f5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            background-color: var(--gray);
        }

        .login-container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            margin: auto;
            background: var(--background);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-image {
            flex: 1;
            background: white url('/img/Brexa\ fondo.png') no-repeat center center;
            background-size: cover;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .login-image img {
            width: 80%;
            max-width: 300px;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 0 10px rgba(0,0,0,0.1));
        }

        .login-image::after {
            display: none;
        }

        .login-form {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 30px;
            color: var(--primary);
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: var(--accent);
            outline: none;
        }

        .input-group label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--background);
            padding: 0 5px;
            color: #666;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: 0;
            font-size: 12px;
            color: var(--accent);
        }

        button {
            padding: 15px;
            background: var(--primary);
            color: var(--background);
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background: var(--accent);
        }

        button::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: shine 2s infinite;
        }

        @keyframes shine {
            to {
                left: 100%;
            }
        }

        .alert {
            padding: 15px;
            border-radius: 4px;
            color: white;
            margin-bottom: 20px;
            opacity: 0;
            transition: opacity 0.6s;
        }

        .alert-error {
            background-color: #f44336;
        }

        .alert.show {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                margin: 20px;
            }

            .login-image {
                padding: 20px;
            }

            .login-form {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="/img/BREXA Industrial 01.png" alt="BREXA Industrial Logo">
        </div>
        <div class="login-form">
            <h1>Iniciar Sesión</h1>
            <div id="alertBox" class="alert alert-error" style="display:none;"></div>
            <form id="loginForm" method="POST" action="">
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder=" " required>
                    <label for="email">Correo electrónico</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder=" " required>
                    <label for="password">Contraseña</label>
                </div>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            const alertBox = document.getElementById('alertBox');

            <?php if (isset($error_message)): ?>
            showAlert("<?php echo $error_message; ?>");
            <?php endif; ?>

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                
                this.submit();
            });

            function showAlert(message) {
                alertBox.textContent = message;
                alertBox.style.display = 'block';
                setTimeout(() => {
                    alertBox.classList.add('show');
                }, 10);
                setTimeout(() => {
                    alertBox.classList.remove('show');
                    setTimeout(() => {
                        alertBox.style.display = 'none';
                    }, 600);
                }, 3000);
            }
        });
    </script>
</body>
</html>