<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center">
      <h3 class="events">Booking Records</h3>
   </div>

   <?php 
    $cuser_id = $_SESSION['cuser_id'];
//    echo $cuser_id;
    $query = "SELECT * from booking where cuser_id = '$cuser_id'";    
    $result = mysqli_query($connection, $query) or die("Failed");

    $count = mysqli_num_rows($result);

    if($count > 0){
    ?>

    <div class="col-md-6">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th  scope="col">#</th>
                    <th scope="col">Parking Name</th>
                    <th scope="col">Date and Time</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_assoc($result)){

                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Thornton</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include '../footer.php'; ?>