<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO category
         (category_name) 
         VALUES ('$catname')");
 
        $hmar = mysqli_query($conn, $insert);

         if($hmar)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?category=error");
         }
         else
         {
            //  echo "<script> alert("Records added successfully."); </script>";
             echo "<script> alert('Records added successfully.'); </script>";
             header("Location: ../index.php");
             
         }
     
    }
        
?>