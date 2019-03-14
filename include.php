<?php
    session_start();
    include('./navT.php');
    include('./Connect_DB.php');
?>

<link rel="stylesheet" type="text/css" href='./CSS/style.css'>
<link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">

<?php if(isset($_SESSION['id'])){
        $Sid      = $_SESSION['id'];
        $Sname    = $_SESSION['name'];
        $Semail   = $_SESSION['email'];
        $Rrights  = $_SESSION['rights'];
    }?>