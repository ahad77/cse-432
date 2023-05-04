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
          <form action="profile.php" method="post">
            <b><label for="n">Name :</label></b>
            <input id="fn" type="text" placeholder="Enter your name" name="name" required><br><br> 

            <b><label for="fn">Father's Name :</label></b>
              <input id="fn" type="text" placeholder="Enter your father's name" name="father" required><br><br>

            <b><label for="mn">Mother's Name :</label></b>
              <input id="mn" type="text" placeholder="Enter your mother's name" name="mother" required><br><br>

            <b><label for="db">Date of Birth:</label></b>
              <input id="db" type="date" placeholder="Enter your DOB" name="dob" required><br><br>

            <b><label for="#">Gender:</label></b>
              <input id="#" type="radio" placeholder="" name="gender" required>
              <label for="#">Male</label>
              <input id="#" type="radio" placeholder="" name="gender" required>
              <label for="#">Female</label>
            <br><br>

            <b><label for="cn">Contact No :</label></b>
            <input id="ad" type="text" placeholder="Enter your address" name="address" required><br><br>
            
            <b><label for="em">Email :</label></b>
              <input id="em" type="email" placeholder="Enter your email" name="email" required><br><br>
            <b><label for="ad">Address :</label></b>
              <input id="ad" type="text" placeholder="Enter your address" name="address" required><br><br>

            <button type="submit"  name="Save" class="btn btn-outline-secondary btn-sm">Save</button><br><br>
            
             
            
    <br>
          </form>
        </div>

        <div class="im col-4">
          <img src="photos/gggg.jpg" alt="" name="image">
        </div>
      </div>
    </div>



</section>



</main>




</body>
</html>

<?php
  if($_POST['Save'])
  {
    $name = $_POST['name'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    

  
    $query ="INSERT INTO profilee VALUES ('$name','$father', '$mother','$dob', '$gender', '$contact','$email', '$address')";
    $result = mysqli_query($con, $query);
    if($result)
            {
                echo '
                <div class="container">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                  <b>Information Saved Successfully.</b>
                </div>
                </div>

              ';
    
             }
    else{
          echo '
        <div class="container">
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <b>404 ERROR!!</b>
        </div>
        </div>


        ';
            }

    }

    ?>