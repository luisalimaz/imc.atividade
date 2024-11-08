

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>formulario de cadastro</title>
</head>
<body>
    
<form action="processa_script.php" method="post">

    <label for="nome"> Nome completo</label><br>
    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" maxlength="100" required><br>

   <label for="datan">Data nascimento</label><br>
    <input type="date" name="DATANASC" id="DATANASC"><br>

    <label for="altura">Altura</label><br>
    <input type="number" step="0.10"  name="altura" placeholder="altura"><br>

    <label for="peso">Peso</label><br>
    <input type="number" step="0.10"  name="peso" placeholder="peso"><br>

    <label for="sexo">Sexo:</label><br>
<input type="radio" name="sexo" value="Masculino" id="masculino"> Masculino
<input type="radio" name="sexo" value="Feminino" id="feminino"> feminino

  

    <input type="submit" name="AVALIAR" value="AVALIAR" id="AVALIAR"><br>
    <input type="reset" value="Limpar" id="AVALIAR"><br>

</form>

</body>
</html>

