<?php
    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_GET["x"], false);

    $conn = new mysqli("localhost", "root", "", "registration");
    $result = $conn->query("SELECT subject_name FROM ".$obj->table." LIMIT ".$obj->limit);
    $outp = array();
    $outp = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($outp);
?>