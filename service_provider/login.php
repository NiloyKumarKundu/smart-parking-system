<<<<<<< HEAD
<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location: home.php");
}
?>


<?php include '../header.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">User Login</h3>
   </div>
    <div class="col-md-4">
        <form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1"  class="form-label">Email</label>
                <input type="email" placeholder="jack.smith@gmail.com" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" placeholder="*******" name="password" class="form-control">
            </div>
            <button type="submit" name="login" class="btn btn-success">Log in</button>
        </form>

        <div class="row">
            <p class="pt-4">Don't have an account? <a class="link-primary" href="./signup.php">Click Here</a></p>
        </div>


                    
            <?php

            if (isset($_POST['login'])) {
            include "./config.php";

            $email = mysqli_real_escape_string($connection, $_POST['email']);
            // $password = md5($_POST['password']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            echo $email." ";
            echo $password;

            $query = "SELECT suser_id, name, email FROM service_provider WHERE email='{$email}' AND password='{$password}'";
            $result = mysqli_query($connection, $query) or die("Query Failed.");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    session_start();

                    $_SESSION['email'] = $row['email'];
                    $_SESSION['cuser_id'] = $row['cuser_id'];
                    $_SESSION['name'] = $row['name'];
                    echo $row['name'], $row['cuser_id'], $row['email'];

                    header("location: home.php");
                }
            } else {
                echo "Username and Password are not matched.";
            }
            }

            ?>
    </div>

</div>





=======
<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location: home.php");
}
?>


<?php include '../header.php'; ?>


<div class="row justify-content-center">
    <div class="col-md-12 text-center pt-4">
      <h3 class="events">User Login</h3>
   </div>
    <div class="col-md-4">
        <form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1"  class="form-label">Email</label>
                <input type="email" placeholder="jack.smith@gmail.com" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" placeholder="*******" name="password" class="form-control">
            </div>
            <button type="submit" name="login" class="btn btn-success">Log in</button>
        </form>

        <div class="row">
            <p class="pt-4">Don't have an account? <a class="link-primary" href="./signup.php">Click Here</a></p>
        </div>


                    
            <?php

            if (isset($_POST['login'])) {
            include "./config.php";

            $email = mysqli_real_escape_string($connection, $_POST['email']);
            // $password = md5($_POST['password']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            echo $email." ";
            echo $password;

            $query = "SELECT suser_id, name, email FROM service_provider WHERE email='{$email}' AND password='{$password}'";
            $result = mysqli_query($connection, $query) or die("Query Failed.");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    session_start();

                    $_SESSION['email'] = $row['email'];
                    $_SESSION['suser_id'] = $row['suser_id'];
                    $_SESSION['name'] = $row['name'];

                    header("location: home.php");
                }
            } else {
                echo "Username and Password are not matched.";
            }
            }

            ?>
    </div>

</div>





>>>>>>> b8f7bc0d148b59a483319fd3d12b25ed6bea6e4a
<?php include '../footer.php'; ?>