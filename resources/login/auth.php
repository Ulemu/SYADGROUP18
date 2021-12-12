<?php
$hn = '127.0.0.1:3306';
    $db = 'elitetrade';
    $un = 'root';
    $pw = 'earthMusic';
$conn = new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);

$usn = $_POST['username'];
$pwd = $_POST['password'];

if (empty($usn) || empty($pwd)) {
	include('loginerror.php');
	

}elseif (isset($_POST['username']) && isset($_POST['password']))
{
	
	$query = "SELECT username, password FROM auth_data WHERE username = '$usn' and password = '$pwd'";
	$result = $conn->query($query);
		if(!$result) die($conn->error);

		$rows = $result->num_rows;
			if ($rows > 0) {
				session_start();
				$_SESSION['authenticated'] = $usn;
				header('Location: ../client/homepage.php');
			}elseif ($rows == 0) {
				include('auth_error.php');
				

			}
}
?>