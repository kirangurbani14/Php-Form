<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<table  class="table table-dark">
<thead>
<tr>
<th scope="col">FirstName</th>
<th scope="col">LastNAme</th>
<th scope="col">Gender</th>
<th scope="col">Contact</th>
<th scope="col">Email</th>
<th scope="col">Password</th>
<th scope="col">Subject</th>
<th scope="col">Batch</th>
</tr>
</thead>
<?php
$cn=mysqli_connect("localhost","root","","registration");
$s="select * from registration";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
while($data=mysqli_fetch_array($result))
{	
    echo "<tbody  class=table-primary table-striped ><tr scope=row><td> $data[0]</td>";
    echo "<td> $data[1]</td>";
    echo "<td> $data[2]</td>";
    echo "<td> $data[3]</td>";
    echo "<td> $data[4]</td>";
    echo "<td> $data[5]</td>";
    echo "<td> $data[6]</td>";
    echo "<td> $data[7]</td></tr></tbody>";
    echo "<br/>";
}
?>
</table>
</div>
</body>
</html>