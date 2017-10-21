<?php
/**
 * Created by PhpStorm.
 * User: ericyu423
 * Date: 10/20/17
 * Time: 7:59 AM
 */


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = "";
$dbname = "myDB";
$dbtable = "myDBclients";
$dbtable = $_GET["tableName"];
//http://localhost/connectionTest.php?tableName=myDBclients
//tableName in this cause is a variable
//like myFunc(something input: String)
//myFunc(something: "getSomething")

//http://localhost/connectionTest.php?password=123456
//123456
//not secure



$success = false;

$connected = mysqli_connect($dbhost, $dbuser, $dbpass);
$selected = mysqli_select_db($connected,$dbname);

if ($connected){
    echo 'Connected</br>';

    if ($selected){
        echo 'Selected</br>';
        $success = true;
    } else {
        echo 'Selection Failed</br>';
        return;
    }
} else {
    echo 'Connection Failed</br>';
    $success = false;
    return;
}

if ($success) {

    $sql = "SELECT name, city FROM ".$dbname.".".$dbtable;

    $query = mysqli_query($connected, $sql);

    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
        $name = $row["name"];
        $city = $row["city"];
        echo json_encode($row);
    }



}








