<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>lab4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th>Film Name</th>
        <th>Year</th>
        <th>Producer</th>
    </tr>

    <?php
if (($file = fopen("csvImp.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($file)) !== FALSE) {
        echo "<tr>";
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
            echo "<td>" . $data[$c]. "</td>";
        }
        echo "</tr>";
    }
    fclose($file);
}
?>

</table>
</body>
</html>