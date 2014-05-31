<?php
      include_once __DIR__ . '/../src/DB.php';
      $db = new DB();
?>
<!doctype html>
<html lang="de_DE">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <td>Vorname</td>
        <td>Nachname</td>
        <td>Strasse</td>
        <td>PLZ</td>
        <td>Ort</td>
        </thead>
        <tbody>
            <?php foreach($db->executeQuery("SELECT * FROM mitarbeiter") as $id => $mitarbeiter): ?>
                <tr>
                    <td><?php echo utf8_decode($mitarbeiter['VORNAME']); ?></td>
                    <td><?php echo utf8_decode($mitarbeiter['NACHNAME']); ?></td>
                    <td><?php echo utf8_decode($mitarbeiter['STRASSE']); ?></td>
                    <td><?php echo utf8_decode($mitarbeiter['PLZ']); ?></td>
                    <td><?php echo utf8_decode($mitarbeiter['ORT']); ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>