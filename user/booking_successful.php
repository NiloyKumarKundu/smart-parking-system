
<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>


<?php
    include './config.php';

    if (isset($_POST['submit'])) {
        $user = $_POST['user_id'];
        $location = $_POST['location']; 
        $b_date = date("Y-m-d H:i:s",strtotime($_POST['b_date']));
        $e_date = date("Y-m-d H:i:s",strtotime($_POST['e_date']));

        

?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">Booking Successful.</h3>
   </div>

    <div class="col-md-6">
        <p>One slot has been booked for you. We are waiting for your arival.</p>
        <b>Your card no is: <span id="rfid">1233645F</span></b>
        <p>Collect this card from our parking zone!</p>
        <p>Thank you.</p>
        <a href="./home.php">Go back to homepage</a>
    </div>


</div>

<?php } else { ?>
    <div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">Sorry!! Something Went Wrong. Please Try again later.</h3>
   </div>
</div>

<?php }?>

<?php include '../footer.php'; ?>