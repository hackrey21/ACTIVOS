<?php

include("connection/ServerConfiguration.php");
include("connection/Dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty(file_get_contents("php://input"))) {
    $jsonData = json_decode(file_get_contents("php://input"), true);

    $foundCo = false;

    foreach ($jsonData as $row) {
        if (is_numeric($row[0])) {
            $a = $row[0];
            $b = $row[1];
            $c = $row[2];
            $d = $row[3];
            $f = $row[4];
            $g = $row[5];
            $h = $row[6];
            $i = $row[7];
            $j = $row[8];
            $k = $row[9];
            $l = $row[10];
            $m = $row[11];
            $n = $row[12];
            $o = $row[13];
            $p = $row[14];
            $q = $row[15];
            $r = $row[16];
            $s = $row[17];
            $t = $row[18];
            $y = $row[19];
            $w = $row[20];

            $query = "INSERT INTO excel_info (Co, Num_Act, Nom_Act, Mer, adqui_date, 
            Cost, Val_neto_libros, Moneda, Area_esp, Ubicacion, Existe_A, A_etiquetado,
             Foto, Modelo, Marca, No_serie, Pedimento, E_actual, N_adiction, Exp_apoyo, Auditor) 
             VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$o', '$p', '$q', '$r', '$s', '$t', '$y', '$w')";

            if ($pdo->query($query) === TRUE) {
                echo "Los datos se han guardado correctamente en la base de datos.";
            } else {
                echo "Error al guardar los datos en la base de datos: " . $pdo->error;
            }
        } else {
            echo "La fila no contiene un número en la primera posición. Ignorando...";
        }
    }
} else {
    echo "No se han recibido datos.";
}

