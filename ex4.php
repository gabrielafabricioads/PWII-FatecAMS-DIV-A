<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
<form action="ex4.php" method="get">
        <fieldset>
            <legend>Digite um mês para saber se está no primeiro o no segundo semestre, digite a primeira letra maiúscula:</legend>
        <label for="mes">Mês</label>
        <input type="text" name="mes" id="mes" placeholder="mês" required>
        <br>

          <br>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    //Elabore um programa que irá receber o nome de um mês, e exiba se o mês é do primeiro semestre ou segundo semestre.
     if (($_GET['mes']== "Janeiro") || ($_GET['mes'] =="Fevereiro") || ($_GET['mes'] =="Março") || ($_GET['mes'] == "Abril") || ($_GET['mes']== "Maio") ||
     ($_GET['mes'] == "Junho")){
      echo "Primeiro semestre!";
        
    } 
    else if (($_GET['mes']== "Julho") || ($_GET['mes'] == "Agosto") || ($_GET['mes'] == "Setembro") || ($_GET['mes'] == "Outubro") || ($_GET['mes']== "Novembro") ||
         ($_GET['mes'] == "Dezembro")){
        echo "Segundo semestre!";
    }

    else{
        echo "Digite novamente!";
    }
    ?>
    


</body>
</html>