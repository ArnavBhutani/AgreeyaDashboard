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
    background-color: rgb(126, 0, 0);
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
    <ul class="nav navbar-nav">
    <center>
      <h1>Feedback Form</h1>
    </center>
    </ul>
  </div>
</nav>
<div class="jumbotron container-fluid"> 
  <h2>Note:</h2>
  <h5><b>In this form a rating of 0 (leftmost) is of the lowest grade and 10 (rightmost) of highest.</b></h5></div>
<div class="jumbotron container-fluid"> 
  <h2><u>Form</u></h2><br>
  <form action="formproc.php" method="POST" data-toggle="validator"> 
  <div class="form-group form-inline row"><label for="emcode" style="padding-right: 183px;">Employee Code:</label> 
  <?php
  $emcode=$_SESSION["empid"];
  echo '<input type="text" name="emcode" id="emcode" class="form-control" value="';
  echo $emcode.'" readonly></div>';
  ?>
  <div class="form-group form-inline row"> <label for="textInput1">Question 1 text</label> 
  <div class="row">
  <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput1(this.value);"></div> 
  <input type="text" id="textInput1" name="textInput1" pattern="^\d{1,2}$" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput2">Question 2 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput2(this.value);"></div>
      <input type="text" id="textInput2"  pattern="^\d{1,2}$" name="textInput2" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput3">Question 3 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput3(this.value);"></div>
      <input type="text" id="textInput3"  pattern="^\d{1,2}$" name="textInput3" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput4">Question 4 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput4(this.value);"></div>
      <input type="text" id="textInput4"  pattern="^\d{1,2}$" name="textInput4" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput5">Question 5 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput5(this.value);"></div>
      <input type="text" id="textInput5"  pattern="^\d{1,2}$" name="textInput5" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput6">Question 6 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput6(this.value);"></div>
      <input type="text" id="textInput6"  pattern="^\d{1,2}$" name="textInput6" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput7">Question 7 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput7(this.value);"></div>
      <input type="text" id="textInput7"  pattern="^\d{1,2}$" name="textInput7" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput8">Question 8 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput8(this.value);"></div>
      <input type="text" id="textInput8"  pattern="^\d{1,2}$" name="textInput8" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput9">Question 9 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput9(this.value);"></div>
      <input type="text" id="textInput9"  pattern="^\d{1,2}$" name="textInput9" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput10">Question 10 text</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput10(this.value);"></div>
      <input type="text" id="textInput10" pattern="^\d{1,2}$"  name="textInput10" value="5" class="form-control" required></div></div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  function updateTextInput1(val) {
          document.getElementById('textInput1').value=val; 
        }
  function updateTextInput2(val) {
          document.getElementById('textInput2').value=val; 
        }
  function updateTextInput3(val) {
          document.getElementById('textInput3').value=val; 
        }
  function updateTextInput4(val) {
          document.getElementById('textInput4').value=val; 
        }
  function updateTextInput5(val) {
          document.getElementById('textInput5').value=val; 
        }
  function updateTextInput6(val) {
          document.getElementById('textInput6').value=val; 
        }
  function updateTextInput7(val) {
          document.getElementById('textInput7').value=val; 
        }
  function updateTextInput8(val) {
          document.getElementById('textInput8').value=val; 
        }
  function updateTextInput9(val) {
          document.getElementById('textInput9').value=val; 
        }
  function updateTextInput10(val) {
          document.getElementById('textInput10').value=val; 
        }
</script>
</body>
</html>