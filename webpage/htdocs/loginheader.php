<?php
include "connectdb.php";
$email = $_POST["email"];
$x= $_POST["password"];
$add = $_POST['myVariable'];

if (is_null($add)) {
  $password = hash('md5',$x);
$sql= "SELECT `Email`,`Password` FROM `per_info`";
$result = mysqli_query($conn,$sql);
$sqlo= "SELECT `Name`,`Password`,`Eth_Address` FROM `per_info` WHERE `Email`='$email'";
$result1 = mysqli_query($conn,$sqlo);
set_time_limit(0);
$m=0;
$crow = mysqli_fetch_assoc($result1);
while($row = mysqli_fetch_assoc($result)){
if($row["Email"]==$email){
    if($row["Password"]==$password){
$m++;
session_start();
$_SESSION['email'] = $email;
$_SESSION['name'] = $crow["Name"];
$_SESSION['eth'] = $crow["Eth_Address"];
header("Location: http://mydocai.epizy.com/profile.php");
}}
}} 
else {
  $sqli = "SELECT `Name`, `Email` FROM `per_info` where `Eth_Address`=`$add`;";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $m++;
session_start();
$_SESSION['email'] = $row["Email"];
$_SESSION['name'] = $row["Name"];
$_SESSION['eth'] = $add;
header("Location: http://mydocai.epizy.com/profile.php");
};

if($m==0){
    session_start();
$_SESSION['ok']=2;
header("Location: http://mydocai.epizy.com/index.php");
}
?>