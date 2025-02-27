<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/questionario.css">
    <title>Avaliação para (AI Readiness)</title>
</head>

<body>
    <header>
        <h1>Avaliação de Preparação para Implementação de IA</h1>
        <p>Este questionário avalia a prontidão da sua empresa para implementar soluções de IA.</p>
    </header>
    <main>
    <form method="POST" action="../Models/salvar_respostas.php">  
    <!-- Governança e Políticas de IA -->
    <section class="question-section active">
        <h2>Governança e Políticas de IA</h2>

        <legend>1. A empresa possui uma política de IA documentada?</legend><br />
        <label><input type="radio" name="q1" value="A"> A) Não</label>
        <label><input type="radio" name="q1" value="B"> B) Em desenvolvimento</label>
        <label><input type="radio" name="q1" value="C"> C) Sim, mas não abrangente</label>
        <label><input type="radio" name="q1" value="D"> D) Sim, abrangente e atualizada</label><br/>

        <legend>2. Existe um comitê ou responsável pela supervisão ética e legal da IA na empresa?</legend><br/>
        <label><input type="radio" name="q2" value="A"> A) Não</label>
        <label><input type="radio" name="q2" value="B"> B) Em discussão</label>
        <label><input type="radio" name="q2" value="C"> C) Sim, mas com atuação limitada</label>
        <label><input type="radio" name="q2" value="D"> D) Sim, com atuação efetiva e multidisciplinar</label><br/>

        <legend>3. A empresa realiza avaliações de impacto de risco (risk assessments) para sistemas de IA de alto risco, conforme definido pelo AI Act?</legend><br/>
        <label><input type="radio" name="q3" value="A"> A) Não</label>
        <label><input type="radio" name="q3" value="B"> B) Planejado, mas não implementado</label>
        <label><input type="radio" name="q3" value="C"> C) Sim, para alguns sistemas</label>
        <label><input type="radio" name="q3" value="D"> D) Sim, para todos os sistemas de alto risco</label><br/>
       
        <!-- Botões para navegação -->
        <button type="button" class="next-btn">Próximo</button>
    </section>

    <!-- Dados e Qualidade -->
    <section class="question-section">
        <h2>Dados e Qualidade</h2>

        <legend>4. A empresa possui processos para garantir a qualidade, relevância e representatividade dos dados usados em sistemas de IA?</legend><br/>
        <label><input type="radio" name="q4" value="A"> A) Não</label>
        <label><input type="radio" name="q4" value="B"> B) Em desenvolvimento inicial</label>
        <label><input type="radio" name="q4" value="C"> C) Sim, mas com lacunas</label>
        <label><input type="radio" name="q4" value="D"> D) Sim, processos robustos e contínuos</label><br/>
        
        <legend>5. São implementadas medidas para identificar e mitigar vieses (biases) nos dados e algoritmos de IA?</legend><br/>
        <label><input type="radio" name="q5" value="A"> A) Não</label>
        <label><input type="radio" name="q5" value="B"> B) Em fase de conscientização</label>
        <label><input type="radio" name="q5" value="C"> C) Sim, com ferramentas e técnicas básicas</label>
        <label><input type="radio" name="q5" value="D"> D) Sim, com abordagem sistemática e contínua</label><br/>
        <br>

        <!-- Botões para navegação -->
        <button type="button" class="previous-btn">Anterior</button>
        <button type="button" class="next-btn">Próximo</button>
    </section>

    <!-- Transparência e Explicabilidade -->
    <section class="question-section">
        <h2>Transparência e Explicabilidade</h2>

        <legend>6. Os sistemas de IA fornecem informações claras sobre seu propósito, funcionamento e limitações aos usuários e partes interessadas?</legend><br/>
        <label><input type="radio" name="q6" value="A"> A) Não</label>
        <label><input type="radio" name="q6" value="B"> B) Informações limitadas</label>
        <label><input type="radio" name="q6" value="C"> C) Sim, mas pode ser melhorado</label>
        <label><input type="radio" name="q6" value="D"> D) Sim, informações completas e acessíveis</label><br/>
        
        <legend>7. Quando apropriado, a empresa busca desenvolver sistemas de IA explicáveis (XAI) para aumentar a compreensibilidade das decisões?</legend><br/>
        <label><input type="radio" name="q7" value="A"> A) Não</label>
        <label><input type="radio" name="q7" value="B"> B) Não aplicável aos nossos sistemas atuais</label>
        <label><input type="radio" name="q7" value="C"> C) Em estudo/experimentação</label>
        <label><input type="radio" name="q7" value="D"> D) Sim, é um critério importante no desenvolvimento</label><br/>
        
        <!-- Botões para navegação -->
        <button type="button" class="previous-btn">Anterior</button>
        <button type="button" class="next-btn">Próximo</button>
    </section>

    <!-- Segurança e Robustez -->
    <section class="question-section">
        <h2>Segurança e Robustez</h2>

        <legend>8. A empresa implementa medidas de segurança cibernética específicas para proteger sistemas de IA contra ataques e manipulações?</legend><br/>
        <label><input type="radio" name="q8" value="A"> A) Não</label>
        <label><input type="radio" name="q8" value="B"> B) Medidas gerais de segurança, sem foco em IA</label>
        <label><input type="radio" name="q8" value="C"> C) Sim, mas em estágio inicial</label>
        <label><input type="radio" name="q8" value="D"> D) Sim, medidas robustas e específicas para IA</label><br/>

        <legend>9. São realizados testes para garantir a robustez dos sistemas de IA contra entradas inesperadas ou adversariais?</Legend><br/>
        <label><input type="radio" name="q9" value="A"> A) Não</label>
        <label><input type="radio" name="q9" value="B"> B) Testes básicos de funcionalidade</label>
        <label><input type="radio" name="q9" value="C"> C) Sim, testes de estresse e validação</label>
        <label><input type="radio" name="q9" value="D"> D) Sim, testes abrangentes de robustez e adversarial</label><br/>
        
        <!-- Botões para navegação -->
        <button type="button" class="previous-btn">Anterior</button>
        <button type="button" class="next-btn">Próximo</button>
    </section>

    <!-- Responsabilidade e Prestação de Contas -->
    <section class="question-section">
        <h2>Responsabilidade e Prestação de Contas</h2>

        <legend>10. A empresa possui mecanismos para monitorar o desempenho dos sistemas de IA, identificar erros e tomar medidas corretivas?</legend><br/>
        <label><input type="radio" name="q10" value="A"> A) Não</label>
        <label><input type="radio" name="q10" value="B"> B) Monitoramento básico</label>
        <label><input type="radio" name="q10" value="C"> C) Sim, monitoramento regular e relatórios</label>
        <label><input type="radio" name="q10" value="D"> D) Sim, monitoramento contínuo e processos de correção</label><br/>
    
        <legend>11. Existem canais para que os usuários e partes afetadas possam relatar problemas e obter reparação em caso de danos causados por sistemas de IA?</legend><br/>
        <label><input type="radio" name="q11" value="A"> A) Não</label>
        <label><input type="radio" name="q11" value="B"> B) Canais de comunicação gerais</label>
        <label><input type="radio" name="q11" value="C"> C) Sim, canais específicos, mas sem processos claros</label>
        <label><input type="radio" name="q11" value="D"> D) Sim, canais e processos bem definidos para reparação</label><br/>

        <!-- Botão de envio -->
        <button type="button" class="previous-btn">Anterior</button>
        <button type="button" id="submit-button">Avaliar Preparação</button>
       
    </section>  
</div>
</form>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../public/js/validar_perguntas_salva.js"></script>
<script src="../public/js/buttons_navegacao.js"></script>
</body>
</html>