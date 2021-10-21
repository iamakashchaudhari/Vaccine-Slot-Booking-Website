<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database_name = "contact";
	
	$conn=mysqli_connect($host,$username,$password,$database_name);
	
	if(!$conn) {
            die("Could not connect to the database". mysqli_connect_error());
        }
		
	if (isset($_POST['submit']))
	{
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$query = $_POST['query'];
		$subject = $_POST['subject'];
		
		$sql_query = "INSERT INTO message(fullname,email,query,subject) 
						VALUES('$fullname','$email','$query','$subject')";
						
		
		if(mysqli_query($conn,$sql_query))
		{
				echo"Our Team Contact You in 3 Working Days !";
		}
		else
		{
				echo"Error: ".$sql." ".mysqli_error($conn);
				
		}
		mysqli_close($conn);
		}
	
?>


