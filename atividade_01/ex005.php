<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleexs3.css">
</head>
<body>

    
    <div class="container">
    <h1>Login e Senha</h1>
        <form action="#" method="POST" id="form">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="senha">Senha</label>
            <input type="password" name="senha">

            <button class="btn btn-success"type="submit" name="submit">Entrar</button>
        </form>
        <div class="resultado">
            <?php 

                if(isset($_POST['submit'])){
                    unset($_POST['submit']);


                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    if($email != "admin@email.com"){
                        echo "<span>Você errou seu email</span> <br>";
                        if($senha != 123456){
                            echo "<span>Você errou sua senha</span><br>";
                        }
                    } else if($senha != 123456){
                        echo "<spanVocê errou sua senha</span><br>";
                        if($email != "admin@email.com"){
                            echo "<span>Você errou seu email</span><br>";
                        }
                    }
                }

            ?>
        </div>
        
    </div>
</body>
</html>