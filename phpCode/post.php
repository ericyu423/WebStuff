<?php
/**
 * Created by PhpStorm.
 * User: ericyu423
 * Date: 10/21/17
 * Time: 10:11 AM
 */

$x = $_POST["post1"];
$y = $_POST["post2"];
echo $x."</br>";
echo $y;



?>



<style>
    input[type='text'] { font-size: 24px; }
</style

<html>
<body>

<form action="post.php" method="post">
    name: <input  type="text" name="post1"><br>
    password: <input type="text" name="post2"><br> <!--grab post2 sent to "post2"-->
    <input type="submit">
</form>

</body>
</html>




