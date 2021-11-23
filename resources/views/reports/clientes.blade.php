<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatorio de clientes</title>
</head>
<body>
    <h2 style="text-align: center">Relatorio de clientes</h2>
    <hr>
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cidade->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
