<?php

require_once 'inc/header.php';
require('E:/xampp/htdocs/medical-project/functions/db.php');

$cities = mysqli_fetch_assoc(getCount('cities'))['count'];
$services = mysqli_fetch_assoc(getCount('services'))['count'];
$orders = mysqli_fetch_assoc(getCount('orders'))['count'];
$orders_today = mysqli_fetch_assoc(getCount('orders' , 1))['count'];

?>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All  Services</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="services/index.php" class="btn btn-primary"><?php echo $services ?></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Cities</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="cities/index.php" class="btn btn-primary"><?php echo $cities ?></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Orders</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="orders/index.php" class="btn btn-primary"><?php echo $orders ?></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Orders This Day</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="orders/index.php" class="btn btn-primary"><?php echo $orders_today ?></a>
      </div>
    </div>
  </div>



 







<?php
    require_once BLA.'/inc/footer.php';
?>