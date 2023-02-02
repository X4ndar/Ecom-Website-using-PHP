<?php


if(isset($_POST["submit"])){

  $username = $_POST["username"];
  $username = filter_var($username, FILTER_SANITIZE_STRING);

  $password = $_POST["password"];
  $password = filter_var($password, FILTER_SANITIZE_STRING);

  $is_admin = $_POST['my-hidden-field'];

  $result = mysqli_query($conn, "SELECT * FROM client WHERE username = '$username' OR email = '$username' AND is_admin = '$is_admin'" );
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) > 0){

    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      echo "<script> alert('Login successful'); </script>";
      // header("Location: Admin_dashboard/index.html");
      echo "<script> window.open('Admin_dashboard/codeadmin/index.html','_self') </script>";
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>



