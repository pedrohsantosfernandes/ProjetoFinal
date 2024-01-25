<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar alunos</title>


    
</head>
<body>
    <h1>Pagina de cadastro de alunos </h1>
    <form name="cadastro" action="aluno" method="post">
        Nome: <input type= "text" name="nome" />
        Nascimento <input type="date" name="nascimento" />
        Endereco <input type="text" name="endereco" />
        Cidade <input type="text" name="cidade" />

        <input type="submit" name="botao" value="Enviar"/>
        <input type="reset" name="botao" value="Limpar"/>

        <a href="http://localhost/cadastro/public/consulta-alunos">
        <button type="button">Consultar Alunos</button>
    </a>

    </form>
    
</body>
</html>