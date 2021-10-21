<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database_name = "vaccine";
	
	$conn=mysqli_connect($host,$username,$password,$database_name);
	
	if(!$conn) {
            die("Could not connect to the database". mysqli_connect_error());
        }
		
	if (isset($_POST['submit']))
	{
		$fullname = $_POST['fullname'];
		$aadhar = $_POST['aadhar'];
		$psw = $_POST['psw'];
		$pswrepeat = $_POST['pswrepeat'];
		
		$sql_query = "INSERT INTO registration(fullname,aadhar,psw,pswrepeat) 
						VALUES('$fullname','$aadhar','$psw','$pswrepeat')";
						
		
		if(mysqli_query($conn,$sql_query))
		{
				echo"Registration Successfull !";
		}
		else
		{
				echo"Error: ".$sql." ".mysqli_error($conn);
				
		}
		mysqli_close($conn);
		}
	
?>


