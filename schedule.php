<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
        header("location: index.php");
        exit;
    }
    else{
        
    }
?>

<?php include("dbcn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    
</head>
<body>
<!-- nav bar-->
<header>
    <nav class="nav nav-pills nav-fill">

        <a class="nav-link " aria-current="page" href="dash.php">
            <div class="dlogo">
                <img  src="photos/logo2.png" alt="">
                <img  src="photos/logo1.png" alt="">
            </div>
        </a>
    
        <a class="nav-link disabled">
            
            <div class="viewname">
                <span>
                    <h3><b><?php echo $_SESSION["username"]?></b></h3>
                    <br>
                    <i>student / active</i>
                    <br>
                </span>
            </div>
            <div>
              <li class="nav-item">
                <a class=" btn btn-outline-secondary btn-sm" aria-current="page" href="logout.php"><b>log out</b></a>
              </li> 
            </div>
        </a>
    </nav>
</header><br>

<!-- details-->
<main>


<section class=" ">
<div class="">
  <div class=" nav-item">
    <div class="nav-link active aria-current="page" col dlogo">
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="advising.php"><b>Advising</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="schedule.php"><b>Schedule</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="finance.php"><b>Finance</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="report.php"><b>Report & Transcript</b></a>
  </li>
</ul>
</div>
</div>
</div>
</section>
<section>
    <div class="container">
      <div class="row">
        <div class="col-12">
        <h1>Welcom to EDU Blackbox</h1><br><br>
        
          <h3 class="d-flex justify-content-center nott">Schedule</h3>
        </div>
        <div class="scl">
          <h3>Undergrad(Regular)</h3>
          <a class="aab" href="schedule/class.pdf" download >🔻Class Schedule</a><br>
          <a class="aab" href="schedule/exam.pdf" download >🔻Exam Schedule</a><br>
          <a class="aab" href="schedule/bus.pdf" download >🔻Bus Schedule</a><br><br>
          <h3>Postgrad(Regular)</h3>
          <a class="aab" href="schedule/class.pdf" download >🔻Class Schedule</a><br>
          <a class="aab" href="schedule/exam.pdf" download >🔻Exam Schedule</a><br>
          <a class="aab" href="schedule/bus.pdf" download >🔻Bus Schedule</a><br><br>
          <h3>Undergrad(Evening)</h3>
          <a class="aab" href="schedule/class.pdf" download >🔻Class Schedule</a><br>
          <a class="aab" href="schedule/exam.pdf" download >🔻Exam Schedule</a><br>
          <a class="aab" href="schedule/bus.pdf" download >🔻Bus Schedule</a><br><br>
          <h3>Postgrad(Evening)</h3>
          <a class="aab" href="schedule/class.pdf" download >🔻Class Schedule</a><br>
          <a class="aab" href="schedule/exam.pdf" download >🔻Exam Schedule</a><br>
          <a class="aab" href="schedule/bus.pdf" download >🔻Bus Schedule</a>
        </div>
      </div>
    </div>



</section>



</main>




</body>
</html>