<?php include '../config/config.php'; 


// $querydelete =  SELECT * FROM sizes WHERE id_size = '$field1name';
$querydelete =  "DELETE  FROM sizes WHERE id_size = '$field1name'";  //stille error fixed in 9.

if ($result = $conn->query($querydelete)) {
// SELECT * FROM ecommerce WHERE sizes;

echo "<script> alert('Login successful'); </script>";
echo "<script> window.open('sizes.php','_self') </script>";
}


?>

