<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<h3 style="text-align: center">Student Registration</h3>
<hr>
    <div class="container" style="background-color:aqua;">
<form action="insert-student-data.php" method="post">
  <div class="form-group"  style="margin-bottom: 20px;">
    <label for="exampleInputEmail1">Student ID</label>
    <input type="text" class="form-control" name="studentid"  placeholder="Enter Student ID">
  </div>
  <div class="form-group" style="margin-bottom: 20px;">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" class="form-control" name="firstname"  placeholder="Enter First name">
    </div>

<div class="form-group" style=" margin-bottom: 20px;">
    <label for="exampleInputEmail1">Last name</label>
    <input type="text" class="form-control" name="lastname" placeholder="Enter Last name">
    </div>

<div class="form-group" style=" margin-bottom: 20px;">
    <label for="exampleInputEmail1">Date of Birth</label>
    <input type="text" class="form-control" name="dateofbirth"  placeholder="Enter Date of Birth">
    </div>

<div class="form-group" style=" margin-bottom: 20px;">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter email">
</div>

<div class="form-group" style=" margin-bottom: 20px;">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" name="department"  placeholder="Enter Department">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>