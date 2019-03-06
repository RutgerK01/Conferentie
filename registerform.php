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

    <?php include('./include.php');
       $een = false;
       $twee = false;

       $user = false;

       if(isset($_GET["action"])){
        if($_GET["action"] == "speaker"){
          $een = true;
        }
        if($_GET["action"] == "user"){
          $twee = true;
        }
      }

        $user = '';

        if($een){
          $user='speaker';
        }
        if($twee){
          $user='<form action="./register.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repeat email</label>
              <input name="Reamil" type="email" class="form-control" id="inputPassword4" placeholder="Repeat email">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputAddress">Firstname</label>
              <input name="Fname" type="text" class="form-control" id="inputAddress" placeholder="Firstname">
            </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Insertion</label>
            <input name="In" type="text" class="form-control" id="inputAddress" placeholder="Insertion">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Lastname</label>
            <input name="Lname" type="text" class="form-control" id="inputAddress" placeholder="Lastname">
          </div>  
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Password</label>
              <input name="ww" type="password" class="form-control" id="inputEmail4" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repeat password</label>
              <input name="Rww" type="password" class="form-control" id="inputPassword4" placeholder="Repeat Password">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Accept <a id="aform" href="?">Terms and Conditions</a> and <a id="aform" href="?">Privacy Statement</a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>';
        }
    ?>
  </head>
  <body>
    <center><h1>Register as <?php if($een){echo'Speaker';}else{echo'User';}?></h1></center>

    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <?php echo($user)?>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>