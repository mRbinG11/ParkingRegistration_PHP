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

$which = $_POST["type"];
if($which == "0"){
    $key = $_POST["uid"];
    $sql = "CREATE OR REPLACE VIEW searchres AS SELECT * FROM gusers WHERE UniqueID = '$key'";
} else if($which == "1"){
    $key = $_POST["name"];
    $sql = "CREATE OR REPLACE VIEW searchres AS SELECT * FROM gusers WHERE Name = '$key'";
} else if($which == "2"){
    $key = $_POST["rfid"];
    $sql = "CREATE OR REPLACE VIEW searchres AS SELECT * FROM gusers WHERE RFID = '$key'";
} else if($which == "3"){
    $key = $_POST["vno"];
    $sql = "CREATE OR REPLACE VIEW searchres AS SELECT * FROM gusers WHERE VehicleNo = '$key'";
}
mysqli_query($link, $sql);
$_SESSION["key"] = $key;
?>
<script src="js/main.js"></script>
<script>
    search();    
</script>
</body>
</html>