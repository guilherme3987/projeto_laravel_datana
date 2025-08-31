<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- função asset -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        
    <title>DATANA</title>

</head>
<body>

<header class="navbar">
    <div class="navbar-logo">
        <img src="images/logo.png" alt="Logo da Empresa"> 
    </div>
    <nav>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Início</a></li>
            <li class="nav-item"><a href="#section1" class="nav-link">Sobre</a></li>
            <li class="nav-item"><a href="#section2" class="nav-link">Funcionalidades</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
        </ul>
    </nav>
    <button class="menu-toggle" aria-controls="nav-links-container" aria-expanded="false">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
</header>

<section class="section0">
    <div class="section0-text">
        <h2>Transforme Dados <br>em Decisões com o DatAna</h2>
        <p>Libere o poder dos seus dados com nossa plataforma de análise. Obtenha insights práticos, análises preditivas e relatórios automatizados que impulsionam o crescimento dos seu negócio.</p>
    </div>
    <div class="section0-devices">
        <img src="images/mock_up.png" alt="Celular e Tablet mostrando o aplicativo">
    </div>
</section>

<section id="section1">
        <h3>Elabore sua Estratégia com  DatAna</h3>
            
        <p>O DatAna representa a simplicidade de que você precisa.  Sem configurações complexas, sem desperdício de tempo.  Faça upload e vá direto ao que importa: seus insights. Obtenha insights práticos, análises preditivas e relatórios automatizados que impulsionam o crescimento dos seus negócios.</p>
        
        <div id="button">
            <a href="{{ route('dash') }}" class="codepen-button"><span>Acesse aqui</span></a>

        </div>
        
</section>

<section id="section2">
    <h1>A análise de dados descomplicada</h1>
    <div class="blocks-container">
        <div id="block-stats">
            <h3>Estatísticas Simplificadas</h3>
        </div>
        <div id="block-graphs">
            <h3>Gráficos automáticos</h3>
        </div>
        <div id="reports-pdf">
            <h3>Relatórios em PDF</h3>
        </div>
        <div id="block-dashboards">
            <h3>Dashboards interativos</h3>
        </div>
    </div>
</section>

</body>
<!-- função asset -->

<script src="{{ asset(path: 'js/script.js') }}"></script>
</html>