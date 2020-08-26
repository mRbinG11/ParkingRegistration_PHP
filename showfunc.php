<?php
function showfunc() {
    $link = mysqli_connect("localhost", "root", "", "test");
					 
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql = "CREATE TABLE IF NOT EXISTS gusers(UniqueID varchar(20) PRIMARY KEY,Name varchar(50),MailID varchar(30),PhoneNo varchar(15),RFID varchar(20) UNIQUE,VehicleNo varchar(20))";
    mysqli_query($link, $sql);

    $sql = "SELECT COUNT(*) FROM gusers";
    $res = $link->query($sql);
    $cnt = $res->fetch_row();
    echo "Number of Registered Users: ".$cnt[0]."<br>";

    $sql = "SELECT * FROM gusers";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        $slno = 1;
        echo "<table id=\"data\"><tr><th>Sl. No.</th><th>UniqueID</th><th>Name</th><th>MailID</th><th>PhoneNo</th><th>RFID</th><th>VehicleNo</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$slno."</td><td>".$row["UniqueID"]."</td><td>".$row["Name"]."</td><td>".$row["MailID"]."</td><td>".$row["PhoneNo"]."</td><td>".$row["RFID"]."</td><td>".$row["VehicleNo"]."</td></tr>";
            ++$slno;
        }
        echo "</table>";
    } else {
        echo "No users registered yet!";
    }
}
?>