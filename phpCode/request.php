<?php
/**
 * Created by PhpStorm.
 * User: ericyu423
 * Date: 10/21/17
 * Time: 10:11 AM
 */

$x = $_REQUEST["post1"]; //meaning work both with GET (not secure) and POST (secure)
$y = $_REQUEST["post2"];
echo $x."</br>";
echo $y;
//so you can http://localhost/request.php?post1=myrequest and pass in request
//  http://localhost/request.php?post1=myrequest1&post2=myrequest2

?>



<html>
<body>

<form action="request.php" method="post">
    name: <input  type="text" name="post1"><br>
    password: <input type="text" name="post2"><br> <!--grab post2 sent to "post2"-->
    <input type="submit">
</form>

</body>
</html>




