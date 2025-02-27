<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
<form action="ex1.php" method="get">
        <fieldset>
            <legend>Digite a sua nota:</legend>
        <label for="nota">Nota</label>
        <input type="text" name="nota" id="nota" placeholder="Nota do aluno" required>
        <br>

          <br>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    //Elabore um programa que irá receber a nota do aluno de 0 a 10, e exiba se o aluno está aprovado, reprovado ou de recuperação.

//- Nota < 6 reprovado
//- Nota entre 6 e 7 recuperação
//- Nota > 7 aprovado
     if (($_GET['nota']<6)){
      echo "Reprovado!";
        
    } 
    else if (($_GET['nota']==6)){
        echo "De recuperação!";
    }
    else if (($_GET['nota']>7 && ($_GET['nota']<=10))){
        echo "Aprovado!";
    }
    else{
        echo "Digite novamente!";
    }
    ?>
</body>
</html>