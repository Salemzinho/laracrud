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
            <div class="row">
                <div class="col-lg-3 col-sm-3 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mt-3 mb-5">Cadastro de Produtos</h5>
                            <p class="card-text">Exemplo simples de um CRUD para cadastro de um produto.</p>
                            <a href="/cadastro-produto" class="btn btn-outline-danger col-12 mt-5">Vamos lá!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 mt-5">
                    <div class="card">
                        <div class="card-body bg-light">
                            <h5 class="card-title mt-3 mb-5">Coming Soon!</h5>
                            <p class="card-text">Logo logo tem algo aqui :)</p>
                            <a href="/" class="btn btn-outline-danger col-12 mt-5">Vamos lá!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 mt-5">
                    <div class="card">
                        <div class="card-body bg-light">
                            <h5 class="card-title mt-3 mb-5">Coming Soon!</h5>
                            <p class="card-text">Logo logo tem algo aqui :)</p>
                            <a href="/" class="btn btn-outline-danger col-12 mt-5">Vamos lá!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 mt-5">
                    <div class="card">
                        <div class="card-body bg-light">
                            <h5 class="card-title mt-3 mb-5">Coming Soon!</h5>
                            <p class="card-text">Logo logo tem algo aqui :)</p>
                            <a href="/" class="btn btn-outline-danger col-12 mt-5">Vamos lá!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br>

        @include('includes.footer')
    </body>
</html>
