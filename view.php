<?php
if(isset($_POST['name1']))
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

    $name=$_POST['name1'];

    $sql="SELECT * from form WHERE Name='$name'";
    $query=mysqli_query($connection,$sql);

    if ($query)
    {
        $r=mysqli_fetch_array($query);
        if($r>0)
        {
            echo ("hi");
            echo "<table>";
            echo "<tr>";
            echo "<th>";
            echo "Name";
            echo "</th>";
            echo "<th>";
            echo "surname";
            echo "</th>";
            echo "<th>";
            echo "phonenumber";
            echo "</th>";
            echo "<th>";
            echo "city";
            echo "</th>";
            echo "<th>";
            echo "address";
            echo "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>";
            echo $r['Name'];
            echo "</th>";
            echo "<th>";
            echo $r['Surname'];
            echo "</th>";
            echo "<th>";
            echo $r['phone_number'];
            echo "</th>";
            echo "<th>";
            echo $r['city'];
            echo "</th>";
            echo "<th>";
            echo $r['address'];
            echo "</th>";
            echo "</tr>";
        }
    }
}
?>