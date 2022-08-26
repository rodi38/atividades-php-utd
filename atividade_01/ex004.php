<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleexs3.css">
</head>
<body>

    <h1>Calculando o triangulo</h1>
    <form action="#" method="POST">
        <?php
            for($i = 1; $i < 4; $i++){
                echo "<label for='n$i'>Digite o valor do lado numero $i do Triangulo </label>
                 <input type='number' name='n$i'> <br><br>";
            }
        ?>
        <button class="btn btn-success btn-lg"type="submit" name="submit">Calcular</button>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            unset($_POST['submit']);

            $lado1 = (int) $_POST['n1'];
            $lado2 = (int) $_POST['n2'];
            $lado3 = (int) $_POST['n3'];



            if($lado1+$lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 >$lado1){
                if($lado1 == $lado2 && $lado2 == $lado3){
                    echo "Triangulo equilátero";
                } else if($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
                    echo "Triangulo isósceles";
                } else {
                    echo "Triangulo escaleno";
                }
            } else {
                echo "O triangulo não existe";
            }
        }
    ?>
</body>
</html>