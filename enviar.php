<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre   = htmlspecialchars($_POST["nombre"]);
    $correo   = htmlspecialchars($_POST["correo"]);
    $telefono = htmlspecialchars($_POST["telefono"]);

    // Aquí podrías guardar en base de datos después

    echo "
    <html>
    <head>
        <title>Mensaje enviado</title>
        <style>
            body {
                background: #0e0e0e;
                color: white;
                font-family: Arial;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                text-align: center;
            }
            .box {
                background: #2f2f2f;
                padding: 40px;
                border-radius: 20px;
            }
            a {
                color: #6A0DAD;
                text-decoration: none;
                display: block;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>

        <div class='box'>
            <h2>Mensaje enviado desde las sombras</h2>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Correo:</strong> $correo</p>
            <p><strong>Teléfono:</strong> $telefono</p>

            <a href='index.php'>Volver a OTTOWDBQ</a>
        </div>

    </body>
    </html>
    ";
}
?>