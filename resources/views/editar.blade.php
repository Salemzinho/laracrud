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
            <div class="row justify-content-between mt-5 mb-5">
                <div class="col col-lg-5 col-sm-12">     
                    <div class="p-0">
                    <h2>Edite seu produto!</h2>
                    <hr>
                    <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ullam voluptatibus 
                    tempore laboriosam sunt quaerat illum a, optio natus repudiandae?</p>
                </div>
            </div>
            <div class="col col-lg-6 col-sm-12 border rounded p-4">
                <form action="/painel-produto/{{$produto->id}}/editado" method="POST">
                    @csrf
                    <label for="">Nome</label> <br>
                    <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}"> <br>

                    <label for="">Preço</label> <br>
                    <input type="text" name="preco" class="form-control" value="{{ $produto->preco }}"> <br>

                    <label for="">Quantidade</label> <br>
                    <input type="text" name="quantidade" class="form-control" value="{{ $produto->quantidade }}"> <br>

                    <button class="btn btn-outline-danger col-12 mt-5">Enviar</button>
                </form>
            </div>
            </div>
        </div>

        <br>

        @include('includes.footer')
    </body>
</html>
