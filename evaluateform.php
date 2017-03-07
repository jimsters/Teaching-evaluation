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
<body>



<form action="" method="post">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Teachers Performance Evaluation</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index_2user.php"><span class="glyphicon glyphicon-log-in"></span>&emsp;Log Out</a></li>
      </ul>
  </div>
</nav>
</form>
<div class="container">
  <div class="jumbotron">
<form method="post" action="">

<br>
<table class="table table-bordered" cellpadding="10px" width="70%" align="center">
<tr>
  <td width="200px">
    <img src="../images/profsample.png" height="200px" width="200px">
  </td>
  <td>
    <table class="table table-bordered" cellpadding="10px" width="70%" align="left">
    <tr class="success">
      <td>
      Professor's Name:
      </td>
      </tr>
      <tr class="primary">
      <td>
      Position:
      </td>
      </tr>
      <tr class="primary">
      <td>
      Subject:
      </td>
      </tr>
      <tr class="primary">
      <td>
      Schedule:
      </td>
    </tr>
    </table>
  </td>
</tr>
</table>

  <center><h4><b>*</b>Note: <u>5</u> is the highest, <u>1</u> is the lowest.</h4></center>



<br>

<table class="table table-bordered"  style="padding:10px;" bgcolor="lightblue" border="1" cellpadding="10px" cellspacing="10PX;" width="70%" align="center">
<tr class="info">
  <th colspan="3"><h2>Teaching Performance </h2></th>
</tr>
<tr>
  
  <td class="align"><b>Questions</td>
  <td class="align"><b>Rating</td>
</tr>
<tr>
  
  <td>1. Demonstrates mastery of the subject matter. (Nagpapakita ng kabisahaan sa paksang aralin)</td>
  <td><select class="input"name="r1" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>2. Encourages his/her students to asks questions and to express their viewpoint on matter related to the lecture. ( Hinihikayat ang kanyang mga estudyante na magtanong at ipahayag ang kanilang opinion tungkol sa aralin).</td>
  <td><select class="input" name="r2" size="1" required>
    <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>3. Use current teaching techniques and demonstrates creativity appropriate for meeting the course objectives.</td>
  <td><select class="input" name="r3" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>4. Displays enthusiasm in teaching the lessons.
(Laging Ganado sa pagtuturo.)
</td>
  <td><select class="input" name="r4" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  </td>
</tr>

<tr>
  
  <td>5. Discusses and explains lessons within the students level of understanding.
(Tinatalakay at ipinapaliwanag ang aralin ayon sa antas ng pang-unawa ng mag-aaral.)

</td>
  <td><select class="input" name="r5" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
</td>
</tr>

<tr>
    <td>6. Relates lessons to current issues. (Inuugnay ang aralin sa mga kasalukuyang isyu.)</td>
  <td><select class="input" name="r6" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>7. Uses various levels of question relevant to the lessons.
(Gumamit ng iba-ibang antas ng katanungan kaugnay ng aralin.)
</td>
  <td><select class="input" name="r7" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>8. Uses varied and updated references and instructional materials.
(Gumagamit ng napapanahong mga sanggunian at kagamitan sa pagtuturo.)
</td>
  <td><select class="input" name="r8" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>


  </td>
</tr>

<tr>
  
  <td>9. Makes himself/herself available for academic consultation.
(Naglaan ng oras para sa Konsultasyong akademiko.)
  <td><select class="input" name="r9" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>10. Promptly provides student with the result of their written tests, quizzes, assignments and notes. (Nagbibigay agad ng resulta ng mga pagsusulit at takdang-aralin.)</td>
  <td><select class="input" name="r10" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>11. Speaks clearly and moderately. (Malinaw at malakas ang pagsasalita.)</td>
  <td><select class="input" name="r11" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>


</table>


<br><br>

<table class="table table-bordered" bgcolor="lightblue" border="1" cellpadding="10px" width="70%" align="center">
<tr class="warning">
  <th colspan="3"><h2>Classroom Management</h2></th>
</tr>
<tr>
  
  <td class="align"><b>Questions</td>
  <td class="align"><b>Rating</td>
</tr>
<tr>
  
  <td>1. Maintain discipline in the classroom.(Pinapanatili ang disiplina sa loob ng silid-aralin)</td>
  <td><select class="input" name="s1" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>2. Starts and dismisses the class on time. (Sinisimulan at tinatapos ang klase sa tamang oras.)
  <td><select class="input" name="s2" size="1" required>
    <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>3. Is tactful in dealing with the students.(Maingat makitungo sa mga mag-aaral.)</td>
  <td><select class="input" name="s3" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>4. Comes to class ready and prepared for the lessons. (Laging handa sa mga itinuturo.)
