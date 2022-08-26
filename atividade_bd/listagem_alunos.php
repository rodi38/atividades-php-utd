<?php  
  
    include_once './assets/script/conexao.php';
    include_once './assets/script/funcoes.php';
    
    

    $alunos = select("alunos", null, null, " ORDER BY id_aluno ASC");


?>

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
    <h1>Listagem de Alunos Cadastrados</h1>
    <div class="menu">
            <ul>
                <li><a href="cadastro_aluno.php">Cadastro de Alunos</a></li>
                <li><a href="cadastro_funcionario.php">Cadastro de Funcionarios</a></li>
                <li><a href="cadastro_livro.php">Cadastro de Livros</a></li>
                <li><a href="biblioteca.php">Biblioteca</a></li>
                <li><a href="listagem_alunos.php">Alunos</a></li>
                <li><a href="listagem_funcionarios.php">Funcionarios</a></li>
            </ul>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th> ID </th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alunos as $aluno):?>
                    <tr>
                        <td><?=$aluno['id_aluno'];?></td>
                        <td><?=$aluno['aluno_nome'];?></td>
                        <td><?=$aluno['aluno_email'];?></td>
                        <td><?=$aluno['aluno_dtnasc'];?></td>
                        <td><?=$aluno['aluno_cpf'];?></td>
                        <td><?=$aluno['aluno_tel'];?></td>
                        <td><?=$aluno['aluno_criadoem'];?></td>
                        <td>
                            <a href="edit_alunos.php"><iconify-icon icon="fa6-solid:pen-to-square"></iconify-icon></a>
                            
                            <a href="delete_aluno.php"><iconify-icon icon="akar-icons:trash-can"></iconify-icon></a>
                           </form>
                        </td>
                        
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>

        
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
</body>
</html>