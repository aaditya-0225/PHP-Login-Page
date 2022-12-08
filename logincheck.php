
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mriirs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST")

 {

	$firstName = $_REQUEST['fName'];
	$lastName = $_REQUEST['lName'];
	$Email = $_REQUEST['uMail'];
	$Mobile = $_REQUEST['uMobile'];
	$Password = $_REQUEST['uPassword'];
	$z = password_hash ($Password ,PASSWORD_DEFAULT );
	echo $firstName; 
	echo $lastName;
	echo $Email;
	echo $Mobile;
	echo $z;

	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$Email'") ;
   
    $x=mysqli_num_rows($result);


	if ( $x == 0 )
	{
		

	mysqli_query($conn,"INSERT INTO `users` (`sno`, `firstname`, `lastname`, `email`, `mobile`, `password`) VALUES (NULL, '$firstName', '$lastName', '$Email', '$Mobile', '$z')") or die("Query Failed"); 
	}

	else 
	{
		echo " email exists " ;
	}

}

?>