<<<<<<< HEAD
<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">Add Parking Slot</h3>
   </div>

    <div class="col-md-4 p-4">
        <form class="row g-3" action="successful.php">
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Select Your Parking Zone:</label>
                <select class="form-select form-select" aria-label=".form-select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Hanif Parking Slot</option>
                    <option value="2">Ena Parking Slot</option>
                    <option value="3">Shamoli Parking Slot</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Enter Your RFID No:</label>
                <input type="text" class="form-control" required>
            </div>

            <div class="col-12">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>


</div>

=======
<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">Add Parking Slot</h3>
   </div>

    <div class="col-md-4 p-4">
        <?php 
            include './config.php';
            $suser_id = $_SESSION['suser_id'];
            $query = "select * from parking_spot where suser_id = $suser_id";
            $result = mysqli_query($connection,$query) or die("<br><div class='alert alert-danger' role='alert'>");
            $count = mysqli_num_rows($result);

            if($count > 0) {
        ?>
        <form class="row g-3"  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Select Your Parking Zone:</label>
                <select name="option" class="form-select form-select" aria-label=".form-select example">
                <?php
                    $flag = true;
                    while($row = mysqli_fetch_assoc($result)){
                        // echo $row['name'];
                    $name = $row['name'];
                    if ($flag) {      
                        
                ?>
                    <option value="<?php echo $name; ?>" selected><?php echo $name; ?></option>
                <?php
                    $flag = false;
                    } else {
                ?>
                    <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                <?php
                    }}
                ?>
                </select>
            </div>

            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Enter Your RFID No:</label>
                <input type="text" name="rfid" class="form-control" required>
            </div>

            <div class="col-12">
                <button class="btn btn-success" name="submit" type="submit">Submit</button>
            </div>
        </form>

        <?php 
            }
        if (isset($_POST['submit'])) {
            $option = $_POST['option'];
            $rfid = $_POST['rfid'];
            $suser_id = $_SESSION['suser_id'];
            // echo $option . ' ' . $rfid;

            $query = "select location from parking_spot where suser_id=$suser_id and name='$option'";
            $result = mysqli_query($connection,$query) or die("<br><div class='alert alert-danger' role='alert'>
            Something went wrong on finding location!
        </div>");
            
            $row = mysqli_fetch_assoc($result);
            $location = $row['location'];

            $query = "INSERT INTO rfid values($suser_id, '$location', '$rfid')";
            $result = mysqli_query($connection,$query) or die("<br><div class='alert alert-danger' role='alert'>
            Something went wrong!
        </div>");
        ?>
                <br>
                <div class="alert alert-success" role="alert">
                    Your slot has been updated successfully.
                </div>
        <?php                
            }
        ?>
    </div>


</div>

>>>>>>> b8f7bc0d148b59a483319fd3d12b25ed6bea6e4a
<?php include '../footer.php'; ?>