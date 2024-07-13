<?php
require_once "inc_conn.php";

$name = trim($_REQUEST["name"]);
$fname = trim($_REQUEST["fname"]);
$mname = trim($_REQUEST["mname"]);
$dob = trim($_REQUEST["dob"]);
$roll_no = trim($_REQUEST["roll_no"]);
$enroll_no = trim($_REQUEST["enroll_no"]);
$start_year = trim($_REQUEST["start_year"]);
$pass_year12 = trim($_REQUEST["pass_year12"]);
$couse_attend = trim($_REQUEST["couse_attend"]);
$mobile = trim($_REQUEST["mobile"]);
$email = trim($_REQUEST["email"]);
$convo_att = trim($_REQUEST["convo_att"]);

if($convo_att=="Yes")
{
	$convo_attend_with = trim($_REQUEST['convo_attend_with']);
}
else
{
	$convo_attend_with = "";
}

$check = "SELECT * FROM convo_registration where roll_no ='".$roll_no."'";

$checkmysq = mysqli_query($conn,$check);
if(mysqli_num_rows($checkmysq)>0){
    $insert='';
}else{

$sql = " insert into convo_registration ( name, fname , mname , dob , roll_no , enroll_no , start_year , pass_year12 , couse_attend , mobile , email , convo_att , convo_attend_with ) values ( '$name' , '$fname' , '$mname' , '$dob' , '$roll_no' , '$enroll_no' , '$start_year' , '$pass_year12' , '$couse_attend' , '$mobile' , '$email' , '$convo_att' , '$convo_attend_with' )";
//die($sql);
$insert = mysqli_query($conn,$sql);
}
//$id = mysqli_insert_id();
if($insert)
{
	//$msg = "Successfully Added ";
	header("location:thankyou.php");
}
else
{
	$msg = "Data Not  Added Due To some error";
	header("location: convo-registration-process.php?msg=$msg");
}
?>