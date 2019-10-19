<?php   include 'classes/db.php'; ?>
<?php   include 'classes/employee.php'; ?>
<?php
if (isset($_GET['del']))
{
	$id=$_GET['del'];

 $obj= new employee();
 $obj->delete($id);
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
				<a href="create.php" class="float-right btn btn-success">Add employee</a>
				<h4 class="mb-4">All Employee</h4>

				<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">CITY</th>
      <th scope="col">DESIGNATION</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	 $obj= new employee();
  	 $rows=$obj->select();
  	 foreach ($rows as $row) 
  	 {
  	
  	?>
    <tr>
      <th scope="row"><?php echo $row[0]; ?></th>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td>@<?php echo $row[3]; ?></td>
      <td><a href="edit.php?id=<?php echo $row[0]; ?>" class="btn btn-sm btn-primary">Edit</a> &nbsp <a href="index.php?del=<?php echo $row[0];?>" class="btn btn-sm btn-danger">Delete</a></td>
    </tr>
    <?php

     }
    ?>
  
    
  </tbody>
</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>