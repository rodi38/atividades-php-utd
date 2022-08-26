

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

    <h1>Cadastro de Livros</h1>
    <div class="menu">
            <ul>
                <li><a href="biblioteca.php">Biblioteca</a></li>
                <li><a href="listagem_alunos.php">Alunos</a></li>
                <li><a href="listagem_funcionarios.php">Funcionarios</a></li>
            </ul>
    </div>
    <div class="container">
        <form action="insert_livro.php" method="POST" class="form">

        <div class="form-group">
                <label for="livro_nome">Nome do Livro</label>
                <input type="text" name="livro_nome" id="livronome">
                <label for="livro_autor" id="valorlabel">Autor</label>
                <input type="text" name="livro_autor" id="livro_autor">
                <label for="livro_codigo">Codigo</label>
                <input type="text" name="livro_codigo" id="livrocodigo">
                
                
               
                
            </div>
            
                
            
            <div class="form-group">
                <label for="livro_estoque">Estoque</label>
                <input type="number" name="livro_estoque" id="livro_dtnasc">

                <label for="livro_valor" id="valorlabel">Valor</label>
                <input type="text" name="livro_valor" id="livro_valor">
                

                <!-- <label for="livro_rg">RG</label>
                <input type="text" name="livro_rg" id="livro_rg"> -->

                
                
            </div>

            <button type="submit" name="submit" class="btn btn-success" >Cadastrar</button>

           

            
            
        </form>

        <!-- <form action="insert_categoria">
            <label for="categoria_nome">Categoria</label>
            <input type="text" class="form-group">
        </form> -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    

</body>
</html>