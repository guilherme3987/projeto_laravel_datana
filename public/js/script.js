// Script para o menu responsivo e ScrollSpy
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
});
function smoothScroll(target, duration) {
  const targetElement = document.querySelector(target);
  const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  let startTime = null;

  function animation(currentTime) {
      if (startTime === null) startTime = currentTime;
      const timeElapsed = currentTime - startTime;
      const run = ease(timeElapsed, startPosition, distance, duration);
      window.scrollTo(0, run);
      if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  // Função de easing para suavizar a animação
  function ease(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * t * t + b;
      t--;
      return -c / 2 * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

// Adiciona event listeners para os links da navbar
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
          // Verifica se o link é uma âncora (contém #)
          if (this.getAttribute('href').includes('#')) {
              e.preventDefault();
              
              const targetId = this.getAttribute('href').split('#')[1];
              
              // Se for um link para a mesma página (sem ../index.php)
              if (this.getAttribute('href').startsWith('#')) {
                  smoothScroll('#' + targetId, 1000);
              } 
              // Se for um link com ../index.php#section
              else if (this.getAttribute('href').includes('../index.php#')) {
                  // Verifica se já está na página index.php
                  if (window.location.pathname.endsWith('index.php')) {
                      smoothScroll('#' + targetId, 1000);
                  } else {
                      // Se não estiver na página index, redireciona primeiro
                      window.location.href = '../index.php';
                      // Adiciona a seção alvo ao URL para scroll após carregar
                      window.location.hash = targetId;
                  }
              }
          }
      });
  });
});

  
    // Atualizar as classes 'active' para refletir a área visível da página, exceto na seção "programacao"
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll("a.nav-link");
  
    function updateActiveLink() {
      let currentSection = "";
  
      sections.forEach((section) => {
        const sectionTop = section.offsetTop - OFFSET;
        const sectionHeight = section.offsetHeight;
  
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
          currentSection = `#${section.id}`;
        }
      });
  
      navLinks.forEach((link) => {
  
  
        // Adicionar evento de rolagem para atualizar as classes 'active'
        window.addEventListener("scroll", updateActiveLink);
  
        // Atualizar as classes 'active' ao carregar a página
        updateActiveLink();
  
        // Toggle collapsed class on navbar-toggler
        const navbarToggler = document.querySelector(".navbar-toggler");
        if (navbarToggler) {
          navbarToggler.addEventListener("click", function () {
            this.classList.toggle("collapsed");
          });
        }
  
        // Collapse navbar when clicking on the brand link
        const navbarBrand = document.querySelector("a.navbar-brand");
        if (navbarBrand) {
          navbarBrand.addEventListener("click", function () {
            const navbarCollapse = document.querySelector(".navbar-collapse");
            if (navbarCollapse && navbarCollapse.classList.contains("show")) {
              navbarCollapse.classList.remove("show");
            }
          });
        }
      });
  
      // Adicionar evento de rolagem para atualizar as classes 'active'
      window.addEventListener("scroll", updateActiveLink);
  
      // Atualizar as classes 'active' ao carregar a página
      updateActiveLink();
  
    }
  