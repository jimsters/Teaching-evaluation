<!DOCTYPE html>
<html lang="en">
<head>
  <title>QCPU.ph</title>
  <link rel="icon" type="image/png" href="../images/titleicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="w3.css">

</head>
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">QCPU - Online Teachers Performance Evaluation</a>
    </div>

   </div>
  </nav>
  <div class="container">
  <div class="jumbotron">
    <center>
    <form action="systemmanagement.php" method="post">
      <div class="form-group" style="max-width: 350px;">
        <p><h1><span class="glyphicon glyphicon-user"></span></h1></p>
        <p style="font-size: 30pt;"><b>ADMIN LOGIN</b></p>
        
        <input style="height: 50px;" type="text" class="form-control" placeholder="Username" maxlength="7" name="studentno" required><p></p>
        <input style="height: 50px;" type="password" class="form-control" placeholder="Password" maxlength="15" name="password" required><p></p>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" name="loginbutton">LOGIN</button>
    </form>
    <P></P><P></P>
    </center>
  </div>
<p>This site is for evaluation purposes of Quezon City Polytechnic University</p>      
  <p></p>
</div>
</body>