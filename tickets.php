
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

    <?php 
      include('./include.php');

      $ticket = 'SELECT * FROM `tickets`';

      $result = $conn->query($ticket);
      $row = $result->fetch_assoc();

      $ticketsFri = $row['Fri'];
      $ticketsSat = $row['Sat'];
      $ticketsSun = $row['Sun'];  
    ?>
  </head>
  <body>
    <h1 id="pageN">Tickets</h1>
    <?php if(isset($_SESSION['id'])){echo('
    
    <div class="row">
      <div class="col-1"></div>
        <div class="col-2" id="ticketPage">
          <form action="./Buy.php?action=Fri" method="post">
            <center><h3>Day ticket(Fri)</h3></center>
            <hr id="hr">
            <p>With this ticket you only are allowed to go to the conference on Friday</p>
            <br>
            <p>Want to include a meal?</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Lunch" id="exampleRadios1" value="Lunch">
                <label class="form-check-label" for="exampleRadios1">
                  Lunch +€20.-
                </label>
              </div>
            <br>
            <br>
            <p>tickets left: <?php echo($ticketsFri)?></p>
            <h5>Price: €45.-</h5>
            <button type="submit" class="btn btn-dark btn-block"">Buy</button>
          </form>
        </div>
        <div class="col-2" id="ticketPage">
          <form action="./Buy.php?action=Sat" method="post">
          <center><h3>Day ticket(Sat)</h3></center>
          <hr id="hr">
          <p>With this ticket you only are allowed to go to the conference on Saturday</p>
          <br>
          <p>Want to include a meal?</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Lunch" id="exampleRadios1" value="Lunch">
                <label class="form-check-label" for="exampleRadios1">
                  Lunch +€20.-
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Diner" id="exampleRadios1" value="Diner">
                <label class="form-check-label" for="exampleRadios1">
                  Diner +€30.-
                </label>
              </div>
            <br>
            <p>tickets left: <?php echo($ticketsSat)?></p>
          <h5>Price: €60.-</h5>
          <button type="submit" class="btn btn-dark btn-block"">Buy</button>
          </form>
        </div>
        <div class="col-2" id="ticketPage">
          <form action="./Buy.php?action=Sun" method="post">
          <center><h3>Day ticket(Sun)</h3></center>
          <hr id="hr">
          <p>With this ticket you only are allowed to go to the conference on Sunday</p>
          <br>
          <p>Want to include a meal?</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Lunch" id="exampleRadios1" value="Lunch">
                <label class="form-check-label" for="exampleRadios1">
                  Lunch +€20.-
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Diner" id="exampleRadios1" value="Diner">
                <label class="form-check-label" for="exampleRadios1">
                  Diner +€30.-
                </label>
              </div>
            <br>
            <p>tickets left: <?php echo($ticketsSun)?></p>
          <h5>Price: €30.-</h5>
          <button type="submit" class="btn btn-dark btn-block"">Buy</button>
          </form>
        </div>
        <div class="col-2" id="ticketPage">
          <form action="./Buy.php?action=Week" method="post">
          <center><h3>Weekend ticket</h3></center>
          <hr id="hr">
          <p>With this ticket you only are allowed to go to the conference on Saturday and Sunday</p>
          <br>
          <p>Want to include a meal?</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Lunch" id="exampleRadios1" value="Lunch">
                <label class="form-check-label" for="exampleRadios1">
                  Lunch +€20.-
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Diner" id="exampleRadios1" value="Diner">
                <label class="form-check-label" for="exampleRadios1">
                  Diner +€30.-
                </label>
              </div>
            <br>
            <p>tickets left: <?php echo($ticketsWeek)?></p>
          <h5>Price: €80.-</h5>
          <button type="submit" class="btn btn-dark btn-block"">Buy</button>
          </form>
        </div>
        <div class="col-2" id="ticketPage">
          <form action="./Buy.php?action=Pas" method="post">
          <center><h3>Paspartoe ticket</h3></center>
          <hr id="hr">
          <p>With this ticket you only are allowed to go to the conference on all three days</p>
          <br>
          <p>Want to include a meal?</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Lunch" id="exampleRadios1" value="Lunch">
                <label class="form-check-label" for="exampleRadios1">
                  Lunch +€20.-
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Diner" id="exampleRadios1" value="Diner">
                <label class="form-check-label" for="exampleRadios1">
                  Diner +€30.-
                </label>
              </div>
            <br>
            <p>tickets left: <?php echo($ticketsPas)?></p>
          <h5>Price: €100.-</h5>
          <button type="submit" class="btn btn-dark btn-block"">Buy</button>
          </form>
        </div>
      <div class="col-1"></div>
    </div>
    ');}else{
      echo('<center><h2>You have to login to buy tickets</h2>
      <p>Want to login then <a href="./loginform.php">Click here</a> or if you dont have a account yet <a href="./registerform.php?action=user">click here</a> to register</p></center>');
    }?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>                   