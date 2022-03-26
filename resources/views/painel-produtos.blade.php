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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Fonts -->  
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand me-2 mt-1" href="/">
                    <h4 class="text-muted"><b>Lara</b>CRUD</h4>
                </a> 
                
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <div class="d-flex align-items-center">
                        <a href="/sobre-nos.php">
                            <button type="button" class="btn btn-link px-3 me-2">
                                Menu
                            </button>
                        </a>
                        <a href="/apoie-os-criadores.php">
                            <button type="button" class="btn btn-primary me-3">
                                Menu
                            </button>
                        </a>
                        <a class="btn btn-dark px-3" href="https://github.com/Salemzinho" role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <br><br>

        <div class="container">
            <form action="" method="POST">
@foreach ($produtos as $produto)
                @csrf
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $produto->id }}</th>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>{{ $produto->quantidade }}</td>
                        </th>
                    </tr>
                    <tr>

                </tbody>
                </table>
@endforeach
            </form>
        </div>
    </body>
</html>
