<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="resources/css/app.css">

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </head>

    <body>
                    <nav class="navbar navbar-expand-lg bg-success">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/" style="font-weight:800; color: rgb(219, 209, 62)">
                                BRAZECAS
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/" style="color: white">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ url('/listar-clientes') }}" style="color: white">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
            <div class="container">
                <div class="col">
                    <br>
                    <div  class="form-text"><p style="font-size:23px; font-weight:500; margin-top:15px">Cadastrar - Agendamento de Potênciais Clientes</p></div>
                    <div  class="form-text"><p style="font-size:16px">Sistema utilizado para agendamento de serviços.</p></div>
                    <form action="{{ url('/cadastrar-produto') }} " method="POST">
                        @csrf
                        <div class="mb-3" style>
                            <label for="nome" class="form-label">Nome: </label>
                            <input class="form-control" placeholder="Nome" aria-label="default input example" type="text" name="nome" required>
                        </div>
                        <div class="mb-3" style>
                            <label for="telefone" class="form-label">Telefone: </label>
                            <input class="form-control" placeholder="Telefone" aria-label="default input example" type="text" name="telefone" required>
                        </div>
                        <div class="mb-3" style>
                            <label for="origem" class="form-label">Origem: </label>
                            <select class="form-control" name="origem" required>
                                <option selected>Celular</option>
                                <option value="WhatsApp">WhatsApp</option>
                                <option value="Telefone Fixo">Telefone Fixo</option>
                            </select>
                        </div>
                        <div class="mb-3" style>
                            <label for="data" class="form-label">Data: </label>
                            <input class="form-control" type="date" aria-label="default input example" name="data" required>
                        </div>
                        <div class="mb-3" style>
                            <label for="observacao" class="form-label">Observação: </label>
                            <textarea class="form-control" aria-label="default input example" type="text" name="observacao" required> </textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button class="btn btn-success" type="submit">Cadastrar</button> 
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>
