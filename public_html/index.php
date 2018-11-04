<h1>Hello World Application!</h1>
<br>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    $databaseflag = True;
} else {
    $conn->close();
}

$dbname = "myDB";
$conn2 = new mysqli($host, $user, $pass, $dbname);
// sql to create table
$sqlt = "CREATE TABLE Message (
message VARCHAR(30) NOT NULL
)";

if ($conn2->query($sqlt) === TRUE) {
    $tableflag = True;
}

$sqli = "INSERT INTO Message (message)
VALUES ('Hello World')";

if ($conn2->query($sqli) === TRUE) {
    $Newrecord = True;
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn2->error;
}


$sqls = "SELECT message FROM Message";
$result = $conn2->query($sqls);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "Say: " . $row["message"]. " " . "<br>";
		if (1 === 1){
			echo "<br>";
			break;
		}
		}
} else {
    echo "0 results";
}

$conn2->close();
?>