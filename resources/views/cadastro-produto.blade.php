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
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand me-2 mt-1" href="/">
                    <h4 class="text-muted"><b style="color: #ef3b2d">Lara</b>CRUD</h4>
                </a> 
                
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <div class="d-flex align-items-center">
                        <a href="">
                            <button type="button" class="btn btn-link text-dark px-3 me-2 text-decoration-none">
                                Menu
                            </button>
                        </a>
                        <a href="/cadastro-produto">
                            <button type="button" class="btn btn-outline-danger me-3">
                                Cadastro de Produtos
                            </button>
                        </a>
                        <a class="btn btn-dark px-3" href="https://github.com/Salemzinho" role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-between mt-5">
                <div class="col col-lg-5 col-sm-12">     
                    <div class="p-0">
                        <h2>Cadastre seu produto!</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ullam voluptatibus 
                        tempore laboriosam sunt quaerat illum a, optio natus repudiandae?</p>
                    </div>
                </div>
                <div class="col col-lg-6 col-sm-12 border rounded p-4">
                    <form action="{{ route('registrar_produto') }}" method="POST">
                        @csrf
                        <label for="">Nome</label> <br>
                        <input type="text" name="nome" class="form-control"> <br>

                        <label for="">Preço</label> <br>
                        <input type="text" name="preco" class="form-control"> <br>

                        <label for="">Quantidade</label> <br>
                        <input type="text" name="quantidade" class="form-control"> <br>

                        <button class="btn btn-outline-danger col-12 mt-5">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    <br><br> <br>
        <footer>
            <div class="bg-dark p-5">
                <p class="text-center text-muted">Teste copyright</p>
            </div>
        </footer>
    </body>
</html>
