<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <section id="section-dash">
        <div class="container-csv">
            <div class="header-form">
                <h2>Importar Arquivo CSV</h2>
                <p>Selecione um arquivo CSV de sua máquina para importar os dados para o sistema. O arquivo deve ter a extensão `.csv`.</p>
            </div>
            
            <form action="{{ route('importar.csv') }}" method="POST" enctype="multipart/form-data" class="upload-form"> 
                @csrf
                <div class="file-upload-wrapper">
                    <label for="csv_file" class="file-label">
                        <span class="file-name">Nenhum arquivo selecionado</span> <span class="select-button">Escolher Arquivo</span>
                    </label>
                    <input type="file" name="csv_file" id="csv_file" accept=".csv" required class="file-input">
                </div>
                <button type="submit" class="submit-button">Importar CSV</button>
            </form>

            @if(session('success'))
                <div class="message success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="message error">{{ session('error') }}</div>
            @endif
        </div>

    </section>
    <script src="{{ asset(path: 'js/script_dash.js') }}"></script>


</body>

</html>
