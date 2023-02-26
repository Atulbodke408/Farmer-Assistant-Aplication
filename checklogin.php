<?php
    require 'db.php';
    session_start();
    $phone_no=mysqli_real_escape_string($con,$_POST['phone_no']);
  
    $password=(mysqli_real_escape_string($con,$_POST['password']));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }
    $user_authentication_query="select id,phone_no from customer where phone_no='$phone_no' and password='$password'";
    echo $user_authentication_query;
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
        //header('location: login');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['phone_no']=$phone_no;
        $_SESSION['id']=$row['id'];  //user id
        header('location: index.php');
    }
    
 ?>