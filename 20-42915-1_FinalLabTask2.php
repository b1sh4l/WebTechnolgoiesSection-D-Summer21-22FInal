<?php
$servername="localhost";
$username="root";
$password="";
$dbname="section_d";
$name="Bruce";
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
	$q="select * from Student";

	$result=$conn->query($q);
	if($result->num_rows>0)
	{
		/*while($row=$result->fetch_assoc())
		{
			echo "ID:".$row["ID"]."Name:".$row["Name"]."Email:".$row["Email"]."CGPA:".$row["CGPA"]."<br>";

		}*/
		echo "<table>";
		echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Name</td>";
        echo "<td>Email</td>";
        echo "<td>CGPA</td>";
        echo "</tr>";
		while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>", $row['ID'] ,"</td>";
        echo "<td>", $row['Name'] ,"</td>";
        echo "<td>", $row['Email'] ,"</td>";
        echo "<td>", $row['CGPA'] ,"</td>";
        echo "</tr>";
    }
    echo "</table>";
	}
	else
	{
		echo "no table data";
	}
}
	$conn->close();
?>