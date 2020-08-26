<html>
<body>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$link = mysqli_connect("localhost", "root", "", "test");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS gusers(UniqueID varchar(20) PRIMARY KEY,Name varchar(50),MailID varchar(30),PhoneNo varchar(15),RFID varchar(20) UNIQUE,VehicleNo varchar(20))";
mysqli_query($link, $sql);

$which = $_POST["uid"];

if(isset($_POST["type0"])){
    $change = $_POST["name"];
    $sql = "UPDATE gusers SET Name = '$change' WHERE UniqueID = '$which'";
    mysqli_query($link, $sql);
}
if(isset($_POST["type1"])){
    $change = $_POST["mail"];
    $sql = "UPDATE gusers SET MailID = '$change' WHERE UniqueID = '$which'";
    mysqli_query($link, $sql);
}
if(isset($_POST["type2"])){
    $change = $_POST["phno"];
    $sql = "UPDATE gusers SET PhoneNo = '$change' WHERE UniqueID = '$which'";
    mysqli_query($link, $sql);
}
if(isset($_POST["type3"])){
    $change = $_POST["rfid"];
    $sql = "UPDATE gusers SET RFID = '$change' WHERE UniqueID = '$which'";
    mysqli_query($link, $sql);
}
if(isset($_POST["type4"])){
    $change = $_POST["vno"];
    $sql = "UPDATE gusers SET VehicleNo = '$change' WHERE UniqueID = '$which'";
    mysqli_query($link, $sql);
}
?>
<script src="js/main.js"></script>
<script>
    update();   
</script>
</body>
</html>