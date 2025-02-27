document.getElementById("submit-button").addEventListener("click", function () {
    let respostas = [];
    let todasRespondidas = true; // Variável para verificar se todas as perguntas foram respondidas

    // Para cada pergunta, verificar se ao menos uma resposta foi marcada
    document.querySelectorAll('.question-section').forEach((section) => {
        const questaoName = section.querySelector('input[type="radio"]').name;  // Pega o 'name' da primeira radio
        const respostaSelecionada = section.querySelector('input[name="' + questaoName + '"]:checked');  // Verifica se está marcado

        if (!respostaSelecionada) {
            todasRespondidas = false;  // Se algum input não foi marcado, atualizamos para falso
            section.style.border = "2px solid red"; // Adiciona um estilo para indicar que falta resposta
        } else {
            section.style.border = ""; // Remove o estilo se a questão foi respondida
        }
    });

    if (!todasRespondidas) {
        alert("Por favor, responda todas as perguntas antes de enviar.");
        return; // Impede o envio
    }

    // Recolher as respostas
    document.querySelectorAll('input[type="radio"]:checked').forEach((input) => {
        respostas.push({
            questao: input.name,  // Nome da questão
            resposta: input.value // Valor da resposta marcada
        });
    });

    // Feedback visual de carregamento
    const submitButton = document.getElementById("submit-button");
    submitButton.disabled = true;  // Desativa o botão para evitar múltiplos envios
    submitButton.innerHTML = "Enviando...";  // Mensagem de carregamento

    // Enviar as respostas para o servidor
    fetch("../Models/salvar_respostas.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ respostas })  // Enviando como JSON
    })
    .then(response => response.json())
    .then(data => {
        // Reativa o botão e restaura o texto
        submitButton.disabled = false;
        submitButton.innerHTML = "Enviar Respostas"; // Restaura o texto

        if (data.status === "success") {
            window.location.href = "../views/dashboard.php"; // Redireciona para o dashboard
        } else {
            alert("Erro ao salvar respostas: " + data.message);
        }
    })
    .catch(error => {
        // Reativa o botão e restaura o texto
        submitButton.disabled = false;
        submitButton.innerHTML = "Enviar Respostas"; // Restaura o texto

        alert("Erro na requisição: " + error);
    });
});
