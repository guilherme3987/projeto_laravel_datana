document.addEventListener('DOMContentLoaded', function() {
    // Todo o seu código de manipulação do DOM deve ficar aqui dentro
    const fileInput = document.getElementById('csv_file');
    const fileNameElement = document.querySelector('.file-name');
    
    if (fileInput) { // Adiciona uma verificação para garantir que o elemento existe
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