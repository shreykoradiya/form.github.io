<?php
if(isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password="";
    $db="shrey";
   
    $connection=mysqli_connect($server,$username,$password,$db);

    if(!$connection)
    {
        die(mysqli_connect_error());
    }
    echo "connected";

    $name=$_POST['name'];
    $surname=$_POST['surname'];

    echo $sql="INSERT INTO form (Name,Surname) VALUES ('$name','$surname')";
    
    $query=mysqli_query($connection,$sql);

    if($query)
    {
        echo "data inserted";
    }
    else
    {
        echo "error";
    }
}

?>
