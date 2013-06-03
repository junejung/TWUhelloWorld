<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Hello World!</title> 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    </head>
<body>
<?php
    function pg_connection_string() {
    return    "dbname=d8qeg4q6li1ina host=ec2-54-227-252-82.compute-1.amazonaws.com port=5432 user=mcrzmgmejvucwy password=q0rdRrH5_9zVAzttDbNRcK4Sqr sslmode=require";
    }
    // Establish db connection
    $db = pg_connect(pg_connection_string());
    if (!$db) {
        echo "Database connection error.";
        exit; }

    $result = pg_query($db, "SELECT * FROM Teammate");
?>

<?php 
echo "Hello World<br><br>";

$devNames = array("Aubrey", "June", "PamO");

foreach ($devNames as $name)
{
	echo $name . "is on this project.<br>" ;
}

for ($i=0; $i<=5; $i++)
  {
  echo "A number: " . $i . "<br>";
  }
?>


</body>
</html>
