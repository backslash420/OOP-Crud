<?php   include 'classes/db.php'; ?>
<?php   include 'classes/employee.php'; ?>
<?php
// function __autoload($class)
// {
//   require_once "classes/$class.php";
// }
if (isset($_POST['submit'])){
  $name=$_POST['name'];
  $city=$_POST['city'];
  $designation=$_POST['designation'];
  if (!empty($name) && !empty($city) && !empty($designation)) 
  {
      // $fields=
  // [
  //   'name'=>$name,
  //   'city'=>$city,
  //   'designation'=>$designation

  // ];
   $obj= new employee();
   $obj->insert($name,$city,$designation);
  }
else{
 echo "<script>alert('fillup allfeild')</script>";
}

  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP LEARN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
	<div class="row">
		<div class="col-lg-12">
			<div class="jumbotron">
        <a href="index.php" class="float-right btn btn-success">All employee</a>
				<h4 class="mb-4">Add Employee</h4>

<form action="" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" placeholder="Enter city">
  </div>
    <div class="form-group">
    <label for="city">Designation</label>
    <input type="text" class="form-control" name="designation" placeholder="Enter designation">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
	
			</div>
		</div>
	</div>
</div>
</body>
</html>