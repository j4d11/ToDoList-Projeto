<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <style>
        .container {
            display: flex;
            justify-content: center;
            font-family: "Montserrat", serif;

        }

        .retangulo {
            width: 180px;
            height: 240px;
            background-color: #f0ad4e;
            position: relative;
            border-radius: 10px;

        }

        .retangulo-dois {
            width: 180px;
            height: 240px;
            background-color: #f0ad4e;
            position: relative;
            border-radius: 10px;
            margin-left: -45px;

        }

        .triangulo {
            width: 90px;
            height: 90px;
            background-color: #f0ad4e;
            transform: rotate(45deg);
            margin-top: 15px;
            margin-left: -55px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);

        }

        .retangulo.cinza,
        .triangulo.cinza,
        .retangulo-dois.cinza {
            filter: grayscale(100%);
        }

        .retangulo.checked,
        .retangulo-dois.checked {


        }

        /* textos */
        .titulo-etapa {
            font-weight: 700;
            color: white;
            margin-top: 10px;
            text-align: start;
            margin-left: 15px;
        }

        .titulo-etapa-dois {
            font-weight: 700;
            color: white;
            margin-top: 10px;
            text-align: end;
            margin-right: 40px;
        }

        .numero-etapa {
            font-weight: 900;
            color: #b4751c;
            font-size: 80px;
            margin-top: -30px;
            text-align: start;
            margin-left: 15px;
        }

        .numero-etapa-dois {
            font-weight: 900;
            color: #b4751c;
            font-size: 80px;
            margin-top: -30px;
            text-align: end;
            margin-right: 15px;
        }

        .texto {
            font-weight: 400;
            margin-top: -65px;
            text-align: justify;
            margin-left: 15px;
            color: white;
        }

        .texto-dois {
            font-weight: 400;
            margin-top: -65px;
            text-align: justify;
            margin-left: 40px;
            color: white;
        }

        .situacao {
            font-weight: 400;
            text-align: justify;
            margin-left: 15px;
            color: white;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="retangulo cinza " style="z-index: 6;">
            <h2 class="titulo-etapa">Etapa</h2>
            <h1 class="numero-etapa">01</h1>
            <p class="texto">Protocolo Documentação Inicial</p>
            <p class="situacao">Concluido</p>
            <p></p>
        </div>
        <div class="triangulo cinza" style = "z-index: 5;"></div>

        <div class="retangulo-dois cinza" style="background-color: rgb(123, 123, 241); z-index: 4 ">
            <h2 class="titulo-etapa-dois">Etapa</h2>
            <h1 class="numero-etapa-dois" style="color: rgb(70, 70, 151)">02</h1>
            <p class="texto-dois">Levantamento Topográfico</p>
            <p class="situacao"> Concluido</p>
        </div>
        <div class="triangulo cinza" style="background-color: rgb(123, 123, 241); z-index: 3"></div>

        <div class="retangulo-dois" style="background-color: rgb(247, 178, 241); z-index: 2">
            <h2 class="titulo-etapa-dois">Etapa</h2>
            <h1 class="numero-etapa-dois" style="color: rgb(177, 108, 171)">03</h1>
            <p class="texto-dois">Consultas</p>
            <p class="situacao">Indeferido</p>
        </div>
        <div class="triangulo" style="background-color: rgb(247, 178, 241); z-index: 1"></div>
    </div>
</body>

</html>
