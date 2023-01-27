<<<<<<< HEAD
<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8 p-4">
    <div class="col-md-12 text-center">
      <h3 class="events">Available Parking Systems</h3>
    </div>

<?php
    include './config.php';
    
    $query = 'SELECT * FROM parking_spot';

    
    $result = mysqli_query($connection,$query) or die("Failed");
    $count = mysqli_num_rows($result);

    if($count > 0){

        ?>
        <div class="row">
            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>

            <div class="col-sm-6 p-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>

                        <?php
                        $loc = $row['location'];
                        $user = $row['suser_id'];
                        
                        $q2 = "SELECT count(*) as countr from rfid where location = '$loc' and suser_id = '$user'";
                        $res = mysqli_query($connection,$q2) or die("Failed");
                        $rows = mysqli_fetch_assoc($res);

                        $q3 = "select count(*) as c from booking where location = '$loc' and STATUS = 'unpaid'";
                        $res3 = mysqli_query($connection,$q3) or die("Failed");
                        $rows3 = mysqli_fetch_assoc($res3);
                       
                        ?>
                        <p class="card-text">Available Slot: <?php echo $rows['countr'] - $rows3['c']; ?> </p>
                        <a href="./booking.php?id=<?php echo $user; ?>&location=<?php echo $loc; ?>" class="btn btn-success">Want to book?</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
    </div>
    <?php
    }
    ?>
        
    </div>
</div>



=======
<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8 p-4">
    <div class="col-md-12 text-center">
      <h3 class="events">Available Parking Systems</h3>
    </div>

<?php
    include './config.php';
    
    $query = 'SELECT * FROM parking_spot';

    
    $result = mysqli_query($connection,$query) or die("Failed");
    $count = mysqli_num_rows($result);

    if($count > 0){

        ?>
        <div class="row">
            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>

            <div class="col-sm-6 p-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>

                        <?php
                        $loc = $row['location'];
                        $user = $row['suser_id'];
                        
                        $q2 = "SELECT count(*) as countr from rfid where location = '$loc' and suser_id = '$user'";
                        $res = mysqli_query($connection,$q2) or die("Failed");
                        $rows = mysqli_fetch_assoc($res);

                        $q3 = "select count(*) as c from booking where location = '$loc' and STATUS = 'unpaid'";
                        $res3 = mysqli_query($connection,$q3) or die("Failed");
                        $rows3 = mysqli_fetch_assoc($res3);
                        $available_slot = $rows['countr'] - $rows3['c']; 
                        ?>

                        <p class="card-text">Available Slot: <?php echo $available_slot; ?> </p>

                        <?php if ($available_slot == '0') {   ?>
                        <a href="./booking.php?id=<?php echo $user; ?>&location=<?php echo $loc; ?>" class="btn btn-success disabled">Want to book?</a>
                        <?php } else { ?>
                        <a href="./booking.php?id=<?php echo $user; ?>&location=<?php echo $loc; ?>" class="btn btn-success">Want to book?</a>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
    </div>
    <?php
    }
    ?>
        
    </div>
</div>



>>>>>>> b8f7bc0d148b59a483319fd3d12b25ed6bea6e4a
<?php include '../footer.php'; ?>