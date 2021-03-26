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
<br/> <br/>
<h2 class="card-title"> Registration Form </h2>
<br/>

<form method="post" enctype="multipart/form-data" action="insert.php">
<div class="form-group col-sm-4">

<input type="text" placeholder="First Name" name="firstname" class="form-control" required pattern="[a-zA-Z]{3,50}" title="Please Enter Only Characters between 1 to 50 for First Name"/> <br/>
</div>

<div class="form-group col-sm-4">
<input type="text" name="lastname" placeholder="Last Name" class="form-control" required pattern="[a-zA-Z]{3,50}" title="Please Enter Only Characters between 1 to 50 for Last Name"/> <br/>
</div>

<div class="form-group col-sm-4">
<input type="radio" name="r1"  value="Male" checked="checked" />Male
<input type="radio" name="r1"  value="Female"/>Female
<br/> <br/>
</div>



<div class="form-group col-sm-4">
<input type="text" name="contact" placeholder="Contact" class="form-control" required pattern="[0-9]{10}" title="Please Enter Only 10 digits for Mobile No"/> <br/>
</div>

<div class="form-group col-sm-4">
<input type="text" name="email" placeholder="Email" class="form-control" required pattern="^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" title="Enter Valid Email with @ and ."/> <br/> 
</div>

<div>
Enroll Subjects: <br/>
<div class="checkbox">
        <input type="checkbox" name="subject[]" value="HTML"> HTML 
    </div>
    <div class="checkbox">
     <input type="checkbox" name="subject[]" value="JavaScript"> JavaScript
    </div>
    <div class="checkbox">
      <input type="checkbox" name="subject[]" value="AJAX"> AJAX 
    </div>
</div> <br/>

<div class="form-group col-sm-4">
      <label for="ddl">Select Batch Time</label>
      <select class="form-control " name="ddl">
        <option value="Weekend Batch">Weekend Batch</option>
        <option value="Week batch">Week batch</option>
      </select>
</div> <br/>
<div class="form-group col-sm-4">
<input type="password" name="password" id="password" placeholder="password" class="form-control" >  <br/>
</div>

<div class="form-group col-sm-4">
<input type="submit" value="Submit" name="sbmt" class="btn btn-primary"/>    
</div>

</form>
</div>
</body>
</html>