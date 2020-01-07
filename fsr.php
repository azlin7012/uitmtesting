<!DOCTYPE html>
<html lang = "en-US">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>uitm infotech</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link  rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <style>
   .button-fsr{
  position: relative;
  background-color: #3644f2;
  border: none;
  font-size: 20px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  -webkit-transition-duration: 0.2s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button-fsr:after {
  content: "";
  background: white;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button-fsr:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}

 </style>

</head>
 
<body>
<div class=header href=style.css>
  
   <a href="login.php" class="button">Log Keluar</a>
    <img src="uitm.png" height="100px" width="300px"/>
    <center> <marquee width ="60%" direction="left" scrollamount="10" ><font color="white"><h2><i>UITM CAWANGAN SEREMBAN 3 INFOTECH</h2></i></font>
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
          <a class="dropdown-item" href="fsppp.php">Fakulti Polisi (FSPPP)</a>
          <a class="dropdown-item" href="pkp.php">PKP</a>
        </div>
      </li>
  </nav> 
</div>
<div class="container">
  <button class="button-fsr">New Record</button>
  <br><br>
  <button class="button-fsr">History Record</button>
</div>
<div class="footer">
  <p>Copyright &copy; 2020 SYSTEM MAINTAINANCE UITM INFOTECH </p>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>