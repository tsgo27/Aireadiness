// Obtendo os botões
const nextBtns = document.querySelectorAll('.next-btn');
const prevBtns = document.querySelectorAll('.previous-btn');
const sections = document.querySelectorAll('.question-section');
let currentSectionIndex = 0;

// Função para mostrar a seção atual
function showSection(index) {
    // Esconde todas as seções
    sections.forEach(section => {
        section.classList.remove('active');
    });

    // Exibe a seção selecionada
    sections[index].classList.add('active');
}

// Evento para o botão "Próxima Etapa"
nextBtns.forEach(button => {
    button.addEventListener('click', () => {
        if (currentSectionIndex < sections.length - 1) {
            currentSectionIndex++;
            showSection(currentSectionIndex);
        }
    });
});

// Evento para o botão "Anterior"
prevBtns.forEach(button => {
    button.addEventListener('click', () => {
        if (currentSectionIndex > 0) {
            currentSectionIndex--;
            showSection(currentSectionIndex);
        }
    });
});

// Inicializa com a primeira seção visível
showSection(currentSectionIndex);