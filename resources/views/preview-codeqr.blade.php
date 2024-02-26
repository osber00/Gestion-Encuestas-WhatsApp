<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código QR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>

        body, html {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            height: 50%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
        }

        .svg-wrapper {
            display: inline-block;
            position: relative;
            width: 100%;
            padding-top: 100%; /* 1:1 Aspect Ratio */
            vertical-align: middle;
            overflow: hidden;
        }

        .svg-wrapper svg {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="svg-wrapper">
        <h2>{{$colaborador}}</h2>
        <img src="{{asset('qrcodes/'.$codigoQr)}}" alt="">
    </div>
</div>

</body>
</html>
