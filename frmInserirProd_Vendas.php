<?php 

    require_once('conexao.php');

    $id = trim($_REQUEST['id']);

    if(!empty($id)){

        $con = open_database();
        select_database();
        $sqlprod = "SELECT * FROM produtos";
        $sqlvenda = "SELECT * FROM vendas WHERE venda_id=" . $id;
        $rsprod = mysqli_query($con, $sqlprod) or die(mysqli_error($con));
        $rsvenda = mysqli_query($con, $sqlvenda) or die(mysqli_error($con));
        close_database($con);
        
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Adicionar produtos na Venda</title>
    </head>

    <body class="container">
        
        
        
    </body>
</html>