<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <th>TABEL</th>
        <?php 
        $kolom = 1;
        while ($kolom <= 10) {
            echo "<th>$kolom</th> "; 
            $kolom++;
        }
        $baris = 1;
    while ($baris <= 10) {
        echo "<tr><th>$baris</th>";
        $kolom = 1;
        while ($kolom <= 10) {
            $hasil = $baris * $kolom;
            echo "<td>$hasil</td>";
            $kolom++;
        }
        echo "</tr>";
        $baris++;
    }
    ?>
    </table>
</body>
</html>