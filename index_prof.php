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
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> About</a></li>
      </ul>

   </div>
  </nav>
  <div class="container">
  <div class="jumbotron">
    <center>
    <form action="profevaluationresult.php" method="post">
      <div class="form-group" style="max-width: 350px;">
        <p><h1><span class="glyphicon glyphicon-user"></span></h1></p>
        <p style="font-size: 37pt;"><B>USER LOGIN</B></p>
        <input style="height: 50px;" type="text" class="form-control" placeholder="User ID" maxlength="7" name="studentno" required><p></p>
        <input style="height: 50px;" type="password" class="form-control" placeholder="Password" maxlength="15" name="password" required><p></p>
      <table width="100%">
      <tr>
        <td>
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">NOTE</button>
        </td>
        <td style="float:right;">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Login As <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="profevaluationresult.php">Professor</a></li>
              <li><a href="loginsuccess.php">Student</a></li>
            </ul>
        </div>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="font-size: 9pt; padding:10px;"">
          <div id="demo" class="collapse" style="font-size: 9pt; padding:10px; background-color: #ffe6e6;">
            Enter a valid user id corresponded by its password.
            Select the type of user based on its user id.
          </div>
        </td>
      </tr>
      </table>
      </div>

    </form>
    <P></P><P></P>
    </center>

  </div>
<p>This site is for evaluation purposes of Quezon City Polytechnic University</p>      
  <p></p>
</div>
</body>