<?php

require_once __DIR__ . '/../Config/database.php'; 

// Lógica para inserir respostas no banco de dados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados enviados no corpo da requisição
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);

    if (isset($data['respostas']) && !empty($data['respostas'])) {
        try {
            $pdo->beginTransaction();

            // Preparar para inserir as respostas na tabela de respostas
            $stmt = $pdo->prepare("INSERT INTO respostas (questao, resposta) VALUES (:questao, :resposta)");

            // Inserir cada resposta na tabela
            foreach ($data['respostas'] as $resposta) {
                $stmt->execute([
                    ':questao' => $resposta['questao'],
                    ':resposta' => $resposta['resposta']
                ]);
            }

            // Se a inserção for bem-sucedida, confirma a transação
            $pdo->commit();
            echo json_encode(['status' => 'success']);
        } catch (PDOException $e) {
            // Em caso de erro, faz o rollback
            $pdo->rollBack();
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    } else {
        // Se não houver respostas, retorna um erro
        echo json_encode(['status' => 'error', 'message' => 'Nenhuma resposta enviada.']);
    }
} else {
    // Caso o método da requisição não seja POST
    echo json_encode(['status' => 'error', 'message' => 'Método inválido.']);
}
?>

