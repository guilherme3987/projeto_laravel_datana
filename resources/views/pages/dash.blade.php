<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<header class="navbar">
    <div class="navbar-logo">
        <img src="images/logo.png" alt="Logo da Empresa"> 
    </div>
    <nav>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Início</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#section1" class="nav-link">Sobre</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#section2" class="nav-link">Funcionalidades</a></li>
            <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Contato</a></li>
        </ul>
    </nav>
    <button class="menu-toggle" aria-controls="nav-links-container" aria-expanded="false">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
</header>
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

                @error('csv_file')
                    <div class="validation-error">{{ $message }}</div>
                @enderror

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
    <script src="{{ asset(path: 'js/script.js') }}"></script>


</body>

</html>
