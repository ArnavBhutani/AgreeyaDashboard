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
  h1, h2, h3{
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
<?php 
$emcode=$_POST["emcode"];
$textInput1= $_POST["textInput1"];
$textInput2= $_POST["textInput2"];
$textInput3= $_POST["textInput3"];
$textInput4= $_POST["textInput4"];
$textInput5= $_POST["textInput5"];
$textInput6= $_POST["textInput6"];
$textInput7= $_POST["textInput7"];
$textInput8= $_POST["textInput8"];
$textInput9= $_POST["textInput9"];
$textInput10= $_POST["textInput10"];
$total=0.8*($textInput1+$textInput2+$textInput3+$textInput4+$textInput5)+1.2*($textInput6+$textInput7+$textInput8+$textInput9+$textInput10);
//Opens connection to server
$dbcon = mysql_connect('localhost','root', '');
if (!$dbcon){
	die('Connection Error' .mysql_error());}
//Select database
$dbselect = mysql_select_db('agreeya', $dbcon);
if(!$dbselect){
	die('Cant connect: ' .mysql_error());
}
$query="INSERT INTO `form` (`EMPcode`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `Total`) VALUES ('".$emcode."', '".$textInput1."', '".$textInput2."', '".$textInput3."', '".$textInput4."', '".$textInput5."', '".$textInput6."', '".$textInput7."', '".$textInput8."', '".$textInput9."', '".$textInput10."', '".$total."');";
$result=mysql_query($query);
echo "<h2> Thank you </h2>";
mysql_close($dbcon)
?>
<br/>
<form action="index.php">
  <button type="submit" class="btn btn-danger">Back</button>
</form>
  <center>
</div>

</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>