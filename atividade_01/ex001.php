<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="header">
        <h1>Media e Soma dos Numeros</h1>
    </div>
    <form action="#" method="POST" id="form">
        <?php
        $media;
        $soma;
        for ($i = 1; $i < 11; ++$i) {
        
            echo "<label for='n$i' id='label$i'>Digite o {$i}º valor</label>";
            echo "<input type='text' id='n$i' name='n$i' />";


            if ($i % 2 == 0) {
                echo "<br>";
            }
        }
        ?>

        <button  class="btn btn-success"type="submit" name="submit" value="Enviar">Enviar</button> <br>

        <?php 
            
            if(isset($_POST['submit'])){
                unset($_POST['submit']);
                $soma = 0;
                

                for($i = 1; $i < 11; $i++){
                    $numeroAtual = (int) $_POST["n$i"];
                    $soma = $soma + $numeroAtual;


                    
                }

                $media = $soma/10;
                echo "<label for='soma'>Soma</label>";
                echo "<input type='text' id='soma' name='soma' value='$soma'>";
                echo "<label for='media'>Media</label>";
                echo "<input type='text' id='media' name='media' value='$media'>";

            }
        ?>
    
        
    </form>
    <div class="resultado">
    
    </div>
   
</body>

</html>