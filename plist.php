<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Agreeya</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
  body{
    background-color: #232C65;
  }
  .active{
    background-color: #B8BAFF;
  }
  h1{
    color: #232C65;
  }
  </style>
  </head>
  <body>
  <div class="container-fluid">

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.agreeya.com/"><img class="img-rounded img-responsive" src="Images/Logo.png" alt="Logo"></a>
    </div>
  </div>
</nav>
<div class="jumbotron container-fluid">
<center>
  <h1>List of Employees</h1><br/>
  <div class="container">
  <table>
  <?php
  //Opens connection to server
  $dbcon = mysql_connect('localhost','root', '');
  if (!$dbcon){
    die('Connection Error' .mysql_error());}
  //Select database
  $dbselect = mysql_select_db('agreeya', $dbcon);
  if(!$dbselect){
    die('Cant connect: ' .mysql_error());
  }
  //Product Details
  $query="SELECT EMPcode from employee";
  $data=mysql_query($query);
  echo '<table class="table table-responsive table-condensed table-hover">
  <tr ><th> Employee Code </th><th> Form Status </th><th> Total </th></tr>';
  while($record=mysql_fetch_array($data)){
    $emcode=$record["EMPcode"];
    $query2="SELECT Total FROM `form` WHERE EMPcode=".$record["EMPcode"]; 
    $data2=mysql_query($query2);
    $record2=mysql_fetch_array($data2);
    if(!$record2){
      echo '<tr class="danger"><td>'.$emcode.'</td><td><a href="formad.php">Pending</a></td><td>NA</td></tr>';
    }else{
      echo '<tr class="success"><td>'.$emcode.'</td><td>Submitted</td><td>'.$record2['Total'].'</td></tr>';
    }
  }
  echo "</table><br/><br/>";
  mysql_close($dbcon);
  ?>
  <form action="admin_index.php">
  <button type="submit" class="btn btn-danger">Back</button>
</form>
</div>
</div>
</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>