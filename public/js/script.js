document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const navbar = document.querySelector('.navbar');

  menuToggle.addEventListener('click', () => {
      // Adiciona ou remove a classe 'menu-open' no header
      navbar.classList.toggle('menu-open');
      
      // Atualiza o atributo aria-expanded para acessibilidade
      const isExpanded = navbar.classList.contains('menu-open');
      menuToggle.setAttribute('aria-expanded', isExpanded);
  });

  // Adiciona event listeners para os links da navbar para rolagem suave
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
      link.addEventListener('click', function (e) {
          const href = this.getAttribute('href');

          // Verifica se o link é uma âncora (contém #)
          if (href && href.startsWith('#')) {
              e.preventDefault();

              const targetId = href.substring(1); // Remove o '#' do ID
              const targetElement = document.getElementById(targetId);

              if (targetElement) {
                  // Rola suavemente até o elemento alvo usando a API nativa
                  targetElement.scrollIntoView({
                      behavior: 'smooth',
                      block: 'start'
                  });
              }
          }
      });
  });

  // Script para exibir o nome do arquivo selecionado (do seu código anterior)
  const fileInput = document.getElementById('csv_file');
  const fileNameElement = document.querySelector('.file-name');
  
  if (fileInput) { 
      fileInput.addEventListener('change', function(e) {
          if (e.target.files.length > 0) {
              const fileName = e.target.files[0].name;
              fileNameElement.textContent = fileName;
          } else {
              fileNameElement.textContent = 'Nenhum arquivo selecionado';
          }
      });
  }
});
