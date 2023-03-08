<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Document</title>
</head>

<body>
    <form action="{{ route('validar') }}" method="post">
        @csrf
        <div class="cabeceraS">
            <div class="titulo">
                <h1>Login Salón de eventos</h1>
            </div>
            <div class="items">
                <span class="icono material-symbols-rounded">person</span>
                <input class="cajas" name="usuario" type="text" placeholder="Usuario">
            </div>
            <div class="items">
                <span class="icono material-symbols-rounded">lock</span>
                <input class="cajas" name="password" type="text" placeholder="Contraseña">
            </div>
            <div class="items">
                <input class="boton" type="submit" value="Validar">
            </div>
        </div>
    </form>
</body>

</html>
