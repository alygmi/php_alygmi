<?php
$jml = $_GET['jml'];

for ($a = $jml; $a > 0; $a--) {
    echo "<table border=1>\n";
    $angka = array();
    echo "<tr>\n";
        for ($b = $a; $b > 0; $b--) {
            array_push($angka, $b);
        }

    $total = array_sum($angka);
    echo "<th>total: $total \n<br></th>";

    foreach ($angka as $b) {
        echo "<td>$b</td> ";

        echo "</tr>\n";
    }

    echo "\n";
    echo "</table>";
}