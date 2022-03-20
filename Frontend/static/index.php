<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>LenaDenaBank | Login</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
  </head>

  <body>
    <?php
        session_start();
        include('include/connection.php');
        $error = false;

        // Teacher Login 


          if (isset($_POST['adminlogin'])) {
          $username = mysqli_real_escape_string($conn, $_POST['username']);
          $password = mysqli_real_escape_string($conn, $_POST['password']);
          $result = mysqli_query($conn, "SELECT * FROM login WHERE username ='$username' AND password = '$password' ");
          if ($row = mysqli_fetch_array($result)) {
            $_SESSION['username']=$username; 
            header("Location: home.php");
          } else {
            $error_message = "Incorrect Email or Password!!!";
            echo "<script>alert('wrong username or password')</script>";
          }
        }

?>
    <main class="d-flex w-100">
      <div class="container d-flex flex-column">
        <div class="row vh-100">
          <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
              <div class="text-center mt-4">
                <h1 class="h2">Welcome back, Charles</h1>
                <p class="lead">Sign in to your account to continue</p>
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="m-sm-4">
                    <div class="text-center">
                      <img
                        src="img/avatars/avatar.jpg"
                        alt="Charles Hall"
                        class="img-fluid rounded-circle"
                        width="132"
                        height="132"
                      />
                    </div>
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                          class="form-control form-control-lg"
                          type="email"
                          name="username"
                          placeholder="Enter your email"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                          class="form-control form-control-lg"
                          type="password"
                          name="password"
                          placeholder="Enter your password"
                        />
                        <small>
                          
                          <a href="index.html">Forgot password? </a>

                        </small>
                      </div>
                      <div>
                        <label class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="remember-me"
                            name="remember-me"
                            checked
                          />
                          <span class="form-check-label"> Remember me next time </span>
                        </label>
                      </div>
                      <div class="text-center mt-3">
                      <input type="submit" name="adminlogin" value="Login" class="btn btn-primary" />
                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="js/app.js"></script>
  </body>
</html>
