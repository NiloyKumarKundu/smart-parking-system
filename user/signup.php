<?php include '../header.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">Sign UP</h3>
   </div>

    <div class="col-md-6">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" placeholder="Maikel" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" placeholder="Jack" required>
            </div>

            <div class="col-md-12">
                <label for="validationCustomUsername" class="form-label">Email Address</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" placeholder="maikel.jack@gmail.com"
                        aria-describedby="inputGroupPrepend" required>
                </div>
            </div>



            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="*******" id="validationCustom03" required>
                
            </div>

            <div class="col-12">
                <button class="btn btn-success" type="submit">Sign Up</button>
            </div>
        </form>

        <div class="row">
            <p class="pt-4">Already have an account? <a class="link-primary" href="./login.php">Go back to Login</a></p>
        </div>
    </div>


</div>

<?php include '../footer.php'; ?>