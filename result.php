<?php
session_start();

 $status=$_REQUEST['payment_status'];
 $_SESSION['UID'];

$temp=$_SESSION['TEMP'];

if($status=="Credit"){
   echo "SUCCESS";
}else{
   echo "FAILED";
}

?>