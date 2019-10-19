<?php
class employee extends db{
	//insert data
	public function insert($name,$city,$designation)
	{
	
	$insert="INSERT INTO `employee_data`(`name`, `city`, `designation`) VALUES('$name','$city','$designation')";
   $result=$this->connect()->prepare($insert);
   $resultExec= $result->execute();
		if ($resultExec) 
		{
			header('Location: index.php');

		}
	}

	//select data
	public function select()
	{
		$sql="SELECT * FROM employee_data";
		$result=$this->connect()->query($sql);
		if ($result->rowCount() > 0) 
		{
			while ($row= $result->fetch())
		    {
				$data[]=$row;

			}
			return $data;
			
		}
	}

	//update  data
	public function selectOne($id)
	{
	$sql="SELECT * FROM `employee_data` WHERE id= :id";
	$result=$this->connect()->prepare($sql);
	$result->bindValue(":id",$id);
	$result->execute();
	$finalresult=$result->fetch(PDO::FETCH_ASSOC);
	return $finalresult;
	}

	public function update($name,$city,$designation,$id)
	{
	$update="UPDATE `employee_data` SET `name`='$name',`city`='$city',`designation`='$designation' WHERE `id`='$id'";
   $result=$this->connect()->prepare($update);
   $resultExec= $result->execute();
		if ($resultExec) 
		{
			header('Location: index.php');

		}
	}

	//delete from DB
	public function delete($id)
	{
	$delete="DELETE FROM `employee_data` WHERE `id`='$id'";
   $result=$this->connect()->prepare($delete);
   $resultExec= $result->execute();
		
	}
	
	

}
	
?>