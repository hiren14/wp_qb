<?php

include 'connect.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=-$_POST['phone'];
  
    
    $sql = 'insert into "crud"(name,email,phone)
    values('$name','$email','$phone')';
    $result = mysql_query($conn,$sql);
    if($result)
    {
        // echo 'data insterd succeddfull'
    header('location:display.php');

    }
    else(
        die($mysql_error)
    )
}
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

<form method='post'>
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" placeholder='enter your name ' value='name' autocomplete='off'>

   <br/>
</div>

 <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" placeholder='enter your email' value='email' autocomplete='off' >
    
   <br/>
</div>

<div class="mb-3">
    <label >Phone</label>
    <input type="text" class="form-control" placeholder='enter your moblie number ' value='phone' autocomplete='off'>
    
   <br/>
</div>


<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>