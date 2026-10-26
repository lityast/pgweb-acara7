<!DOCTYPE html>
<html>
    <head>
        <title>Tabel Penduduk PHP</title>
    </head>
    <body>
        <?php
        $data_penduduk = array(
            array("kecamatan" => "Moyudan", "luas" => 27.62, "jumlah_penduduk" => 31497),
            array("kecamatan" => "Minggir", "luas" => 27.27, "jumlah_penduduk" => 29886),
            array("kecamatan" => "Seyegan", "luas" => 26.63, "jumlah_penduduk" => 47129),
            array("kecamatan" => "Godean", "luas" => 26.84, "jumlah_penduduk" => 72028),
            array("kecamatan" => "Gamping", "luas" => 29.25, "jumlah_penduduk" => 108675)
        );
        ?>

        <table border="1" cellpadding="5" cellspacing="2">
            <tr>
                <th>kecamatan</th>
                <th>luas</th>
                <th>jumlah_penduduk</th>
            </tr>
            
            <?php
            foreach ($data_penduduk as $row) {
                echo "<tr>";
                echo "<td>" . $row["kecamatan"] . "</td>";
                echo "<td>" . $row["luas"] . "</td>";
                echo "<td>" . $row["jumlah_penduduk"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>