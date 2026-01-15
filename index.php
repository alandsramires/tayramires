<?php
// Página estilizada em PHP
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Parabéns Tayene</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fad0c4, #fbc2eb, #a6c1ee);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            background: rgba(255, 255, 255, 0.85);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 600px;
            animation: fadeIn 2s ease-in-out;
        }
        h1 {
            font-size: 2.5em;
            color: #e91e63;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: scale(0.9);}
            to {opacity: 1; transform: scale(1);}
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Parabéns Tayene!</h1>
        <p>Você é inspiração.</p>
        <p>Para todo sempre, seu amor, Alan!</p>
    </div>
</body>
</html>