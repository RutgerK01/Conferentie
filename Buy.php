<?php include('./include.php');?>
<?php

$ticket = 'SELECT * FROM `tickets`';

      $result = $conn->query($ticket);
      $row = $result->fetch_assoc();

      $Fri = $row['Fri'];
      $Sat = $row['Sat'];
      $Sun = $row['Sun'];

if(isset($_POST["day"])){
    if($_POST["day"] == "Fri"){
        $price = '45'; 
        $ticket = 'Friday';
        $day = 'Friday'; 
    }
    if($_POST["day"] == "Sat"){
        $price = '60';
        $ticket = 'Saterday';
        $day = 'Saterday';
    }
    if($_POST["day"] == "Sun"){
        $price = '30';
        $ticket = 'Sunday';
        $day = 'Sunday';
    }
    if($_POST["day"] == "week"){
        $price = '80';
        $ticket = 'Weekend';
        $day = 'Saterday and Sunday';
    }
    if($_POST["day"] == "Pas"){
        $price = '100';
        $ticket = 'Paspartoe';
        $day = 'all three days';
    }
    $amount = $_POST["amount"];
}

if(isset($_GET["action"])){
    if($_GET["action"] == "Fri"){
        $price = '45'; 
        $ticket = 'Friday';
        $day = 'Friday';
    }
    if($_GET["action"] == "Sat"){
        $price = '60';
        $ticket = 'Saterday';
        $day = 'Saterday';
    }
    if($_GET["action"] == "Sun"){
        $price = '30';
        $ticket = 'Sunday';
        $day = 'Sunday';
    }
    if($_GET["action"] == "Week"){
        $price = '80';
        $ticket = 'Weekend';
        $day = 'Saterday and Sunday';
    }
    if($_GET["action"] == "Pas"){
        $price = '100';
        $ticket = 'Paspartoe';
        $day = 'all three days';
    }    
    if($_GET["action"] == "test"){
        $test = true;
    }
  }

 $Lunch = ""; 
 $Diner = "";
 $food  = "";
 $cost  = "";
 $test  = "";

if(isset($_POST['Lunch'])){  
  $Lunch = $_POST['Lunch'];
}

if(isset($_POST['Diner'])){  
    $Diner = $_POST['Diner'];
}

if(isset($_POST['food'])){
    $food = $_POST['food'];
}

if($Lunch == 'Lunch' && $Diner == 'Diner'){
    $meal = ($Lunch . "+" . $Diner);
}
elseif($food == 'Lunch+Diner'){
    $meal = ($food);
}
elseif($food == 'Diner'){
    $meal = ($food);
}
elseif($food == 'Lunch'){
    $meal = ($food);
}
elseif($Diner == 'Diner'){
    $meal = ($Diner);
}
else{
    $meal = ($Lunch); 
}

if($meal == 'Lunch+Diner'){
    $cost   = '50';
    $total  = $price + $cost;
    $time   = 'get your Lunch between 12 and half 12 and Diner between half 6 and 8';
}else if($meal == 'Lunch'){
    $cost   = '20';
    $total  = $price + $cost;
    $time   = 'between 12 en half 2';
}else if($meal == 'Diner'){
    $cost   = '30';
    $total  = $price + $cost;
    $time   = 'between half 6 and 8';
}else{
    $total = $price;
    $meal = 'None';
}

if(!isset($amount)){
    $chngA = '1';
}else{
    $chngA = $amount;

    $total = $price * $amount + $cost * $amount;

    $_SESSION["amount"] = $amount;
}

    $_SESSION["ticket"] = $ticket;
    $_SESSION["meal"]   = $meal;
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./images/conferentie.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Conferentie</title>
  </head>
  <body>
    <h1 id="pageN">Buy ticket</h1>
    <form id="form" action="buy.php?action=test" method="post">
    <div class="row">
        <div class="col-4"></div>
        <div id="ticketCol" class="col-4">
            <center><h2>Ticket</h2></center>
            <hr id="hr">
                <div class="row">
                    <div class="col-4"><h5>Owner:</h5></div>
                    <div class="col-8"><?php echo($Sname) ?></div>
                </div>
                <div class="row">
                    <div class="col-4"><h5>Ticket type:</h5></div>
                    <div class="col-8">
                        <p id="chng1"><?php echo($ticket)?> ticket</p>
                        <p>What means you are allowed to enter on <?php echo($day)?> and will cost you €<?php echo($price)?>.-</p>
                    </div>
                    </div>
                
                    <?php if($meal == 'Lunch' || $meal == 'Diner' || $meal == 'Lunch+Diner'){
                        echo('<div class="row">
                        <div class="col-4"><h5>Meal:</h5></div>
                        <div class="col-8">
                        <p id="chng2">'. $meal .'</p>
                        <p id="chng3">What means you can get food in the diner area '. $time .' this will add €'. $cost .'.- to the price of your ticket.</p>
                        </div>');
                    }else{
                        echo('<div class="row">
                        <div class="col-4"><h5>Meal:</h5></div>
                        <div class="col-8">
                        <p id="chng2">'. $meal .'</p>
                        <p id="chng3">You did not select Lunch or Diner so you will have to get you food some where else or take some with you.</p>
                        </div>');
                    }?>
                </div>
                <div class="row">
                    <div class="col-4"><h5>Amount</h5></div>
                    <div class="col-8"><p id="chng4"><?php echo($chngA);?></p></div>
                    <br>
                </div>
                <div class="row">
                    <div class="col-4"><h5>Change ticket</h5></div>
                    <div class="col-8"><p id="chng"><button onclick="myFunction()" type="button" class="btn btn-dark">Click here</button></p></div>
                </div>
                <hr id="hr">
                <div id="bottom" class="row">
                        <div class="col-4"><h5>Total Price</h5></div>
                        <div class="col-8">€<?php echo($total)?>.-  <button onclick='nextpage()' type='button' class='btn btn-dark btn-block'>Confirm</button>
                    </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
