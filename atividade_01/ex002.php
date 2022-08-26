<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 02</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora simples com PHP</h1>
        <form action="" id="form" method="POST">
            <input type="text" name="valor" id="valor">
            <select name="operacao" id="operacao">
                <option value="soma">Somar</option>
                <option value="sub">Subtrair</option>
                <option value="multi">Multiplicar</option>
                <option value="divi">Dividir</option>
            </select>
            <label for="por">Por</label>
            <input type="number" name="por" id="por">

            <button type="submit" name="submit"class="btn btn-success">Calcular</button>

            
        </form>

        <div class="resultado">
                <?php 
                
                    if(isset($_POST['submit'])){
                        unset($_POST['submit']);

                        $valor = $_POST['valor'];
                        $operacao = $_POST['operacao'];
                        $por = $_POST['por'];

                        echo "<label for='resultado'> O resultado da operação de $operacao foi: </label>";

                        if($operacao == "soma") {
                            $operacao = $valor + $por;
                        }else if ($operacao == "sub") {
                            $operacao = $valor - $por;
                        } else if($operacao == "multi") {
                            $operacao = $valor * $por;
                        } else if($operacao == "divi"){
                            $operacao = $valor / $por;
                        }
                        
                        echo "<input name='resultado' id='resultado' value='$operacao' disabled>";

                    }
                    
                ?>

            </div>
    </div>
</body>
</html>