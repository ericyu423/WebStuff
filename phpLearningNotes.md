

# Connecting php to database


* connect to host

    $x = mysqli_connect("localhost","root",""); //return type myqli  

* connect to one database in our host

    $y = mysqli_select_db($x,"MyTwitter");  //return type bool
   
*  execute SQL statements

      $mysql_statement = "CREATE DATABASE ". $dbname// CREATE DATABASE MyTwistter;
      
      $mysql_statement = "CREATE TABLE " . $dbname . ".".$dbtablename;  //CREATE TABLE
      $mysql_statement .= " (name VARCHAR(20), city VARCHAR(20)";
      
      $mysql_statement = "SELECT name, city FROM".$dbname.".".$dbtablename;
      
      $mysql_statement = "INSERT INTO ".$dbtablename . "
                          (name, city) 
                          VALUES 
                          ('Bob',London'),
                          ('Henry','New York')";
      
  
       $query = mysqli_query($x,$sql) // basically think of this as use the connected myqli info to execute $sql stament. 
       
       //put the query to an associate array
       //so it keep going till nothing matches
       //one row at a time
       while($row = mysqli_fetch_array($query,MYSLI_AOOC)){
            $name = $row["name"];
            $city = $row["city"];
       
       }
       


# GET/POST/REQUEST

       $dbtable = $_GET["tableName"];
       //phpFile.php?tableName=  whatever you want to pass in goes here



<p align="center">
  <img src="https://github.com/ericyu423/WebStuff/blob/master/image/POST.png" width="500"/>
</p>








#Using phpStorm editor

after install XAMPP open folder path with phpStrom
add an new php file now you can play with it.

localhost to see output


<p align="center">
  <img src="https://github.com/ericyu423/WebStuff/blob/master/image/image1.png" width="500"/>
</p>
