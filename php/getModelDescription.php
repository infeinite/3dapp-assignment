<?php
$db = new SQLite3('models.db');

$model = $_GET['model'];

$query = $db->prepare('SELECT description FROM models WHERE name = :model');
$query->bindValue(':model', $model, SQLITE3_TEXT);

$result = $query->execute();
$row = $result->fetchArray(SQLITE3_ASSOC);

echo json_encode($row);
?>
