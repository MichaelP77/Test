<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
       
<?php
$tab1 = array("France" => array("Paris", "Lyon", "Marseille", "Nantes", "Lille"),
    "Allemagne" => array("Berlin", "Hambourg", "Hanovre", "Munich", "Cologne"),
    "Espagne" => array("Madrid", "Bilbao", "Grenade", "Barcelone", "Séville")
);
?>

<table border="1">
        <tr>
            <th>Pays</th>
            <th>Villes</th>
        </tr>

        <?php foreach ($tab1 as $pays => $villes) : ?>
            <tr>
                <td><?php echo $pays; ?></td>
                <td>
                        <?php foreach ($villes as $villes) : ?>
                            <?php echo $villes; ?>
                        <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>