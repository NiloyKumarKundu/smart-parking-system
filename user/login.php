<?php include '../header.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">User Login</h3>
   </div>
    <div class="col-md-4">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1"  class="form-label">Email</label>
                <input type="email" placeholder="jack.smith@gmail.com" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" placeholder="*******" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Log in</button>
        </form>

        <div class="row">
            <p class="pt-4">Don't have an account? <a class="link-primary" href="./signup.php">Click Here</a></p>
        </div>
    </div>

</div>

<?php include '../footer.php'; ?>