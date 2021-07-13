<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$NAME = filter_input(INPUT_POST, 'NAME');
$GENDER= filter_input(INPUT_POST,'GENDER');
$DOB = filter_input(INPUT_POST, 'DOB');
$Date_RECIEVING = filter_input(INPUT_POST, 'Date_RECIEVING');
$BREED = filter_input(INPUT_POST, 'BREED');
$EMAIL = filter_input(INPUT_POST, 'EMAIL');
$PHONE_NUMBER = filter_input(INPUT_POST, 'PHONE_NUMBER');
$ADDRESS = filter_input(INPUT_POST, 'ADDRESS');


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
$sql = "INSERT INTO booked(NAME,GENDER,DOB,Date_RECIEVING,BREED,EMAIL,PHONE_NUMBER,ADDRESS)values ('$NAME','$GENDER', '$DOB', '$Date_RECIEVING','$BREED','$EMAIL','$PHONE_NUMBER','$ADDRESS')";
if ($conn->query($sql)){
echo "YOUR DOG  HAS BEEN BOOKED  SUCCESSFULLY";
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