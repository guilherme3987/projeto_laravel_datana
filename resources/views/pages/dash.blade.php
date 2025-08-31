<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Formulário de upload de CSV -->
    <form action="{{ route('importar.csv') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <label for="csv_file"> Adicione seu arquivo CSV: </label>
        <input type="file" name="csv_file" id="csv_file" accept=".csv" required>
        <button type="submit">Importar CSV</button>

    </form>

    <!-- Mensagens de sucesso ou erro -->
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif


</body>
</html>
