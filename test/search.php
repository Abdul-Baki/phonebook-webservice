<?php
$username = update1;
$password = update2;

$a = $_GET["surname"];

header('Content-Type: application/json');

//create the connection to the database
try
{
  $conn = new PDO ("mysql:host=localhost;dbname=phonebook","$username","$password");
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#  echo "Connected successfully";
}
catch(PDOException $e)
{
#  echo "Connection failed: " . $e->getMessage();
}


if($a != "")
{
        $results = $conn->query("select * from listings where surname='$a'");
        //pass the information from the $results object into another variable that can normalise it into a proper array using fetchAll()
        $arr = $results->fetchAll();
		echo json_encode($arr, 512);
}
?>

