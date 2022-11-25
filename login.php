<?php
include("./shared/connection.php");
if ($conn) {
}
$email = $password = $confirm_password = "";
$email_error = $password_error = "";
$toast = false;
if (isset($_POST["submit"])) {
    $email  = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email)) {
        $email_error = "Email required";
    }
    if (empty($password)) {
        $password_error = "Password is required";
    }

    if (!empty($password) && !empty($email)) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) <= 0) {
            $email_error = "This email not registered";
        } else {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                $email = "";
                $password = "";
                header("location:dashboard/index.php");
            } else {
                $password_error = "Password incorrect";
            }
        }
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>journal</title>
</head>

<body>
    <div>
        <div class="mb-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="index.php">Journal</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="registration.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row align-items-center p-3">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 border box shadow-sm rounded p-4 text-center">
                    <h3 class="fw-bold mb-4">User Login</h3>
                    <div>
                        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                            <div class="mb-3 text-start">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" value="<?php echo $email ?>" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                <div class="text-danger"><?php echo $email_error ?></div>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" value="<?php echo $password ?>" type="password" class="form-control" id="passeword">
                                <div class="text-danger"><?php echo $password_error ?></div>
                            </div>
                            <button name="submit" type="submit" class="btn btn-outline-warning">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
</body>
</html>