<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">Booking a parking slot...</h3>
   </div>

    <div class="col-md-6">
        <form class="row g-3" action="booking-successful.php">
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Booking Date & Time</label>
                <input type="datetime-local" class="form-control" required>
            </div>

            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">End Date & Time (Expected)</label>
                <input type="datetime-local" class="form-control" required>
            </div>

           

            <div class="col-12">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php include '../footer.php'; ?>