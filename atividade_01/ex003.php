<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleexs3.css">
</head>
<body>
    <div class="container ex03">
        <h1>Cadastro simples</h1>
        
        <form action="" method="POST" id="form03">
            
                
                <label for="fname">Nome Completo</label>
                <input type="text" name="fname" id="fname">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="tel">Telefone/Celular</label>
                <input type="text" name="tel" id="tel"><br><br>
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf">
                <label for="">Identidade</label>
                <input type="text" name="rg" id="rg">
                <label for="dtnasc">Data de nascimento</label>
                <input type="date" name="dtnasc" id="dtnasc"><br><br>

                <button class="btn btn-success btn-lg" type="submit" name="submit">Enviar</button>

        </form>

        <div class="resultado">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>Nome Completo</th>
                        <th>Email</th>
                        <th>Telefone/Cel</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Data de Nascimento</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php 
                            foreach($_POST as $key =>$cadaDado) {
                            echo "<td>$cadaDado</td>";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</body>
</html>