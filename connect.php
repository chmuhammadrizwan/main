<?php



 $conn = new mysqli('localhost','root','','gava');
 if($conn->connect_error){
 	die('connection failed : '.$conn->connect_error);
 	}else{
 		$stmt = $conn->prepare("insert into khan(FirstN,LastN,FatherN,MotherN,Gender,Email,hobbies,Occupation,Village,CityC,AccountN,PinN) values(?,?,?,?,?,?,?,?,?,?,?,?");
 		$stmt->bind_param("ssssssssssss",$FirstN,$LastN,$FatherN,$MotherN,$Gender,$Email,$hobbies,$Occupation,$Village,$CityC,$AccountN,$PinN);
 		$stmt->execute();
 		echo "registration successfully.....";
 		$stmt->close();
 		$conn->close();
 		
$FirstN = $_POST['FirstN'];
$LastN = $_POST['LastN'];
$FatherN = $_POST['FatherN'];
$MotherN = $_POST['MotherN];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$hobbies = $_POST['hobbies'];
$Occupation = $_POST['Occupation'];
$Village = $_POST['Village'];
$CityC = $_POST['CityC'];
$AccountN = $_POST['AccountN'];
$PinN = $_POST['PinN'];







 	}

 }








?>