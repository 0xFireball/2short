<?php
include('functions.php');
session_start();
if (!isset($_SESSION['auth']))
{
    header('Location: index.php');
    die("ERROR: Not logged in.");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>2Short - 0xFireball Edition - Analytics Reporting</title>
    </head>
    <body>
        
    </body>
</html>