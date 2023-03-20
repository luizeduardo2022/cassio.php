<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Parque</title>
  </head>
        <body>
            <h1> Recebidos PHP </h1>
            <p><b> Login recebido foi: </b><?php echo $_GET["login"]; ?> </p>
            <p><b> Email recebido foi: </b><?php echo $_GET["Email"]; ?> </p>
            <p><b> CPF recebido foi: </b><?php echo $_GET["CPF"]; ?> </p>
            <p><b> CEP recebido foi: </b><?php echo $_GET["CEP"]; ?> </p>
            <p><b> Endereço recebido foi: </b><?php echo $_GET["Endereço"]; ?> </p>
            <p><b> Cidade recebido foi: </b><?php echo $_GET["Cidade"]; ?> </p>
            <p><b> idade recebido foi: </b><?php echo $_GET["idade"]; ?> </p>
            <p><b> Cursos recebido foi: </b><?php echo $_GET["Cursos"]; ?> </p>
            <br/>
            <a href="index.php">Voltar: principal</a>
        </body>
</html>