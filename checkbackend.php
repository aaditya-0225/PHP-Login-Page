


<?php

//session_start()

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
// echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

//	$firstName = $_REQUEST['fName'];
//	$lastName = $_REQUEST['lName'];
	$Email = $_REQUEST['uMail'];
//	$Mobile = $_REQUEST['uMobile'];
	$Password = $_REQUEST['uPassword'];
/*	echo $firstName;
	echo $lastName;
	echo $Email;
	echo $Mobile;
	echo $Password;

	mysqli_query($conn,"INSERT INTO `users` (`sno`, `firstname`, `lastname`, `email`, `mobile`, `password`) VALUES (NULL, '$firstName', '$lastName', '$Email', '$Mobile', '$Password')") or die("Query Failed"); 

//if(isset($_POST["name"], $_POST["password"])) 
        {     

            $name = $_POST["name"]; 
            $password = $_POST["password"]; 

            $result = mysql_query("SELECT password FROM Users WHERE username = '".$name."'" AND password = '".$password."'");
            

            if($name == $result2 && $password == $result1) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["naam"] = $name; 
            }
            else
            {
                echo'The username or password are incorrect!';
            }
    } 
*/

$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$Email' AND password='$Password'") ;

$row= mysqli_fetch_assoc($result);

echo $row['firstname']; 
  $rowcount = mysqli_num_rows($result);
  

  if($rowcount == 1)
  {
  	header("Location: success.php");	 
  }
}
?>