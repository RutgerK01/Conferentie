  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./images/conferentie.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">

    <?php include('./include.php');
        $ww = '';
        $twee = false;
        if(isset($_GET["action"])){ 
          if($_GET["action"] == "userWW"){
            $twee = true;
            $action = 'user';
            $ww = '<center><h6 id="wrong">The email or Password wasnt right</h6></center>';
          }
        }
    ?>
    
  </head>
  <body>
  <h1 id="pageN">Login</h1>
  <div class="row" id="login">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="row">
        <div class="col-6" id="Lform">
          <h4 id="center">Not registered yet?</h4>
            <h6 id="reg">Then <a id="aform" href="./registerform.php?action=user">Click here</a> To create a account</h6>
        </div>
        <div class="col-6" id="Lform">
          <h4 id="center">Inloggen:</h4>
          <?php echo($ww); ?>
            <form action="./login.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1" <?php if($twee){echo'id="wrong"';}?>>Email adres</label>
                <input type="email" name="email" class="form-control" id="<?php if($twee){echo'red';}
                                                                                else{echo' ';} ?>" 
                       aria-describedby="emailHelp" placeholder="Email invoeren">
                <small id="emailHelp" class="form-text text-muted">We will never share your eamil</small>
              </div>
              <div class="form-group">
                <label for="WWS" <?php if($twee){echo'id="wrong"';}?>>Wachtwoord</label>
                <input type="password" name="ww" class="form-control" id="<?php if($twee){echo'red';}
                                                                                else{echo' ';} ?>" placeholder="Wachtwoord invoeren">
              </div>
              <button type="submit" class="btn btn-dark">Login</button>
            </form>
          </div>
        
      </div>
    </div>
    <div class="col-1"></div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./JS/Java.js"></script>
  </body>
</html>