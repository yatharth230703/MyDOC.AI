<?php
include "connectdb.php";
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$add= $_POST["myVariable"];
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$sex= $_POST["sex"];
$heredit = $_POST["heredit"];
$chronic = $_POST["chronic"];
$allergy = $_POST["allergy"];
$ongoing = $_POST["medic"];
echo $email . $add;
$sql= "SELECT `Eth_Address` FROM `per_info`";
$result = mysqli_query($conn,$sql);
$m=0;
while($row = mysqli_fetch_assoc($result)){
if($add==$row["Eth_Address"]){
ECHO "USER ALREADY REGISTERED";
$m++;
sleep(3);
header("Location: http://mydocai.epizy.com/");
}
}
if($m==0){
    $sql = "INSERT INTO `per_info` (`Email`, `Name`, `Password`, `Eth_Address`, `SNo` ,`DOB`, `Sex`, `Phone`) VALUES ('$email', '$name', '$password', '$add', NULL, '$dob', '$sex', '$phone');";
    $result = mysqli_query($conn,$sql);
    $sql2 = "INSERT INTO `med_info` (`Eth_Address`, `Height`, `Weight`, `Heriditary`, `Chronic` ,`Allergies`, `Ongoing_med`) VALUES ('$add', $height, $weight, '$heredit', '$chronic', '$allergy','$ongoing');";
    $result2 = mysqli_query($conn,$sql2);
header("Location: http://mydocai.epizy.com/login.php");
}
?>
