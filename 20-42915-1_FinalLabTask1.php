<?php
$servername="localhost";
$username="root";
$password="";
$dbname="section_d";
$name="Sadia";
//$email="bruce@gmail.com";
$email="bruce006@gmail.com";
$cgpa=4.00;

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//$q="INSERT INTO Student(Name,Email,CGPA) VALUES('".$name."','".$email."',".$cgpa.")";
	$q="UPDATE Student SET Name='".$name."' WHERE ID=42541";

	$result=$conn->query($q);
	if($result)
		echo "Data updated successfully";
	else
		echo "Data not updated";
}
	$conn->close();
?>