<?php
require_once "db.php";

$hash=password_hash("123", PASSWORD_DEFAULT);
 $res=password_verify("123", $hash);
//  echo $res;
// echo $hash;
// $passw=[
// ,"65334",
// ];