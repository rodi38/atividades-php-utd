

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <h1>Cadastro de Aluno</h1>
    <div class="menu">
            <ul>
                <li><a href="biblioteca.php">Biblioteca</a></li>
                <li><a href="listagem_alunos.php">Alunos</a></li>
                <li><a href="listagem_funcionarios.php">Funcionarios</a></li>
            </ul>
    </div>
    <div class="container">
        <form action="insert_aluno.php" method="POST">

            <div class="form-group">
                <label for="aluno_nome">Nome Completo</label>
                <input type="text" name="aluno_nome" id="fname">
                <label for="aluno_email">Email</label>
                <input type="email" name="aluno_email" id="email">
                <label for="aluno_dtNasc">Data de Nascimento</label>
                <input type="date" name="aluno_dtnasc" id="aluno_dtnasc">
                
               
                
            </div>
            
                
            
            <div class="form-group">
                <label for="aluno_cpf" id="cpflabel">CPF</label>
                <input type="text" name="aluno_cpf" id="aluno_cpf">
                <label for="aluno_tel">Telefone</label>
                <input type="tel" name="aluno_tel" id="aluno_tel">
                <!-- <label for="aluno_rg">RG</label>
                <input type="text" name="aluno_rg" id="aluno_rg"> -->

                
                
            </div>

            <button type="submit" name="submit" class="btn btn-success" >Cadastrar</button>

           

            
            
        </form>
    </div>
    <span id="funcionario">É um Funcionario? <a href="./cadastro_funcionario.php">Cadastre aqui!</a></span>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    

</body>
</html>