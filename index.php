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
    return    "dbname=". $_SERVER["db_name"].
                " host=" . $_SERVER["host"] . 
                " port=" . $_SERVER["port"] . 
                " user=" . $_SERVER["user"] . 
                " password=" . $_SERVER["password"] . 
                " sslmode=require";
    }
    // Establish db connection
    echo pg_connection_string();
    $db = pg_connect(pg_connection_string());
    if (!$db) {
        echo "Database connection error.";
        exit; }

    $result = pg_query($db, "SELECT * FROM teammate");

 

    if (!empty($_POST)) {
        echo "New User added, please refresh the page";
        pg_query($db, "INSERT INTO teammate (name, office, email) VALUES ('$_POST[name]', '$_POST[office]', '$_POST[email]')");
    }



    while ($row = pg_fetch_row($result)) {
        echo "<b>Name</b>: $row[0], ";
        echo "<b>Office</b>: $row[1], ";
        echo "<b>Email</b>: $row[2] ";
        echo "<br>\n";
    }

    echo "<a href='new_record.php'>Add another record.</a>";

?>


</body>
</html>
