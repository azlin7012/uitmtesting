
<!DOCTYPE html>
<html lang = "en-US">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>uitm infotech</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link  rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <script src="js/jquery.js" type="text/javascript"></script>
</head>
 
<body bgcolor='FFFFFF'>
<div class=header href=style.css>
  
   <a href="login.php" class="button">Log Keluar</a>
    <img src="uitm.png" height="100px" width="300px"/>
    <div class="centered"><h2><strong>New Record</strong></h2></div>
    <center> <marquee width ="60%" direction="left" scrollamount="10" ><font color="white"><h5><i>UITM CAWANGAN SEREMBAN 3 INFOTECH</h5></i></font>
      </marquee></center>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="home.php">Home</a>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
          Pc Maintainance
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="fskm.php">Fakulti Sains dan Matematik (FSKM)</a>
          <a class="dropdown-item" href="fsr.php">Fakulti Sukan dan Reakrasi (FSR) </a>
          <a class="dropdown-item" href="fsppp.ph">Fakulti Polisi (FSPPP)</a>
          <a class="dropdown-item" href="pkp.php">PKP</a>
        </div>
      </li>
  </nav> 
</div>
<br>
<br>
  <form class="form" action="new_fskm.php" method="GET" enctype="multipart/form-data">
  <div>
    <label for="Makmal">Makmal</label>
    <select name="Makmal" id="Makmal">
      <option label= value=""></option>
      <option value="MK1">MK1</option>
      <option value="MK2">MK2</option>
      <option value="MK3">MK3</option>
      <option value="MK4">MK4</option>
      <option value="MK5">MK5</option>
      <option value="MK6">MK6</option>
      <option value="MK7">MK7</option>
      <option value="MK8">MK8</option>
      <option value="MK9">MK9</option>
      <option value="MK10">MK10</option>
      <option value="MK11">MK11</option>
      <option value="MK12">MK12</option>
    </select>
  </div>
  <div class="form-input"><label>PC NO</label>
    <input type="text" name="text" placeholder="PC"/>  
    </div>
  <div>
    <label for="date">date</label>
    <input type="date" name="date" id="date" min="2019-06-10">
  </div>
  <button type="reset">Reset</button>
  <button type="submit">Submit</button>
</form>
<div class="footer">
  <p>Copyright &copy; 2020 SYSTEM MAINTAINANCE UITM INFOTECH </p>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
