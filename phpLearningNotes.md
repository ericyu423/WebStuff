#Using phpStorm editor

after install XAMPP open folder path with phpStrom
add an new php file now you can play with it.

localhost to see output


<p align="center">
  <img src="https://github.com/ericyu423/WebStuff/blob/master/image/image1.png" width="500"/>
</p>

# Connecting php to database


* connect to host

    $x = mysqli_connect("localhost","root",""); //host,username,password -> return a type myqli  

* connect to one database in our host

    $y = mysqli_select_db($x,"MyTwitter");  //myqlie,database Name    -> return a boolean
    echo $y ? 'connect to MyTwitter DB' : 'You fucked up';  //show message if it is connected
    
    
rewrite them (xampp->phpmyadmin->config.inc.php contains password which you can change)

     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = "";
     $dbname = "MyTwitter";
     $x = mysqli_connect($dbhost,$dbuser,$dbpass);
     $y = mysqli_select_db($x,$dbname);
     
     
execute SQL statements

      $mysql_statement = "CREATE DATABASE ". $dbname// CREATE DATABASE MyTwistter;
      mysqli_query($x,$mysql_statement)//$x is type mysqli, &sqli contain the exact sql statement that you woud wirte on sql

