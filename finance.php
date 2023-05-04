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
    <title>Finance</title>
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
        <div class="col-9">
          <h1>Welcom to EDU Blackbox</h1><br><br>
        </div>
        <div class=" container col-9">
        <h3 class="d-flex justify-content-center nott">Account Summary</h3><br>
        
        <div class=" col-6" style="float:left"><!-- sspring20-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from spring20  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Spring 20</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- summer20-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from summer20  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Summer 2020</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- fall20-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from fall20  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Fall 2020</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- spring21-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from spring21  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Spring 2021</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- summer21-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from summer21  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Summer 2021</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- fall21-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from fall21  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Fall 2021</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- spring22-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from spring22  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Spring 2022</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- summer22-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from summer22  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Summer 2022</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- fall22-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from fall22  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Fall 2022</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

          <div class=" col-6" style="float:left"> <!-- spring23-->
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from spring23  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
          <h5 class="d-flex justify-content-center nott" >Spring 2023</h5>
            <span style="display-inline"> <b> Student ID : </b><?php echo $row['id']; ?> </span><br><br>
            <span style="display-inline"> <b> Taken Credit Hour : </b><?php echo $row['tc']; ?> </span><br><br>
            <span style="display-inline"> <b> Sub-Total Fees : </b> <?php echo $row['stf']; ?> </span><br><br>
            <span style="display-inline"> <b> Discount & Scholarship : </b><?php echo $row['ds']; ?> </span><br><br>
            <span style="display-inline"> <b> Semester Fees : </b><?php echo $row['sf']; ?> </span><br><br>
            <span style="display-inline"> <b> ID Card & Other Charges : </b><?php echo $row['ioc']; ?> </span><br><br>
            <span style="display-inline"> <b> Total Fees & Charges : </b> <?php echo $row['tfc']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>
        </div>
        <div class="col-3">
        <h3 class="d-flex justify-content-center nott">Due Date</h3>
        <div class="container">
            <a  class="nt" href=""><b>▪️ 1st Installment : 20 February, 2023 </b></a><br>
            <a  class="nt" href=""><b>▪️ 2nd Installment : 20 March, 2023 </b></a><br>
            <a  class="nt" href=""><b>▪️ 3rd Installment : 20 April, 2023 </b></a><br>
            
          </div>
        </div>
      </div>
    </div>



</section>



</main>




</body>
</html>