</td>
  <td><select class="input" name="s4" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  </td>
</tr>

<tr>
  
  <td>5. Gives approval to desired academic behavious such as doing assignments, participating class discussions , etc. (Nagbibigay ng tamang papuri sa mga kaiga-igayang akademikong asal  tulad ng takdang-aralin, pakikibahagi sa talakayan sa silid-aralan at iba pa.)

</td>
  <td><select class="input" name="s5" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
</td>
</tr>

<tr>
  
  <td>6. Monitors students attendance. (Nagchecheck ng attendance.)</td>
  <td><select class="input" name="s6" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>7. Is able to use teaching hours productively. (Produktibong nagagamit  ang oras ng paggamit.)
</td>
  <td><select class="input" name="s7" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>8. Points out how to earn credits and academic rewards for acceptable academic performance. (Nililinaw ang mga batayan sa pag-bibigay ng grado.)
</td>
  <td><select class="input" name="s8" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>


  </td>
</tr>

<tr>
  
  <td>9. Gives reasonable course requirements, consultations, and advising. (Makatwiran sa pagbibigay ng requirements.)
  <td><select class="input" name="s9" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>10. Ensures the classroom orderliness. (Pinapanatili ang kaayusan sa silid-aralan.)
  <td><select class="input" name="s10" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>



</table>

<br><br>


<table class="table table-bordered" bgcolor="lightblue" border="1" cellpadding="10px" width="70%" align="center">
<tr class="danger">
  <th colspan="3"><h2>Personal Qualities</h2></th>
</tr>
<tr>
  
  <td class="align"><b>Questions</td>
  <td class="align"><b>Rating</td>
</tr>
<tr>
  
  <td>1. Dresses up appropriately. (Angkop ang pananamit).</td>
  <td><select class="input"name="t1" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>2. Is firm and consistent, strict but reasonable in relating to students. (Matatag at palaging makatuwiran sa pakikipag ugnayan sa mag-aaral.) 
  <td><select class="input"name="t2" size="1" required>
    <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>

<tr>
  
  <td>3. Has sense of humor and apply it appropriately.(Nagpapatawa ngunit nasa tamang lugar).</td>
  <td><select class="input" name="t3" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  
  </td>
</tr>

<tr>
  
  <td>4. Is fair and impartial to students and respect individual differences. (Patas at walang kinikilingan at iginagalang ang pagkakaiba-iba ng mag aaral).
</td>
  <td><select class="input" name="t4" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
  </td>
</tr>

<tr>
  
  <td>5. Practices self-control. (Marunong magtimpi).
</td>
  <td><select class="input" name="t5" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>
</td>
</tr>

<tr>
  
  <td>6. Is open suggestions and criticisms. ( Tumatanggap ng puna at mungkahi).  </td>
  <td><select class="input" name="t6" size="1" required>
  <option value="---">---</option>
  <option value="1">1-Needs Improvement</option>
  <option value="2">2-Fair</option>
  <option value="3">3-Satisfactory</option>
  <option value="4">4-Very Satisfactory</option>
  <option value="5">5-Outstanding</option>

  </td>
</tr>


</table>
<br>

<table cellpadding="5px" width="70%" align="center">
<tr>
<td colspan="3"><b>REMARKS:</b> 
<textarea class="form-group" placeholder="What are your teacher's strong points? Which ones needs improvement? (anu-ano ang nakikitang magandang katangian sa inyong guro? Ano ang dapat baguhin?)" wrap = "virtual" rows="6" cols="100" maxlength="500" name="rem1" required=""></textarea></td>
</tr>
<tr>
  <td><textarea placeholder="In your opinion, how can this course be improved? (sa iyong palagay, paano pa mapapabuti ang kursong ito?)" class="form-group" wrap = "virtual" rows="6" cols="100" maxlength="500" name="rem2" required=""></textarea>
  </td>
</tr>
<tr>
  <td><textarea placeholder="Other comments. (iba pang kumento para sa inyong guro)." required="" class="form-group" wrap = "virtual" rows="6" cols="100" maxlength="500" name="rem2"></textarea>
  </td>
</tr>


<div align="center">
<tr>
  
  <td colspan="3">
  <a href="evaluationsuccess.php"><button type="button" class="btn btn-primary btn-lg" name="submit">SUBMIT</button></a>
  <a href="evaluateform.php"><button type="button" class="btn btn-primary btn-lg" name="reset">RESET</button></a>
  </td>
</tr>
</div>
</table>
</form>
  </div>
  <p>This site is for evaluation purposes of Quezon City Polytechnic University</p>      
  <p></p>      
</div>
</body>
</html>
