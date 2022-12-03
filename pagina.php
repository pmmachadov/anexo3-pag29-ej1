<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("funlib.php");

    mostrarMatriz($matriz);

    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo3-pag29-ej1" . "</td>";
    echo "</tr>";
    echo "<td> " . 'mostrarMatriz($matriz);' . "</td>";
    echo "<td> " . "0	1
1	2
2	3
3	4
4	5
5	6
6	7
7	8
8	9
9	10
" . "</td>";
    echo "</tr>";
    echo "</table>";

    ?>
</body>

</html>