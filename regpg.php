<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <!-- CSS REG -->
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

            <button class="btn btn-outline-custom-light" type="submit"><a class="text-decoration-none text-light"
                    href="loginpg.html">SIGN IN</a> </button>
            <button class="btn btn-outline-custom-light" type="submit"><a class="text-decoration-none text-light"
                    href="regpg.html">CREATE ACCOUNT</a> </button>
        </div>
    </nav>
    <!-- END NAVBAR -->



    <section id="regpg" class="sec1 text-center" style="color: #fff;">
        <div class="overlay">
            <div class="logbox">

                <h2>Register</h2>
                <form>
                    <p>Username</p>
                    <input type="text" name="" placeholder="Enter Username">
                    <p>Email</p>
                    <input type="text" name="" placeholder="Enter Email">
                    <p>Password</p>
                    <input type="password" name="" placeholder="******">
                    <p>Password Confirmation</p>
                    <input type="password" name="" placeholder="******">
                    <input type="submit" name="" value="Sign Up"><a href="loginpg.html"></a>
                </form>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/search.js"></script>
</body>

</html>