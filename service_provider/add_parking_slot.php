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

<?php include '../footer.php'; ?>