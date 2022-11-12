
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
       SHS-Rayagada
                </div>
                <form class="login-form" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="id" placeholder="User" class="form-control">
                       
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                       
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="login-btn">Login</button>
                    </div>
                </form>
				
                <?php include "inc/dbconfig.php"; 
if(isset($_POST['submit'])){

$id=$_POST['id'];
$password=$_POST['password'];

$sql = "SELECT user_name,password FROM admin WHERE id= '$id' ";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $password_hash = $row['password'];

if(password_verify($password,$password_hash)){
 
$_SESSION["login_user"]=$id; 
// print_r($_SESSION["login_user"]);
if(isset($_SESSION['login_user'])){

//    header("location: gcatagory.php");
echo '<script>
window.location.href="gcatagory.php"
</script>';
  
}
}  
else{
  echo "<script>alert('wrong id or password')</script>";
}  
}
  else{
    echo "<script>alert('wrong id or password')</script>";
}
}



?>
            </div>
           
        </div>
    </div>



    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>



</html>