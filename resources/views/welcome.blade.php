<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
            <h2>Paytour</h2>
        </header>
        <main>
            <form role="from" action="{{route('store')}}" method="post">
                @csrf
                <label for="name">Nome:</label>
                    <input name="name" type="text">
                <label for="">E-mail:</label>
                    <input name="email" type="email">
                <label for="">Cargo desejado:</label>
                    <input name="position"type="text">
                <label for="">Escolaridade:</label>
                <select name="education" >
                    <option value="">Ensino médio</option>
                    <option value="">Ensino médio</option>
                    <option value="">Ensino médio</option>
                    <option value="">Ensino médio</option>
                    <option value="">Ensino médio</option>
                    <option value="">Ensino médio</option>
                    <option value="">Ensino médio Incompleta</option>
                    <option value="">Ensino médio Completo</option>
                    <option value="">Graduação Incompleta</option>
                    <option value="">Graduação Completa</option>
                    <option value="">Pós-graduação Incompleta</option>
                    <option value="">Pós-graduação Completa</option>
                </select>
                <label for="">Observações:</label>
                <textarea name="obs" cols="30" rows="10"></textarea>
                <label for="">Currículo</label>
                <input type="file" name="resume">

                <button type="submit" class="btn btn-primary btn-sm ms-auto">Registrar</button>
            </form>
        </main>
    </body>
</html>
