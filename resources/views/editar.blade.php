<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BRAZECAS - Editar</title>

        <link rel="stylesheet" href="resources/css/app.css">

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="/" style="font-weight: 800; color: rgb(219, 209, 62)">
                    BRAZECAS
                </a>
            </div>
        </nav>
        <div class="container">
            <br>
            <div class="col">
                    <div  class="form-text"><p style="font-size:23px; font-weight:500; margin-top:15px">Editar - Agendamento de Potênciais Clientes</p></div>
                    <form action="/editar-produto/{{ $produto->id }} " method="POST">
                        @csrf
                        <div class="mb-3" style>
                            <label for="nome" class="form-label">Nome: </label>
                            <input class="form-control" placeholder="Nome" aria-label="default input example" type="text" name="nome" value="{{ $produto->nome }}" required>
                        </div>
                        <div class="mb-3" style>
                            <label for="telefone" class="form-label">Telefone: </label>
                            <input class="form-control" placeholder="Nome" aria-label="default input example" type="text" name="telefone" value="{{ $produto->telefone }}" required>
                        </div>
                        <div class="mb-3" style>
                            <label for="origem" class="form-label">Origem: </label>
                            <select class="form-control" name="origem" value="{{ $produto->origem }}" required>
                            <option value="Celular" {{ $produto->origem == 'Celular' ? 'selected' : '' }}>Celular</option>
                            <option value="WhatsApp" {{ $produto->origem == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                            <option value="Telefone Fixo" {{ $produto->origem == 'Telefone Fixo' ? 'selected' : '' }}>Telefone Fixo</option>
                            </select>
                        </div>
                        <div class="mb-3" style>
                            <label for="data" class="form-label">Data: </label>
                            <input class="form-control" type="date" placeholder="Nome" aria-label="default input example" type="text" name="data" value="{{ $produto->data }}" required>
                        </div>
                        <div class="mb-3" style>
                            <label for="observacao" class="form-label">Observação: </label>
                            <textarea class="form-control" aria-label="default input example" name="observacao" required>{{ $produto->observacao }}</textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button class="btn btn-success" type="submit">Editar</button> 
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>
