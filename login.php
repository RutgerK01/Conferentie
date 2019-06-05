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

    $email = $_POST['email'];
    $ww = $_POST['ww'];

    $data = "SELECT `email` ,  
                     AES_DECRYPT(`password` , 'conf123') AS pass,
                    `id` ,
                    `name` ,
                    `rights`
            FROM `login` WHERE `email` = '{$email}'";
        $res = $conn->query($data);
        $row = $res->fetch_assoc();

    $id     =  $row['id'];
    $name   =  $row['name'];    
    $mail   =  $row['email'];
    $pass   =  $row['pass'];
    $rights =  $row['rights'];

    echo($pass . '<br>' . $mail . '<br>' . $name . '<br>' . $id . '<br>' . $rights);

    if($ww == $pass){
        $_SESSION['id']     = $id;
        $_SESSION['name']   = $name;
        $_SESSION['email']  = $email;
        $_SESSION['rights'] = $rights;

        if($rights == "speaker"){
            $speak = "SELECT `id` FROM `shows` WHERE `email` = '{$email}'";
            $result = $conn->query($speak);
            $row1 = $result->fetch_assoc();

            $ids = $row1['id'];

            $_SESSION['ids'] = $ids;
        }    

        header('location: ./index.php');
    }else{
        if($action == 'speaker'){
            header('location: ./loginform.php?action=speakerWW');
        }else{
            header('location: ./loginform.php?action=userWW');
        }
    }
?>