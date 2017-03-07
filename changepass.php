<!DOCTYPE html>
<html lang="en">
<head>
  <title>QCPU.ph</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../images/titleicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="post">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index_student.php">Online Teachers Performance Evaluation</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index_2user.php"><span class="glyphicon glyphicon-user"></span>&emsp;Home</a></li>
        <li><a href="index_2user.php"><span class="glyphicon glyphicon-log-in"></span>&emsp;Log Out</a></li>
      </ul>
  </div>
</nav>
</form>
<div class="container">
  <div class="jumbotron">
    <center>
    <form method="post">
      <div class="form-group" style="max-width: 350px;">
        <p><h1><span class="glyphicon glyphicon-user"></span></h1></p>
        <p style="font-size: 25pt;">CHANGE PASSWORD</p>
        <input type="password" class="form-control" placeholder="Enter Old Password" maxlength="7" name="studentno" required><p></p>
        <input type="password" class="form-control" placeholder="Enter New Password" maxlength="15" name="password" required><p></p>
        <input type="password" class="form-control" placeholder="Confirm New Password" maxlength="15" name="password" required><p></p>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" name="loginbutton">SUBMIT</button>
    </form>
    <P></P><P></P>
    </center>

  </div>
  <p>This site is for evaluation purposes of Quezon City Polytechnic University</p>      
  <p></p>      
</div>
</body>
</html>
