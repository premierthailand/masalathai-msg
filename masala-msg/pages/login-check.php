<?php
if(isset($_POST['username'])){
    session_start(); 
    //รับค่า user & password
      $Username = $_POST['username'];
      $Password = md5($_POST['password']);
    //query 
      $sql="SELECT * FROM user Where user_username='".$Username."' AND user_password='".$Password."' ";
      $result = $conn->query($sql);
    
      if($result->num_rows == 1){

          $row = mysqli_fetch_array($result);

          $_SESSION['username'] = $row["user_name"];
          $_SESSION['status'] = $row["role_id"];

          echo $_SESSION['username'];
          echo $_SESSION['status'];
          Header("Location: dashboard");
          
      } else{
    echo "<script>";
    echo "alert(\" Username หรือ Password ไม่ถูกต้อง\");"; 
    echo "window.history.back()";
    echo "</script>";

      }

}else{


 Header("Location: ../"); //user & password incorrect back to login again

}


?>