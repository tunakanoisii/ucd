<table border="1">
<tr><th>ID</th><th>場所</th><th>時間</th></tr>
<?php
  $pdo = new PDO("mysql:dbname=infos", "root");
  $st = $pdo->query("SELECT * FROM infos");
  while ($row = $st->fetch()) {
    $id = htmlspecialchars($row['ID']);
    $place = htmlspecialchars($row['place']);
    $day = htmlspecialchars($row['day']);
    echo "<tr><td>$id</td><td>$place</td><td>$day</td></tr>";
  }
?>
</table>