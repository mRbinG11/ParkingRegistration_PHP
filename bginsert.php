<html>
<body>
<?php

$link = mysqli_connect("localhost", "root", "", "test");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// $sql1 = "CREATE TABLE IF NOT EXISTS gusers(UniqueID varchar(20),Name varchar(50),MailID varchar(30),PhoneNo varchar(15),RFID varchar(20),VehicleNo varchar(20))";
$sql1 = "CREATE TABLE IF NOT EXISTS gusers(UniqueID varchar(20) PRIMARY KEY,Name varchar(50),MailID varchar(30),PhoneNo varchar(15),RFID varchar(20) UNIQUE,VehicleNo varchar(20))";
mysqli_query($link, $sql1);
// $tmp = "CREATE UNIQUE INDEX unind ON gusers(VehicleNo) WHERE VehicleNo IS NOT NULL";

$uid = $_POST["uid"];
$name = $_POST["name"];
$mailid = $_POST["mailid"];
$phno = $_POST["phno"];
$rfid = $_POST["rfid"];
if ($_POST["type"]=="yes") {
    $vno = $_POST["vno"];
    $sql2 = "INSERT INTO gusers VALUES('$uid','$name','$mailid','$phno','$rfid','$vno')";
    if(mysqli_query($link, $sql2)){
        // echo "Inserted Successfully"."<br>";
    } else{
        echo "ERROR: Insertion Failed!"."<br>".mysqli_error($link);
    }
}
else{
    $vno = NULL;
    $sql2 = "INSERT INTO gusers VALUES('$uid','$name','$mailid','$phno','$rfid',NULL)";
    if(mysqli_query($link, $sql2)){
        // echo "Inserted Successfully"."<br>";
    } else{
        echo "ERROR: Insertion Failed!"."<br>".mysqli_error($link);
    }
}

mysqli_close($link);
?>
<script src="js/main.js"></script>
<script>
    home();
</script>
</body>
</html>