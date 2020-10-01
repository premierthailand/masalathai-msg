<?php include 'config.php'; ?>
<?php
if(isset($_POST['username'])){
    session_start(); 
    //รับค่า user & password
      $Username = $_POST['username'];
      $Password = md5($_POST['password']);
    //query 
      $sql="  SELECT user_name,role_name,user_id FROM user 
              INNER JOIN role ON role.role_id = user.role_id 
              Where user_username='".$Username."' AND user_password='".$Password."' 
              ";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
          $row = mysqli_fetch_array($result);

          $_SESSION['username'] = $row["user_name"];
          $_SESSION['status'] = $row["role_name"];
          $_SESSION['id'] = $row["user_id"];
          echo $_SESSION['id'];
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
