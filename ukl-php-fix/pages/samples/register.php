 <?php 
include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../../sidebar.php");
}

if (isset($_POST['submit'])) {
  $nama = $_POST['name'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$role = $_POST['role'];

	if ($password == true) {
		$sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (name, username, password, role)
					VALUES ('$name' , '$username', '$password' , '$role')";
			$result = mysqli_query($conn, $sql);
			if($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
        $name = "";
        $username = "";
				$_POST['password'] = "";
				$_POST['role'] = "";
			} else {
			echo "<script>alert('Woops! Something Wrong Went. ')</script>";
			} 
		} else {
				echo "<script>alert('Woops! Email Already Exist. ')</script>";
		} 
	} else{
		echo "<script>alert('Password Not Mached. ')</script>";
			}
		}
	
// include 'config.php';

// error_reporting(0);

// session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: ../../sidebar.php");
// }

// if (isset($_POST['submit'])) {
// 	$name = $_POST['name'];
// 	$username = $_POST['username'];
// 	$password = md5($_POST['password']);;
// 	$role = $_POST['role'];

// 	if ($password == true) {
// 		$sql = "SELECT * FROM user WHERE name='$name' AND password = '$password'";
// 		$result = mysqli_query($conn, $sql);

// 		if (!$result->num_rows > 0) {
// 			$sql = "INSERT INTO user (username, email, password, role)
// 					VALUES ('$name', '$username', '$password' , '$role')";
// 			$result = mysqli_query($conn, $sql);
// 			if($result) {
// 				echo "<script>alert('Wow! User Registration Completed.')</script>";
// 				$username = "";
// 				$email = "";
// 				$_POST['password'] = "";
// 				$_POST['role'] = "";
// 			} else {
// 			echo "<script>alert('Woops! Something Wrong Went. ')</script>";
// 			} 
// 		} else {
// 				echo "<script>alert('Woops! Email Already Exist. ')</script>";
// 		} 
// 	} else{
// 		echo "<script>alert('Password Not Mached. ')</script>";
// 			}
// 		}
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../../assets/images/logo.svg">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Role</option>
                      <option>Admin</option>
                      <option>Owner</option>
                      <option>Cashier</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../sidebar.php">SIGN UP</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>