<?php
$value = "World";

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');

$databaseTestOrg = ($db->query('SELECT * FROM dockerSample'));

$databaseTest = $databaseTestOrg->fetchAll(PDO::FETCH_OBJ);

/*$link = mysqli_connect("database", "myuser", "secret", "mydb");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;*/



?>

<html>
<body>
<h1>Hello, <?= $value ?>!</h1>

<?php foreach($databaseTest as $row): ?>
    <p>Hello, <?= $row->name ?></p>
<?php endforeach; ?>
</body>
</html>

<?php
phpinfo();
?>
