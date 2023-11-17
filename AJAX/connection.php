<?php 



define("databaseName","mysql:host=localhost;dbname=ajax");
define("user","root");
define("pass","");


try
{
    $connection = new PDO(databaseName,user,pass);
    // echo "Database connected Successfully";
}
catch (PDOException $e)
{
    echo $e->getMessage();
}




?>