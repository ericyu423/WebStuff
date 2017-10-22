

# Connecting php to database


* connect to host

    $x = mysqli_connect("localhost","root",""); //return type myqli  

* connect to one database in our host

    $y = mysqli_select_db($x,"MyTwitter");  //return type bool
   
*  execute SQL statements

      $mysql_statement = "CREATE DATABASE ". $dbname// CREATE DATABASE MyTwistter;
  

#Using phpStorm editor

after install XAMPP open folder path with phpStrom
add an new php file now you can play with it.

localhost to see output


<p align="center">
  <img src="https://github.com/ericyu423/WebStuff/blob/master/image/image1.png" width="500"/>
</p>
