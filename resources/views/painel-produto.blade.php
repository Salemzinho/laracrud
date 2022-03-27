<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>*{font-family: 'Montserrat';}</style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    </head>
    <body>
        @include('includes.navbar')

        <div class="container"> 
            <div class="p-0 mt-5">
                <h2>Painel de Produtos</h2>
            </div>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preco</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produto as $produtos)
                        <th scope="row">{{ $produtos->id }}</th>
                            <td>{{ $produtos->nome }}</td>
                            <td>{{ $produtos->preco }}</td>
                            <td>{{ $produtos->quantidade }}</td>
                            <td>   
                                <a href="/produto/editar/{{$produtos->id}}">
                                    <button class="btn btn-outline-primary">Editar</button>
                                </a>
                            </td>
                            <td>   
                                <a href="/produto/deletar/{{$produtos->id}}">
                                    <button class="btn btn-outline-danger">Excluir</button>
                                </a>
                            </td>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
