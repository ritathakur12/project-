<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST,'email');
$phonenumber = filter_input(INPUT_POST, 'phonenumber');
$password = filter_input(INPUT_POST, 'password');



$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "account_page";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO user_info(username,email,phonenumber,password)values ('$username','$email', '$phonenumber', '$password')";
if ($conn->query($sql)){
echo "YOUR ACCOUNT HAS BEEN CREATED  SUCCESSFULLY" ;
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>
</center>
</body>
</html>