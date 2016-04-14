<?php

	

function hello()
{
    echo "bye bye";
}

function anotherF()
{
    echo "the other funct";
}

function noTouch()
{
    echo "can't touch this!";
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	// function insert_into_database(){
	// 	/*  ADD A NEW RECORD */
	// 	// echo $uname;
	// 	// echo $email;
	// 	// echo $password;
	// 	//"INSERT INTO `cuelogic_floor`(`id`, `emp_id`, `emp_name`, `comp_seat`) VALUES ([value-1],[value-2],[value-3],[value-4])";
	// 	//$sql = "INSERT INTO employee_relocation(id, emp_id, emp_name, comp_seat) VALUES (2,'Cue197','Vanshaj Rai','Cue041')";
	// }
			

	function delete_record(){
		//Delete Row
		//$sql = "DELETE FROM `mydb`.`users` WHERE `users`.`id` = 2";
	}

	function show_record(){
		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);

		//echo query($sql);

		if ($result->num_rows > 0) {
		     while($row = $result->fetch_assoc()) {
		         echo "<br> id: ". $row["firstname"]. " - Name: ". $row["lastname"]. " " . $row["email"] . "<br>";
		     }
		} else {
		     echo "0 results";
		}

	}
	// if ($conn->query($sql) === TRUE) {
	//     $last_id = $conn->insert_id;
	//     echo "New record created successfully. Last inserted ID is: " . $last_id;
	// 	} 
	// 	else {
 //    	//echo "Error: " . $sql . "<br>" . $conn->error;
	// 	}


//	insert_into_database();

$conn->close();
?>