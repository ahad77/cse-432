<?php
include("dbcn.php");

  if($_POST['Signin'])
  {
      $ssid = $_POST['ssid'];
      $password = $_POST['password'];


     //$sql = "Select * from signup where StudentID='$ssid' AND pass='$password'";
      $sql = "Select * from signup where StudentID='$ssid' ";
      $result = mysqli_query($con, $sql);
      $num = mysqli_num_rows($result);
      if ($num == 1){
        while($row = mysqli_fetch_assoc($result)){
          if(password_verify($password, $row['pass'])){
            $login= true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['ssid'] = $ssid;
            header("location: dash.php");

          }
          else{
            header("location: alert.php");
          
          }
        }
      } 
    else{
      header("location: alert.php");
    }
    
    



    

  }

?>