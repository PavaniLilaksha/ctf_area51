<?php
include_once 'db.php';
$databse = new db();

if ($_GET['id']=="login"){
    $username=$_GET['email'];
    $password=$_GET['password'];

    $con = $databse->getConnection();

    $connection = $con;
    if($con){
        $rs=$databse->Search("SELECT * from login where username='$username' and password='$password'");
        if ($row=$rs->fetch(PDO::FETCH_ASSOC)){
            echo "true";
        }else{
            echo "false";
        }
    }else{
        echo "false";
    }
}else if($_GET['id']=="submit_1"){
    $level_1=$_GET['token'];
    $rs=$databse->Search("select * from token where token='$level_1'");
    if ($row=$rs->fetch(PDO::FETCH_ASSOC)){
        echo "1";
    }else{
        echo "false";
    }
}else if($_GET['id']=="submit_2"){
    $level_2=$_GET['token_2'];
    $rs=$databse->Search("select * from token where token='$level_2'");
    if ($row=$rs->fetch(PDO::FETCH_ASSOC)){
        echo "2";
    }else{
        echo "false";
    }
}else if($_GET['id']=="submit_3"){
    $level_3=$_GET['token'];
    $rs=$databse->Search("select * from token where token='$level_3'");
    if ($row=$rs->fetch(PDO::FETCH_ASSOC)){
        echo "3";
    }else{
        echo "false";
    }
}else if($_GET['id']=="submit_4") {
    $level_4 = $_GET['token'];
    $rs=$databse->Search("select * from token where token='$level_4'");
    if ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        echo "4";
    } else {
        echo "false";
    }
}else if($_GET['id']=="submit_6") {
    $level_6 = $_GET['token'];
    $rs = $databse->Search("select * from token where token='$level_6'");
    if ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        echo "6";
    } else {
        echo "false";
    }
}else if($_GET['id']=="submit_7") {
    $level_7 = $_GET['token'];
    $rs = $databse->Search("select * from token where token='$level_7'");
    if ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        echo "7";
    } else {
        echo "false";
    }
}

else if($_GET['id']=="submit_8") {
    $level_8 = $_GET['token'];
    $rs = $databse->Search("select * from token where token='$level_8'");
    if ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        echo "8";
    } else {
        echo "false";
    }
}

