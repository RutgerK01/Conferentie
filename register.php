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
$day = $_POST['day'];
$month = $_POST['month'];
$year  = $_POST['year'];
$lcode = $_POST['Lcode'];
$phone = $_POST['phone'];

if($action == 'speaker'){
    $topic = $_POST['Topic'];
    $resume = $_POST['Resume'];
    $tijd = $_POST['days'];
}

if(isset($tijd)){
    if($tijd == 'FriH'){
        $dayd = 'hele vrijdag';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
    elseif($tijd == 'FriE'){
        $dayd = 'vrijdag middag';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }    
    elseif($tijd == 'FriA'){
        $dayd = 'vrijdag avond';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
    elseif($tijd == 'SatH'){
        $dayd = 'hele zaterdag';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
    elseif($tijd == 'SatM'){
        $dayd = 'zaterdag ochtend';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
    elseif($tijd == 'SatE'){
        $dayd = 'zaterdag middag';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
    elseif($tijd == 'SatA'){
        $dayd = 'zaterdag avnond';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
    elseif($tijd == 'SunH'){
        $dayd = 'hele zondag';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
    elseif($tijd == 'All'){
        $dayd = 'maakt niet uit';
        echo($topic . '<br>' . $resume . '<br>' . $dayd);
    }
}

$phonenumber = ($lcode . ' ' . $phone);
$birth = ($day . "/" . $month . "/" . $year);

if(!empty($In)){
    $FullName = $Fname . " " . $In . " " . $Lname;
} else{
    $FullName = $Fname . " " . $Lname;
}

echo('name= ' . $FullName . '<br>' . 'Email= ' . $email . '<br>' . 'Remail= ' . $Remail . '<br>' . 'Pass= ' . $ww . '<br>' . 'Rww= ' . $Rww . '<br>' . 'Accepted= ' . $accpt . '<br>' . 'birth= ' . $birth . '<br>' . $phonenumber . '<br>');


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
                                        `rights`,
                                        `birth`,
                                        `phone`) 
                                VALUES ('{$FullName}',
                                        '{$mail}',
                                        AES_ENCRYPT('$pass', 'conf123'),
                                        'no',
                                        '{$action}',
                                        '{$birth}',
                                        '{$phonenumber}')";

                                        $to = $mail;
                                        $subject = 'Thanks for tegistering please activate your acount';
                                        $message = '<html>
                                                        <head>
                                                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                                            <title></title>
                                                        </head>
                                                        <body>
                                                          <p>Hi,</p><br>
                                                            <p>Thank you.</p><br>
                                                            <p>There is one more thing to do:</p>
                                                          <p><a href="./index.php">Click here</a> to activate your account</p>
                                                        </body>
                                                    </html>';

                                        $from = "Conference@mail.com";
                                        //$Bcc = "example@example.com";

                                        // To send HTML mail, the Content-type header must be set
                                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                                        // Additional headers
                                        $headers .= 'To: ' .$to. "\r\n";
                                        $headers .= 'From: ' .$from. "\r\n";
                                        //  $headers .= 'Bcc: '.$Bcc. "\r\n";

                                        mail($to,$subject,$message,$headers);
                            if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                                if($action == 'user'){
                                    header("location: ./index.php");
                                    ob_end_flush();}
                                else{$sql= "INSERT INTO  `shows`(
                                                        `topic`,
                                                        `resume`,
                                                        `beschikbaar`,
                                                        `email`)
                                                VALUES  ('{$topic}',
                                                         '{$resume}',
                                                         '{$dayd}',
                                                         '{$mail}')";

                                
                                }if ($conn->query($sql) === TRUE) {
                                    echo "New record created successfully";
                                            header("location: ./index.php");
                                            ob_end_flush();
                                }
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