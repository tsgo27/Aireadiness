<?php
// Incluindo a conexão com o banco de dados
require_once __DIR__ . '/../Config/database.php';

// Consulta SQL para buscar todas as respostas do último registro
$query = "SELECT * FROM respostas WHERE data_resposta = (SELECT MAX(data_resposta) FROM respostas)";
$stmt = $pdo->query($query);
$respostas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mapeando as respostas para valores numéricos
$scoreMap = [
    'A' => 3,
    'B' => 2,
    'C' => 1,
    'D' => 0
];

// Extraindo as pontuações das questões e convertendo para valores numéricos
$sectionScores = [];

foreach ($respostas as $resposta) {
    // Atribuindo o valor numérico conforme a resposta
    $sectionScores[$resposta['questao']] = isset($scoreMap[$resposta['resposta']]) ? $scoreMap[$resposta['resposta']] : 0;
}
?>