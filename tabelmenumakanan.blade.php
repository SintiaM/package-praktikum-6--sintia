<?php
$arrMakanan = [
    "Nasi & ikan Nila Bakar",
    "Nasi & Ikan Lele Bakar",
    "Nasi & Ayam Goreng",
    "Nasi & Bebek Goreng"
];
$arrMinuman = [
    "Es Teh",
    "Es Jeruk",
    "Jeruk Panas",
    "Teh Panas"
];


?>

<!DOCTYPE html>

<head>
    <title>Menu Makanan & minuman</title>
</head>

<body>
    <form method="GET">
        <table border="1px">
            <thead>
                <tr>
                    <th colspan="2">MENU MAKANAN</th>
                    <th colspan="2">MENU MINUMAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $arrLength = count($arrMakanan);
                for ($i = 0; $i < $arrLength; $i++) {
                    echo "<tr>";
                    echo '<td>' . ($i + 1) . '. ' . $arrMakanan[$i] . '</td>';
                    echo ' <td><input type="checkbox" name="makanan[]" id="makanan" value =' . ($i) . '></td>';
                    echo '<td>' . ($i + 1) . '. ' . $arrMinuman[$i] . '</td>';
                    echo ' <td><input type="checkbox" name="minuman[]" id="minuman" value =' . $i . '></td>';
                    echo "</tr>";
                    echo '<br>';
                }
                ?>
            </tbody>
        </table><br>
        <input type="submit" value="OK" name="submit">
    </form><br>
<?php
        if (isset($_POST['submit'])) {

    foreach ($_POST['makanan'] as $selected) {
        echo $arrMakanan[$selected] . "<br>";
    }
    foreach ($_POST['minuman'] as $selected) {
        echo $arrMinuman[$selected] . "<br>";
        }
    }
?>
</body>

</html>