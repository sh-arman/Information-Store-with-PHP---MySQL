<?php

class db{

	public $conn;

	public function __construct()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=cse301","root","");
		$this->conn = $pdo;
	}


	public function insert($first_name, $last_name, $email, $gender, $country, $dateofbirth, $password)
	{
		$insert_query = "INSERT INTO info(first_name,last_name,email,gender,country,dateofbirth,password) VALUES (:first_name, :last_name, :email, :gender, :country, :dateofbirth, :password)";
		  $statement = $this->conn->prepare($insert_query);
		  $statement->bindParam(':first_name',$first_name);
		  $statement->bindParam(':last_name',$last_name);
		  $statement->bindParam(':email',$email);
      $statement->bindParam(':gender',$gender);
      $statement->bindParam(':country',$country);
      $statement->bindParam(':dateofbirth',$dateofbirth);
      $statement->bindParam(':password',$password);
		  $statement->execute();
	}

	// public function show()
	// {
	// 	$getAll = "SELECT * FROM mobiles WHERE deleted_at IS NULL";
	// 	$statement = $this->conn->prepare($getAll);
	// 	$statement->execute();
	// 	$result = $statement->fetchAll();
  //
	// 	return $result;
	// }
  //
	// public function edit($id)
	// {
	// 	$getAll = "SELECT * FROM mobiles WHERE id=:id";
	// 	$statement = $this->conn->prepare($getAll);
	// 	$statement->execute(
	// 		array(
	// 			":id" => $id
	// 		)
	// 	);
	// 	$result = $statement->fetchAll();
  //
	// 	return $result;
	// }
  //
	// public function search($range)
	// {
	// 	if(empty($range)){
	// 		$range = "40000";
	// 	}
	// 	$searchQuery = "SELECT * from mobiles WHERE price <= :range";
	// 	$statement = $this->conn->prepare($searchQuery);
	// 	$statement->execute(
	// 		array(
	// 			":range" => $range
	// 		)
	// 	);
	// 	$result = $statement->fetchAll();
  //
	// 	return $result;
	// }
  //
	// //update
	// public function update($name,$model,$price,$id)
	// {
	// 	try {
	// 		$update = "UPDATE mobiles SET name=:name,model=:model,price=:price WHERE id=:id";
	// 		$statement = $this->conn->prepare($update);
	// 		$statement->bindParam(':name',$name);
	// 		$statement->bindParam(':model',$model);
	// 		$statement->bindParam(':price',$price);
	// 		$statement->bindParam(':id',$id);
	// 		$statement->execute();
  //
	// 	} catch (\Exception $e) {
	// 		echo $e->getMessage();
  //
	// 	}
	// 	//$result = $statement->fetchAll();
  //
	// 	return 1;
	// }
  //
	// //delete
	// public function delete($id)
	// {
	// 	try {
	// 		$delete = "DELETE FROM mobiles WHERE id=:id";
	// 		$statement = $this->conn->prepare($delete);
	// 		$statement->bindParam(':id',$id);
	// 		$statement->execute();
  //
	// 	} catch (\Exception $e) {
	// 		echo $e->getMessage();
  //
	// 	}
	// 	//$result = $statement->fetchAll();
  //
	// 	return 1;
	// }
  //
	// public function softDelete($id)
	// {
	// 	try {
	// 		$time = date("Y-m-d");
	// 		$delete = "UPDATE mobiles SET deleted_at = :tim WHERE id=:id";
	// 		$statement = $this->conn->prepare($delete);
	// 		$statement->bindParam(':tim',$time);
	// 		$statement->bindParam(':id',$id);
	// 		$statement->execute();
  //
	// 	} catch (\Exception $e) {
	// 		echo $e->getMessage();
  //
	// 	}
	// 	//$result = $statement->fetchAll();
  //
	// 	return 1;
	// }

}


?>
