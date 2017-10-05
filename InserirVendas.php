<?php
    require_once('conexao.php'); 

    $cliente  = trim($_POST['slcCliente']);
    $data = trim($_POST['txtData']); 
    
    if(!empty($cliente) && !empty($data) ){
      
        $con = open_database(); 
        select_database();   
        $sql = "INSERT INTO vendas (cli_id, data) VALUES  ('$cliente', '$data');";
        $x = mysqli_query($con, "SELECT * FROM vendas WHERE cli_id = '" . $cliente . "' AND data = '" . $data ."';");
        $ins = mysqli_query($con , $sql) or dye(mysqli_error($con)); 
        $row = mysqli_fetch_assoc($x);
        close_database($con); 

        $rx = $row['venda_id'];
      
    }
    header("location: frmInserirProd_Vendas.php?id=$rx")
?>