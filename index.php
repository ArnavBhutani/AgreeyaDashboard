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
	background-color:rgb(126, 0, 0);
  }
  .active{
    background-color: #B8BAFF;
  }
  h1, h3, p{
    color: white;
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
      <li class="active" ><a href="#">Employee</a></li>
      <li><a href="admin_index.php">Admin</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron container-fluid">
<div class="row"><div class="col-sm-4">
  <h1 style=" color:rgb(126, 0, 0)">Login</h1><br/>
  <form action="login.php" method="POST"> <div class="form-group">
    <div class="row">
        <div class="col-sm-4"><label for="name" style="color:rgb(126, 0, 0);">Employee No.:            </label></div>
        <div class="col-sm-4"><input type="text" id="user" name="user">    </div></div>
  </div><div class="form-group">
    <div class="row">
       <div class="col-sm-4"> <label for="pwd" style="color:rgb(126, 0, 0)">Password:                 </label></div>
        <div class="col-sm-4"><input type="password" id="pass" name="pass"></div></div>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color:rgb(126, 0, 0); ">Log-in</button>
</form></div>
<div class="col-sm-8">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="Images/1.jpg" alt="Bhopal" class="img-responsive img-rounded">
    </div>

    <div class="item">
      <img src="Images/2.jpg" alt="Chicago" class="img-responsive img-rounded">
    </div>

    <div class="item">
      <img src="Images/3.jpg" alt="New York" class="img-responsive img-rounded">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>

</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>