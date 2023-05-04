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
    <title>Profile</title>
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
          <b><h1>Profile</h1></b>
        </div>

        <div class="col-md-8 mt-1">
            <?php
            $ssid = $_SESSION["ssid"];
            $sql = "select * from profiles where id = $ssid";
            $result = $con->query($sql);
                      if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
            ?>

            
            <b><label >Name :</label></b>
              <?php echo $row['name']; ?> <br><br> 

            <b><label >Father's Name :</label></b>
              <?php echo $row['father']; ?> <br><br>

            <b><label >Mother's Name :</label></b>
              <?php echo $row['mother']; ?><br><br>

            <b><label >Date of Birth:</label></b>
              <?php echo $row['dob']; ?><br><br>

            <b><label >Gender:</label></b>
              <?php echo $row['gender']; ?> <br><br>

            <b><label >Contact No :</label></b>
              <?php echo $row['contact']; ?> <br><br>
            
            <b><label >Email :</label></b>
              <?php echo $row['email']; ?> <br><br>
            <b><label >Address :</label></b>
              <?php echo $row['address']; ?> <br><br>

            
             
            
    <br>
        </div>

        <div class="im col-4">
        <img src="<?php echo $row['image']; ?>">
        </div>
      </div>

      <?php
                        }
                      }
      ?>
    </div>



</section>



</main>




</body>
</html>

