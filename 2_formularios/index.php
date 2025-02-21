<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body> 
    <form action="index.php" method="get">
        <fieldset>
            <legend>Informações do personagem</legend>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do personagem" required>
        <br>
        <label for="poder">Poder:</label>
        <input type="text" name="poder" id="poder" placeholder="poder do personagem" required>
          <br>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    //isset is= está set= definida, a váriavel está definida
    if (isset ($_GET['nome'])){
        if(empty($_GET['nome'])){
            echo 'O nome é obrigatório!';
        }
        
    }
    else {
        echo $_GET ['nome'];
    }
    echo $_GET ['nome'];

    if (isset ($_GET['poder'])){
        if(empty($_GET['poder'])){
            echo 'O poder é obrigatório!';
        }
        
    }
    else {
        echo $_GET ['poder'];
    }
    echo $_GET ['poder'];
    ?>
</body>
</html>