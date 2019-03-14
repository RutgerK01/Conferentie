<?php include('./include.php');?>
<?php

if(isset($_GET["action"])){
    if($_GET["action"] == "speaker"){
      $action='speaker';
    }
    if($_GET["action"] == "user"){
      $action='user';
    }
  }

$Fname = $_POST['Fname'];
$In = $_POST['In'];
$Lname = $_POST['Lname'];
$email = $_POST['email'];
$Remail = $_POST['Remail'];
$ww = $_POST['ww'];
$Rww = $_POST['Rww'];
$accpt = $_POST['accpt'];


if(!empty($In)){
    $FullName = $Fname . " " . $In . " " . $Lname;
} else{
    $FullName = $Fname . " " . $Lname;
}

echo('name= ' . $FullName . '<br>' . 'Email= ' . $email . '<br>' . 'Remail= ' . $Remail . '<br>' . 'Pass= ' . $ww . '<br>' . 'Rww= ' . $Rww . '<br>' . 'Accepted= ' . $accpt . '<br>');

if(empty($accpt)){
    if($action == 'speaker'){
        header('location: ./registerform.php?action=speakerACPT');
    }else{
        header('location: ./registerform.php?action=userACPT');
    }
}else{
    if(empty($ww) OR empty($Rww)){
        if($action == 'speaker'){
            header('location: ./registerform.php?action=speakerWWE');
        }else{
            header('location: ./registerform.php?action=userWWE');
        }
    }else{
        if(empty($email) OR empty($Remail)){
            if($action == 'speaker'){
                header('location: ./registerform.php?action=speakerMailE');
            }else{
                header('location: ./registerform.php?action=userMailE');
            }
        }else{
            if($ww == $Rww){
                $pass = $ww;
                if($email == $Remail){
                    $mail = $email;
                    $check = "SELECT `email` FROM `login` WHERE `email` = '{$email}'";
                            $res = $conn->query($check);
                            $row = $res->fetch_assoc();
                                if($email==$row['email']) // change it to just else
                                {
                                    if($action == 'speaker'){
                                        header('location: ./registerform.php?action=speakerWrong');
                                    }else{
                                        header('location: ./registerform.php?action=userWrong');
                                    }
                                }
                                else{
                                    $sql = "INSERT INTO `login`(
                                        `name`, 
                                        `email`, 
                                        `password`, 
                                        `activated`, 
                                        `rights`) 
                                VALUES ('{$FullName}',
                                        '{$mail}',
                                        AES_ENCRYPT('$pass', 'conf123'),
                                        'no',
                                        'user')";
                            if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                            header("location: ./index.php");
                            ob_end_flush();
                            } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                            $conn->close();   
                    }
                    
                }else{
                    echo('fout: wachtwoord<br>');
                    if($action == 'speaker'){
                        header('location: ./registerform.php?action=speakerMail');
                    }else{
                        header('location: ./registerform.php?action=userMail');
                    }
                }
            }else{
                echo('fout: wachtwoord<br>');
                if($action == 'speaker'){
                    header('location: ./registerform.php?action=speakerWW');
                }else{
                    header('location: ./registerform.php?action=userWW');
                }
            }
        }
    }
}
?>