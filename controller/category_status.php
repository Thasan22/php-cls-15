<?php
include_once "../database/env.php";

$id = $_REQUEST['id'];
$status = $_REQUEST['status'];

if($status == false){
    $query = "UPDATE categories SET status=true WHERE id = '$id'";
}else if($status == true){
    $query = "UPDATE categories SET status=false WHERE id = '$id'";
}

$res = mysqli_query($db_connect,$query);
if($res){
    header("location: ../backend/categories.php");
}