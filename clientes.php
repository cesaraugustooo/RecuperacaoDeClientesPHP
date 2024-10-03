<?php

$hostname = 'localhost';
$database = 'clientes';
$user = 'root';
$password = '';

$mysqli = new mysqli($hostname,$user,$password,$database);
if ($mysqli -> connect_errno){
    echo "Conexão não pode ser concluida:(".$mysqli -> connect_errno .") ". $mysqli -> connect_error;
}


$consulta = "SELECT * FROM clientes";
$con = $mysqli -> query($consulta) or die($mysqli->connect_error)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .titulo{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 140px;
        }
        .titulo div{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30%;
            height: 100%;
        }
        body{
            background-color: beige;

        }
        .clientes {
            position: relative;
            left: 50px;
            margin: auto;
            width: 830px;
            height: auto;
            display: flex; 
            flex-wrap: wrap;
        }
        .clientes div{
            margin: 20px;
            height: 200px;
            width: 230px;
            background-color: #98FF98;
            border-radius: 15px;
            box-shadow: 5px 5px 5px  black;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s ease;
        }
        .clientes div p{
            margin: 25px 5px 5px 5px;
        }
        .clientes div:hover{
            background-color: #228B22;
        }

    </style>
</head>
<body>
    
   <section class="titulo">
        <div>
            <h1 style="font-size: xx-large;font-family: 'Courier New', Courier, monospace;">Clientes Cadastrados</h1>
        </div>
   </section>
   <section class="clientes">
    <?php
    while($linha = $con->fetch_array()){
        echo "<div>";
        echo "<h3>" . $linha["nome_cliente"] . "</h3>";
        echo "<p>" . $linha["email_cliente"] . "</p>";
        echo "<p>" . $linha["telefone_cliente"] . "</p>";
        echo "</div>";
    }
    ?>
</section>


</body>
</html>