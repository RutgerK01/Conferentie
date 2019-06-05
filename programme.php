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

    <?php include('./include.php')?>
  </head>
  <body>
    <h1 id="pageN">Program</h1>

    <div class="row">
    <?php
      echo('
      <div class="col-1" id="col1"><h4>Time:</h4></div>
        <div id="ticket" class="col-1">10:00</div>
        <div id="ticketN" class="col-1">12:00</div>
        <div id="ticket" class="col-1">13:00</div>
        <div id="ticketN" class="col-1">14:00</div>        
        <div id="ticket" class="col-1">15:00</div>
        <div id="ticketN" class="col-1">16:00</div>
        <div id="ticket" class="col-1">17:00</div>
        <div id="ticketN" class="col-1">16:00</div>
        <div id="ticket" class="col-1">17:00</div>
        <div id="col3" class="col-1">18:00</div>
      <div class="col-1"></div>
    </div>');
    ?>

    <div class="row">
      <div class="col-1" id="colN"><h4>Zaal 1:</h4></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="cole"></div>
      <div class="col-1"></div>
    </div>

    <div class="row">
      <div class="col-1" id="col"><h4>Zaal 2:</h4></div>
      <div class="col-1" id="ticket1"></div>
      <div class="col-1"></div>
      <div class="col-1" id="ticket1"></div>
      <div class="col-1"></div>
      <div class="col-1" id="ticket1"></div>
      <div class="col-1"></div>
      <div class="col-1" id="ticket1"></div>
      <div class="col-1"></div>
      <div class="col-1" id="ticket1"></div>
      <div class="col-1" id="coleN"></div>
      <div class="col-1"></div>
    </div>

    <div class="row">
      <div class="col-1" id="col4"><h4>Zaal 3:</h4></div>
      <div class="col-1" id="ticket4"></div>
      <div class="col-1" id="ticket4N"></div>
      <div class="col-1" id="ticket4"></div>
      <div class="col-1" id="ticket4N"></div>
      <div class="col-1" id="ticket4"></div>
      <div class="col-1" id="ticket4N"></div>
      <div class="col-1" id="ticket4"></div>
      <div class="col-1" id="ticket4N"></div>
      <div class="col-1" id="ticket4"></div>
      <div class="col-1" id="cole1"></div>
      <div class="col-1"></div>
    </div>

    <div class="row">
      <div class="col-1" id="col2"><h4>Zaal 4:</h4></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="ticket3N"></div>
      <div class="col-1" id="ticket3"></div>
      <div class="col-1" id="cole1N"></div>
      <div class="col-1"></div>
    </div>

    <p id="next"><a id="nextBtn" href="?action=next">Next</a></p>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
