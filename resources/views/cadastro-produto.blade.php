<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <form action="{{ route('registrar_produto') }}" method="POST">
            @csrf
            <label for="">Nome</label> <br>
            <input type="text" name="nome"> <br>

            <label for="">Preço</label> <br>
            <input type="text" name="preco"> <br>

            <label for="">Quantidade</label> <br>
            <input type="text" name="quantidade"> <br>
            <button>Enviar</button>
        </form>
    </body>
</html>
