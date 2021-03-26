<?php include 'connection.php' ?>
<?php
  $cn=mysqli_connect("localhost","root","","registration");
   $value = $_REQUEST["subject"];
   $val = implode(",", $value);

    $ddl = $_REQUEST["ddl"];
 //   for ($i=0; $i<sizeof($checkBox); $i++)
 //       {
     $s="insert into registration values('" . $_REQUEST["firstname"] ."','" . $_REQUEST["lastname"] ."','" . $_REQUEST["r1"] ."','" . $_REQUEST["contact"] ."','" . $_REQUEST["email"] ."','" . $_REQUEST["password"] ."','" . $val . "','".$ddl."')";
     mysqli_query($cn,$s);
 //       }
     echo "<script>alert('Record Save');</script>";
     mysqli_close($cn);
?>

<?php include 'data.php'   ?>