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

    <h1>Cadastro de Funcionário</h1>
    <div class="menu">
            <ul>
                <li><a href="biblioteca.php">Biblioteca</a></li>
                <li><a href="listagem_alunos.php">Alunos</a></li>
                <li><a href="listagem_funcionarios.php">Funcionarios</a></li>
            </ul>
    </div>
    <div class="container">
        <form action="insert_funcionario.php" method="POST">

            <div class="form-group">
                <label for="fname">Nome Completo</label>
                <input type="text" name="funcionario_nome" id="fname">
                <label for="funcionario_email">Email</label>
                <input type="email" name="funcionario_email" id="email">
                <label for="funcionario_dtNasc">Data de Nascimento</label>
                <input type="date" name="funcionario_dtnasc" id="funcionario_dtnasc">
                
               
                
            </div>
            
                
            
            <div class="form-group">
                <label for="funcionario_cpf" id="cpflabel">CPF</label>
                <input type="text" name="funcionario_cpf" id="funcionario_cpf">
                <label for="funcionario_tel">Telefone</label>
                <input type="tel" name="funcionario_tel" id="funcionario_tel">
                <!-- <label for="funcionario_rg">RG</label>
                <input type="text" name="funcionario_rg" id="funcionario_rg"> -->

                
                
            </div>

            <button type="submit" name="submit" class="btn btn-success" >Cadastrar</button>

           

            
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>