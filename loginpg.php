<?php
    include 'config.php';
    session_start();
    $output = "";
    if(isset($_SESSION['username'])){
        header("Location:home.php");
    }

    if(isset($_POST['submit'])){
        $pass = md5($_POST['pass']);
        $email = $_POST['email'];
        $sql = "SELECT * FROM users WHERE (username='$email' OR email='$email') AND pw='$pass';";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location:home.php");
        }
        else{
            $output = "Username atau password salah yang";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/regpg.css">
</head>
<body>
     <!-- NAVBAR -->
     <nav id="navigation" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav mb-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Window.tv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#home">Home</a></li>
                        <li><a class="dropdown-item" href="#">Recent</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#genre">Genre</a></li>
                        <li><a class="dropdown-item" href="#trending">Trending</a></li>
                        <li><a class="dropdown-item" href="#NewRealeases">New Realeses</a></li>
                        <li><a class="dropdown-item" href="#image">Image</a></li>
                    </ul>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Genre
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="#">Action</a></li>

                        <li><a class="dropdown-item" href="#">Adventure</a></li>

                        <li><a class="dropdown-item" href="#">Animals</a></li>
                        <li><a class="dropdown-item" href="#">Animation</a></li>
                        <li><a class="dropdown-item" href="#">Avant Garde</a></li>
                        <li><a class="dropdown-item" href="#">Image</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Boys Love</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Cars</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                        <li><a class="dropdown-item" href="#">Crime</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>

                </li>
            </ul>

            <div class="search-center">
                <form autocomplete="off" action="/action_page.php">
                    <div class="autocomplete" style="width:300px;">
                        <input id="myInput" class="form-control me-2" type="text" name="myCountry" placeholder="Search">
                    </div>

                    <input type="submit" hidden>
                </form>
            </div>

            <button class="btn btn-outline-custom-light" type="submit"><a type="submit"><a class="text-decoration-none text-light" href="loginpg.html">SIGN IN</a>
            </button>
            <button class="btn btn-outline-custom-light" type="submit"><a class="text-decoration-none text-light" href="regpg.html">CREATE
                    ACCOUNT</a> </button>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <section id="logpg" class="sec1 text-center" style="color: #fff;">
        <div class="overlay">
        <div class="logbox">
            <h2>Login</h2>
            <form method="POST">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email or Username">
                <p>Password</p>
                <input type="password" name="pass" placeholder="******">
                <input type="submit" name="submit" value="Sign In">
                <h5 class="text-danger"><?php echo $output;?></h5>
                <a href="#">Forget Password</a>
            </form>
        </div>
    </div>
    </section>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/navbar.js"></script>   
    <script src="assets/js/search.js"></script>
</body>
</html>