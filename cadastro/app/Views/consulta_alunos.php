<!-- consulta_alunos.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Alunos</title>
</head>
<body>
    <h2>Alunos cadastrados</h2>
    <ul>
        <?php foreach ($alunos as $aluno): ?>
            <li><?= esc($aluno['nome']) ?>, <?= esc($aluno['nascimento']) ?>, <?= esc($aluno['endereco']) ?>, <?= esc($aluno['cidade']) ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="http://localhost/cadastro/public/">
        <button type="button">Pagina de cadastro</button>
</body>
</html>
