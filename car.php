<?php 
  $cards = "1";
  $full = false;

  if($cards == 0){
    $full = true;
  }
?>

<div class="row">
<div class="col-1"></div>
<div class="col-10" id="car">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="./tickets.php">
        <?php if($full){echo('<img src="./images/Banner1.2.png" class="d-block w-100" alt="...">');} 
              else{echo('<img src="./images/Banner1.png" class="d-block w-100" alt="...">');}?> </a>
    </div>
    <div class="carousel-item">
    <a href="registerform.php?action=user"><img src="./images/Banner2.png" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
    <a href=""><img src="./images/Banner3.png" class="d-block w-100" alt="..."></a>
    </div>
  </div>
</div>

</div>
<div class="col-1"></div>
</div>