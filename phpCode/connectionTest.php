<?php
/**
 * Created by PhpStorm.
 * User: ericyu423
 * Date: 10/20/17
 * Time: 7:59 AM
 */


/*  this following code connects to the host
    if cloud host it might look lik heroku username password
*/

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "myDB";
$dbtable = "clients";

$success = false;



$isConnected = mysqli_connect($dbhost,$dbuser,$dbpassword);
$selected = mysqli_select_db($isConnected,$dbname);

if ($isConnected){

    echo "connected</br>";

    if ($selected){
        $success = true;
        echo "Selected</br>";
    }else {
        $sucess = false;
        echo "Selection Failed</br>";
        return;
    }

}else {
    echo "Connection failed</br>";
    $success = false;
    return;
}

if ($success) {
    $sql = "CREATE TABLE " . $dbname . $dbtable;
    // CREATE TABLE myDB.clients
    //"clients" is the name of our table

    //sql statement if written incorrectly does not show up
    $sql .= " (name VARCHAR(20), city VARCHAR(20))";

    if (mysqli_query($isConnected, $sql)){
        echo 'Create successfully</br>';
    } else {
        echo 'Creation Failed</br>';
    }

}


//local host look at MyDB.client structure
//name varchar(20) latin1_swdish_ci
//city varchar(20) latin1_swdish_ci



?>