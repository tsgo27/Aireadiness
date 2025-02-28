document.getElementById('submit-button').addEventListener('click', calculateResults);

function calculateResults() {
    const form = document.getElementById('assessment-form');
    const resultsDiv = document.getElementById('results');
    const ctx = document.getElementById('polarChart').getContext('2d');
    const overallScoreDisplay = document.getElementById('overall-score'); // Elemento de pontuação
    const recommendationsDisplay = document.getElementById('recommendations'); // Elemento de recomendações

    // 1. Coleta as respostas do formulário.
    const answers = {};
    for (let i = 1; i <= 11; i++) {
        const answer = form.querySelector(`input[name="q${i}"]:checked`);
        answers[`q${i}`] = answer ? parseInt(answer.value) : 0; // Valor padrão 0 se não respondido.
    }

    // 2. Calcula as pontuações por seção (máximo 4 pontos por questão).
    const sectionScores = {
        governance: (answers.q1 + answers.q2 + answers.q3),
        dataQuality: (answers.q4 + answers.q5),
        transparency: (answers.q6 + answers.q7),
        security: (answers.q8 + answers.q9),
        accountability: (answers.q10 + answers.q11)
    };

    // 3. Calcula a pontuação geral.
    const totalScore = Object.values(sectionScores).reduce((acc, score) => acc + score, 0);
    const maxScore = 44; // 11 questões com pontuação máxima de 4 cada.
    const overallScore = (totalScore / maxScore) * 100;

    // 4. Exibe os resultados.
    resultsDiv.style.display = 'block';
    overallScoreDisplay.textContent = `Pontuação Geral: ${overallScore.toFixed(2)}%`;

    // 5. Gera o gráfico de polarArea.
    new Chart(ctx, {  // Supondo que pieChartCanvas seja o seu canvas
        type: 'polarArea',  // Tipo do gráfico
        data: {
            labels: ['Governança', 'Qualidade dos Dados', 'Transparência', 'Segurança', 'Responsabilidade'],  // Labels das seções
            datasets: [{
                label: 'Distribuição por Seção',
                data: Object.values(sectionScores),  // Dados de pontuação por seção
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',  // Cor para cada fatia
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',  // Cor da borda para cada fatia
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            aspectRatio: 1.5, // Ajusta a proporção do gráfico (pode aumentar ou diminuir o valor)
            plugins: {
                legend: {
                    position: 'top',  // Posição da legenda
                },
                title: {
                    display: true,
                    text: 'Distribuição de Pontuação por Seção',  // Título do gráfico
                }
            }
        }
    });

    // 6. Exibe recomendações com base na pontuação.
    recommendationsDisplay.textContent = generateRecommendations(overallScore);
}

function generateRecommendations(score) {
    if (score >= 80) {
        return 'Sua empresa está bem preparada para a implementação de IA. Continue monitorando e melhorando seus processos.';
    } else if (score >= 50) {
        return 'Sua empresa está no caminho certo, mas ainda há áreas que precisam de melhorias significativas.';
    } else {
        return 'Sua empresa precisa focar em desenvolver e implementar políticas e processos robustos para a IA.';
    }
}
