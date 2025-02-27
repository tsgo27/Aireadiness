<?php
// Incluindo a conexão com o banco de dados
require_once __DIR__ . '/../Models/get_respostas.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard de Pontuação</h1>
    <!-- Div para o gráfico -->
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

    <!-- Carregando a biblioteca do Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Passando os dados do PHP para o JavaScript
        var sectionScores = <?php echo json_encode($sectionScores); ?>;
        console.log(sectionScores); // Verificando os dados no console

        // Carregando a biblioteca do Google Charts
        google.charts.load('current', {'packages':['corechart', 'pie']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Seção', 'Pontuação'],
                ['q1', sectionScores['q1'] || 0],
                ['q2', sectionScores['q2'] || 0],
                ['q3', sectionScores['q3'] || 0],
                ['q4', sectionScores['q4'] || 0],
                ['q5', sectionScores['q5'] || 0],
                ['q6', sectionScores['q6'] || 0],
                ['q7', sectionScores['q7'] || 0],
                ['q8', sectionScores['q8'] || 0],
                ['q9', sectionScores['q9'] || 0],
                ['q10', sectionScores['q10'] || 0],
                ['q11', sectionScores['q11'] || 0]
            ]);

            var options = {
                title: 'Pontuação por Seção',
                is3D: true,
                slices: {
                    0: {offset: 0.1},
                    1: {offset: 0.1},
                    2: {offset: 0.1},
                    3: {offset: 0.1},
                    4: {offset: 0.1},
                    5: {offset: 0.1},
                    6: {offset: 0.1},
                    7: {offset: 0.1},
                    8: {offset: 0.1},
                    9: {offset: 0.1},
                    10: {offset: 0.1}
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>
