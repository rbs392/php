<?php
header('content-type:application/json');
/*
$username 	= "bala";
$password 	= "bala";
$servername = "localhost";
$db 		= "sprugs";

*/


$username 	= "a1533421_bala";
$password 	= "ywnkmp@123";
$servername = "mysql3.000webhost.com";
$db 		= "a1533421_content";


$dsn = "mysql:host=".$servername.";dbname=".$db;


try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM contents_test";
	
	$result = $conn->query($sql);

	$arr = $result->fetchAll();


	var_dump($result);

	var_dump($conn);

	
	foreach ($arr as $row) {
		print("\n\n\n".$row['title']."\n".$row['content_desc']."<br/><br/>");

		/*foreach ($row as $key) {
			print_r($key);
		}*/
	}
    
	$conn=null;
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>