    <div class="row sticky-top" id="nav">
        <!-- <div class="col-1"></div> -->
        <div class="col-11">
        <ul class="nav nav-pills">
            <img id="img" src="./images/logo.png">
                <a id="top" class="nav-link" id="navI" href="./index.php">
                    Home
                </a>
                <a id="top" class="nav-link" id="navI" href="./about.php">
                    About
                </a>
                <a id="top" class="nav-link" id="navI" href="./contact.php">
                    Contact
                </a>
                <a id="top" class="nav-link" id="navI" href="./programme.php">
                    Programme
                </a>
                <?php if(!isset($_SESSION['id'])){
                        echo('<a id="top" class="nav-link" id="navI" href="./loginform.php">Login</a>
                              <a id="top" class="nav-link" id="navI" href="./registerform.php">Register</a>');}
                      if(isset($_SESSION['id'])){
                        echo('<a id="top" class="nav-link" id="navI" href="./logout.php">Logout</a>');
                }?>
            </ul>
        </div>
        <div class="col-1"></div>
    </div>