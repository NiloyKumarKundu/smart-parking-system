<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center">
      <h3 class="events">Transactions Records</h3>
   </div>

   <?php 
    include './config.php';
    $cuser_id = $_SESSION['cuser_id'];

    $query = "SELECT * from booking where cuser_id = $cuser_id";    
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
                    <th scope="col">Entry Date and Time</th>
                    <th scope="col">Exit Date and Time</th>
                    <th scope="col">Total Cost(Taka)</th>
                    <th scope="col">TrxID</th>
                </tr>
            </thead>
            <tbody>


            <?php 
                    $count = 1;
                    while($row = mysqli_fetch_assoc($result)){
                        $suser_id = $row['suser_id'];
                        $location = $row['location'];
                        // echo $suser_id. ' '. $location;

                        $q2 = "SELECT name FROM parking_spot
                        where suser_id = '$suser_id' and location = '$location';";
                        $res = mysqli_query($connection, $q2) or die("Failed");
                        $rows = mysqli_fetch_assoc($res);
                        $name = $rows['name'];
                        $rfid = $row['rfid'];
                        $location = $row['location'];
                        $start_time = $row['start_time'];
                        $end_time = $row['end_time'];
                        $status = $row['status'];
                        $token = $row['token_nu'];
                        $suser_id = $row['suser_id'];

                        $time = "SELECT TIME_TO_SEC(TIMEDIFF('$start_time', '$end_time')) as time;";
                        $time_diff = mysqli_query($connection, $time) or die("Failed");
                        $diffTime = mysqli_fetch_assoc($time_diff);
                        $value = abs($diffTime['time']);
                        $taka = ceil(($value / 3600) * 250);
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