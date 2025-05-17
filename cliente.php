<?php

include 'conexao.php';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $UsuarioCLI = $_POST['usuario'];
    $SenhaCLI = $_POST['senha'];
    $NomeCLI = $_POST['nome'];
    $CpfCLI = $_POST['cpf'];
    $TelefoneCLI = $_POST['telefone'];

    $execute_sql = "call cad_login(?, ?, ?, ?, ?)";

    if ($stmt = $conexao->prepare($execute_sql)){
        $stmt->bind_param("sssss", $UsuarioCLI, $SenhaCLI, 
                            $NomeCLI, $CpfCLI, $TelefoneCLI);
        $stmt->execute();
        echo "cadastrado com sucesso!";
    } else {
        echo "falha ao cadastrar";
    }
    $stmt->close();
}
?>