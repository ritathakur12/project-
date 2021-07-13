<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$user_name = filter_input(INPUT_POST, 'user_name');
$email  = filter_input(INPUT_POST, 'email ');
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
$sql = "INSERT INTO userinfo(user_name,email,phonenumber,password)values ('$user_name','$email', '$phonenumber', '$password')";
if ($conn->query($sql)){
echo "YOUR ACCOUNT HAS BEEN CREATED  SUCCESSFULLY";
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