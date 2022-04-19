<?php

$username = "datavis2021";
$password = "datavis2021";

if ($_POST['username'] == $username && $_POST['password'] == $password ) {
    echo "<script> alert('Login Successed!');parent.location.href='member.php'; </script>";
}
else {
    echo "<script> alert('Login Failed');parent.location.href='login.php';</script>";
}
?>