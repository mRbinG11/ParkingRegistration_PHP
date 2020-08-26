<html>
<body>
<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
$link = mysqli_connect("localhost", "root", "", "test");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS gusers(UniqueID varchar(20) PRIMARY KEY,Name varchar(50),MailID varchar(30),PhoneNo varchar(15),RFID varchar(20) UNIQUE,VehicleNo varchar(20))";
mysqli_query($link, $sql);

$sql = "SELECT COUNT(*) FROM gusers";
$res1 = $link->query($sql);

$which = $_POST["type"];
if($which == "0"){
    $key = $_POST["uid"];
    $sql = "DELETE FROM gusers WHERE UniqueID = '$key'";
} else if($which == "1"){
    $key = $_POST["name"];
    $sql = "DELETE FROM gusers WHERE Name = '$key'";
} else if($which == "2"){
    $key = $_POST["rfid"];
    $sql = "DELETE FROM gusers WHERE RFID = '$key'";
} else if($which == "3"){
    $key = $_POST["vno"];
    $sql = "DELETE FROM gusers WHERE VehicleNo = '$key'";
}
mysqli_query($link, $sql);
$sql = "SELECT COUNT(*) FROM gusers";
$res2 = $link->query($sql);
$_SESSION["success"] = $res1 - $res2;
?>
<script src="js/main.js"></script>
<script>
    del();      
</script>
</body>
</html>