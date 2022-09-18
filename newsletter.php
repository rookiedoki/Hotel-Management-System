<?php

$SName = "localhost";
$UName = "root";
$PWord = "";
$MyDB = "hotel";

$myConn = mysqli_connect($SName,$UName,$PWord,$MyDB); //create a variable inside the parameter
if(!$myConn){
    header("Location:onerror.php");
}

$v_email = $_POST['myEmail'];
$elog = date("D M d, Y");

$my_sql = "INSERT INTO nletter(nl_email,nl_log) VALUES ('$v_email','$elog')";
$result = mysqli_query($myConn, $my_sql);
if($result){    
    header("Location:index.php");
}

?>