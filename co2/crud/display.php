<?php

include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <button class='btn btn-primary my-5'>
            <a href="user.php" class='text-light'> Add user</a>
  
  
  
        </button>
        <table class="table"> 
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">moblie</th>
      <th scope="col">operation</th>
      
    </tr>
  </thead>
<?php
$sql='Select * from "crud"';
$result=mysql_query($conn,$sql);
if($result)
{
    while($row=mysql_fetch_assoc($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
         echo '
         
         <tr>
         <th scope='row'> '.$id' </th>
       
       <td>'.$name.' </td>
       
       <td>'.$email.' </td>
       
       <td>'.$phone .' </td>
       <td>    <button class='btn btn-primary my-5'>
       <a href="update.php?updateid" class='text-light'> update </a>
</td>

<td>    <button class='btn btn-primary my-5'>
<a href="delete.php?deleteid" class='text-light'> delete  </a>
</td>

       </tr>
         
         '
    }
    

}
?>

</table>
    </div>
     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>