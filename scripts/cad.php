<?php
session_start();
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conn.php';
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $genero = $_POST['genero'];
    $super_art = $_POST['super_art'];
    $arma = $_POST['arma'];
    $arma2 = $_POST['arma2'];
    $charm_id = $_POST['charm'];

    $sql = "INSERT INTO characters (char_name, char_esp, char_gend, supart_id, weapon1_id, weapon2_id, charm_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("sssiiii", $nome, $especie, $genero, $super_art, $arma, $arma2, $charm_id);
    $stmt -> execute();

    if ($stmt -> affected_rows > 0) {
        echo "foi";
        header ("Location: ../index.php");
        $stmt -> close();
        exit();
    } else {
        echo "Erro ao cadastrar personagem: " . $stmt -> error;
    }
}
?>