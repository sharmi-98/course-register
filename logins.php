<?php
   include("config.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);
      if($count == 1) {
	  // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }
else {
        echo "<script>alert('The username or password you entered is invalid.'); window.location='index.php';</script>";;
    }
}
?>