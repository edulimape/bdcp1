<?php

include 'conexao.php';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $TipoLAV = $_POST['tipolv'];
    $DataLAV = $_POST['data'];
    $CarroLAV = $_POST['carro'];
    $HoraLAV = $_POST['hora'];
    $CpfCLI = $_POST['cpf'];

    $execute_sql = "call cad_lavagem(?, ?, ?, ?, ?)";

    if ($stmt = $conexao->prepare($execute_sql)){
        $stmt->bind_param("sssss", $DataLAV, $CarroLAV, 
                                $HoraLAV, $TipoLAV, $CpfCLI);
                                echo "Valor de tipolv: [" . $TipoLAV . "]";
        $stmt->execute();
        echo "cadastrado com sucesso!";
    } else {
        echo "falha ao cadastrar";
    }
    $stmt->close();
}
?>