<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>

    <?php
    
    if (isset($_POST['AVALIAR'])) {
        
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $dataNascimento = isset($_POST['DATANASC']) ? $_POST['DATANASC'] : null;
        $altura = isset($_POST['altura']) ? (float) $_POST['altura'] : null;
        $peso = isset($_POST['peso']) ? (float) $_POST['peso'] : null;
        $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;

    
        if ($nome && $dataNascimento && $altura && $peso) {

            $imc = $peso / ($altura * $altura);



            if ($imc < 18.5) {
                $resultadoIMC = "Abaixo do peso";
            } else if ($imc >= 18.5 && $imc <= 24.9) {
                $resultadoIMC = "Peso normal";
            } else if ($imc >= 24.9 && $imc <= 29.9) {
                $resultadoIMC = "Obesidade I";
            } else {
                $resultadoIMC = "Obesidade II";
            }


           
            echo "<h3>Resultado da Avaliação de IMC</h3>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Data de Nascimento:</strong> $dataNascimento</p>";
            echo "<p><strong>Altura:</strong> $altura metros</p>";
            echo "<p><strong>Peso:</strong> $peso kg</p>";
            echo "<p><strong>Sexo:</strong> $sexo</p>";
            echo "<p><strong>IMC:</strong> " . number_format($imc, 2) . "</p>";
            echo "<p><strong>Resultado do IMC:</strong> $resultadoIMC</p>";
        } else {
            
            echo "<p>Por favor, preencha todos os campos obrigatórios!</p>";
        }
    } else {
      
        echo "<p>Formulário não enviado corretamente!</p>";
    }
    ?>
</body>

</html>