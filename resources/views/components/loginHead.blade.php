<!-- resources/views/admin/login.blade.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeHub - Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/login.jpg') }}') center/contain no-repeat;
            background-size: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            position: relative;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        .login-card {
            background: rgba(20, 20, 20, 0.7);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(200, 35, 51, 0.4);
            border-radius: 10px;
            padding: 2rem;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
        }
        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .input-group input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            color: #fff;
            padding: 0.7rem 1rem;
            width: 100%;
            transition: border-color 0.3s ease;
        }
        .input-group input:focus {
            outline: none;
            border-color: #ff9999;
        }
        .input-group label {
            position: absolute;
            top: -10px;
            left: 15px;
            background: rgba(20, 20, 20, 0.7);
            color: #ff9999;
            padding: 0 6px;
            font-size: 0.85rem;
        }
        .btn-login {
            background: linear-gradient(90deg, #c82333, #1a1a1a);
            border: none;
            border-radius: 6px;
            padding: 0.8rem;
            width: 100%;
            color: #fff;
            font-weight: 600;
            transition: background 0.3s ease;
            opacity: 0.85;
        }
        .btn-login:hover {
            background: linear-gradient(90deg, #ff9999, #c82333);
            opacity: 1;
        }
        h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 600;
            opacity: 0.9;
        }
        .error-message {
            text-align: center;
            font-size: 12px;
            color: #e43333;
            margin-top: 0.5rem;
            display: block;
        }
    </style>
</head>