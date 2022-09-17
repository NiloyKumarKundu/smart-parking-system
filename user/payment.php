<?php include '../header.php'; ?>
<?php include './navbar.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">Make Payment</h3>
   </div>

    <div class="col-md-6">
        <form class="row g-3" action="successful.php">
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Bkash Tnrx No:</label>
                <input type="text" class="form-control" required>
            </div>

            <div class="col-12">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>


</div>

<?php include '../footer.php'; ?>