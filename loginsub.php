<?php
include("dbcn.php");

  if($_POST['Signin'])
  {
      $username = $_POST['username'];
      $ssid = $_POST['ssid'];
      $password = $_POST['password'];
      $usertype = $_POST['usertype'];


      $sql = "Select * from signup where username='$username' and StudentID = '$ssid' and usertype='$usertype' ";
      $result = mysqli_query($con, $sql);
      $num = mysqli_num_rows($result);
      if ($num == 1){
        while($row = mysqli_fetch_assoc($result)){
          if(password_verify($password, $row['pass'])){
            $login= true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['ssid'] = $ssid;
            $_SESSION['usertype'] = $usertype;
            if($row["usertype"]=="student")
            {
              header("location: dash.php");
            }
            elseif($row["usertype"]=="admin")
            {
              header("location: admindash.php");
            }
            else{
              header("location: alert.php");
            
            }
            

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