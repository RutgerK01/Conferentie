<?php
    include "./test/barcode128.php";
    include("./include.php");

    $meal       = $_SESSION["meal"];
    $ticket     = $_SESSION["ticket"];

    if(isset($_SESSION["amount"])){
        $amount = $_SESSION["amount"];
    }else{
        $amount = '1';
    }

    $tickets    = $ticket . '/' . $meal;

    $sql = "INSERT INTO `cards`(`Uid`, `Ticket`, `Amount`) VALUES ('{$Sid}','{$tickets}','{$amount}')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
                header("location: ./index.php");
                ob_end_flush();
                    $to = $Semail;
                    $subject = 'Bought a ticket';
                    $message = '<html>
                                    <head>
                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                            <title>Tickets bought</title>
                                                   </head>
                                                        <body>
                                                          <p>Hi,</p><br>
                                                            <p>Thank you.</p><br>
                                                            <p>You need this to enter</p>
                                                            <?php
                                                                echo "<center><div style="height: 30%; width: 50%;">";
                                                                echo "<p>".bar128(stripcslashes($total))."</p>";
                                                                echo "</div></center>";
                                                                ?> 
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
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
?>