<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body class="d-flex justify-content-center">
        <header>
            <h2>Paytour</h2>
        </header>
        <main>
            <div >
                <form role="form" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input id="name" name="name" type="text"  class="form-control" value="{{ old('name') }}" placeholder="Digite seu nome completo">
                        @error('name') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input id="email" name="email" type="email"  class="form-control" value="{{ old('email') }}" placeholder="Digite o email">
                        @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="position">Cargo desejado:</label>
                        <input id="position" name="position" type="text"  class="form-control" value="{{ old('position') }}" placeholder="Qual é o cargo desejado?">
                        @error('position') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="education">Escolaridade:</label>
                        <select id="education" name="education" class="form-control" >
                            <option disabled selected >Selecione uma opção</option>
                            <option value="ens_medio_incom">Ensino médio Incompleto</option>
                            <option value="ens_medio_com">Ensino médio Completo</option>
                            <option value="grad_incom">Graduação Incompleta</option>
                            <option value="grad_com">Graduação Completa</option>
                            <option value="pos_grad_incom">Pós-graduação Incompleta</option>
                            <option value="pos_grad_com">Pós-graduação Completa</option>
                        </select>
                        @error('education') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="obs">Observações:</label>
                        <textarea id="obs" name="obs" cols="30" rows="10" class="form-control" placeholder="Deixe suas observações"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="resume">Currículo:</label>
                        <input id="resume" type="file" name="resume" class="form-control-file" value="{{ old('position') }}" >
                        @error('resume') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Registrar</button>
                </form>
            </div>
        </main>

    </body>
</html>
