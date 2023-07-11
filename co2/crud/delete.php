<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql ='delete from "crud" where id=$id'
    $result=mysql_query($conn,$sql);
    if($result)
    {
        // echo "delete succesfull"
        header('location:display.php');
    }
    else{
        die($mysql_error)

    }
}

?>
