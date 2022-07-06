<?php
    include 'config.php';
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM users WHERE username='$username' or email='$username'";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
            $foto=$row['foto'];
        }
    }
    if(isset($_POST['searchsub'])){
        $search=$_POST['search'];
        header("Location:search.php?search=$search");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <title>Homepage</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.css">

</head>

<body class="bg-dark">

    <!-- NAVBAR -->
    <nav id="navigation" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav mb-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">ROXO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="home.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="recent.php">Recent</a></li>
                        <li><a class="dropdown-item" href="trending.php">Trending</a></li>
                        <li><a class="dropdown-item" href="new.php">New Realeses</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Genre
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="genre.php?genre=action">Action</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=adventure">Adventure</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=comedy">Comedy</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=drama">Drama</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=ecchi">Ecchi</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=isekai">Isekai</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=magic">Magic</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=romance">Romance</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=school">School</a></li>
                        <li><a class="dropdown-item" href="genre.php?genre=sliceoflife">Slice Of Life</a></li>
                    </ul>
                <li class="nav-item">
                    <a class="nav-link " href="about.php">About</a>
                </li>
                    </ul>
                </li>
            </ul>
            <!-- end dm -->

            <div class="search-center">
                <form autocomplete="off" method="POST">
                    <div class="autocomplete" style="width:300px;">
                        <input id="myInput" class="form-control me-2" type="search" name="search" placeholder="Search">
                    </div>
                    <input type="submit" name="searchsub">
                </form>
            </div>
            <div class="d-flex pp">
                <?php
                    if(!isset($username)){
                        echo '<button class="btn btn-outline-custom-light" type="submit"><a class="text-decoration-none text-light"
                        href="loginpg.php">SIGN IN</a> </button>
                        <button class="btn btn-outline-custom-light" type="submit"><a class="text-decoration-none text-light"
                        href="regpg.php">CREATE ACCOUNT</a> </button>';
                    }
                    else{
                        
                        echo "<p class='navtext mx-end my-auto'>$username</p>
                        <img class='avanav mx-end' src='$foto'>";
                    }
                ?>
            <!-- <button class="btn btn-outline-custom-light" type="submit"><a class="text-decoration-none text-light"
                    href="loginpg.php">SIGN IN</a> </button>
            <button class="btn btn-outline-custom-light" type="submit"><a class="text-decoration-none text-light"
                    href="regpg.php">CREATE ACCOUNT</a> </button> -->
                    
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HOME -->
    <section id="home" class="sec1 text-center" style="color: #fff;" <?php
        if(isset($_SESSION['username'])) echo 'hidden';?>>
        <div class="overlay">
            <br><br><br><br><br>
            <div class=" text-center">
                <h1 style="font-size: 70px;">
                    <b>Watch Free HD</b><br>
                    <b>Anime</b>
                </h1> <br>
                <p>Enjoy our anime collection. We are the <br>
                    definitive source for the best curated 720p <br>
                    HD anime videos.
                </p> <br>
            </div>
            <button class=" btn btn-outline-custom-sign-up" type="submit"><a class="text-decoration-none text-light"
                    href="regpg.html"><b>SIGN UP</b></a></button>
            <br> <br>
            <p style="opacity: 0.8;">Supported by w3school </p>
        </div>
    </section>
    <br>
    <h2 class="text-white text-center my-5">Trending</h2>
    <!-- END HOME -->

    <!-- TRENDING -->

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <?php
                            $sql = "SELECT * FROM video ORDER BY watch DESC";
                            $result = mysqli_query($conn,$sql);
                            if($result->num_rows>0){
                                    $batas = 1;
                                    $row = $result->fetch_assoc();
                                    $id = $row['id'];
                                    $foto = $row['CoverLandscape'];
                                    $judul = $row['name'];
                                    $deskripsi = $row['descr'];
                                    echo "<a href='stream.php?id=$id'><div class='carousel-item drk active'>
                                    <img src='$foto' class='d-block'>
                                    <div class='carousel-caption tublcok title-list  d-none d-md-block' style='text-align: center;'>
                                        <h5>$judul</h5>
                                        <p>Nonton $judul Subtitle Indonesia <br>
                                        $deskripsi
                                        </p>
                                        </div>
                                    </div>
                                    </a>";
                                while($row = $result->fetch_assoc() and $batas<3){
                                    $id = $row['id'];
                                    $foto = $row['CoverLandscape'];
                                    $judul = $row['name'];
                                    $deskripsi = $row['descr'];
                                    echo "<a href='stream.php?id=$id'><div class='carousel-item drk'>
                                    <img src='$foto' class='d-block'>
                                    <div class='carousel-caption tublcok title-list  d-none d-md-block' style='text-align: center;'>
                                        <h5>$judul</h5>
                                        <p>Nonton $judul Subtitle Indonesia <br>
                                        $deskripsi
                                        </p>
                                    </div>
                                    </div>
                                    </a>";
                                    $batas+=1;
                                }
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <!-- END TRENDING -->

    <!-- NEW RELEASES -->
    <h2 class="section-title text-white">New Releases</h2>
    <div class="media-scroller snaps-inline">
        <?php
            $sql = "SELECT * FROM video ORDER BY upload DESC";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0){
                $batas = 0;
                while($row = $result->fetch_assoc() and $batas <= 10){
                    $id = $row['id'];
                    $foto = $row['CoverLandscape'];
                    $judul = $row['name'];
                    $rating = $row['rate'];
                    echo "<a href='stream.php?id=$id' style='text-decoration: none;'><div class='media-element'>
                    <img src='$foto'>
                    <div class='title'>
                        <h4>$judul</h4>
                        <p>Rating</p>
                        <img src='assets/img/star2.png' class='rating' width='20px'>
                        <h4 class='rating'>$rating</h4>
                    </div>
                    </div>
                    </a>";
                    $batas+=1;
                }
            }
        ?>
    </div>
    <!-- END NEW RELEASES -->
    <!-- RECENT -->
    <h2 class="section-title text-white" <?php
        if(!isset($_SESSION['username'])) echo 'hidden';?>>RECENT</h2>
    <div class="media-scroller snaps-inline" <?php
        if(!isset($_SESSION['username'])) echo 'hidden';?>>
        <?php
            if(isset($_SESSION['username'])){
            
            $sql = "SELECT * FROM video WHERE id IN (SELECT movieID FROM recent WHERE id='$username' ORDER BY lasttime DESC);";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0){
                $batas = 0;
                while($row = $result->fetch_assoc() and $batas <= 10){
                    $foto = $row['CoverLandscape'];
                    $judul = $row['name'];
                    $rating = $row['rating'];
                    echo "<a href='stream.php?id=$id'style='text-decoration: none;'><div class='media-element'>
                    <img src='$foto'>
                    <div class='title'>
                        <h4>$judul</h4>
                        <p>rating</p>
                        <img src='assets/img/star2.png' class='rating' width='20px'>
                        <h4 class='rating'>$rating</h4>
                    </div>
                    </div></a>";
                    $batas+=1;
                }
            }
        }
        ?>     
    </div>
    <!-- END RECENT -->

    <!-- Romance -->
    <h2 class="section-title text-white">Romance</h2>
    <div class="media-scroller snaps-inline">
        <?php
            $sql = "SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='romance');";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0){
                $batas = 0;
                while($row = $result->fetch_assoc() and $batas <= 10){
                    $id = $row['id'];
                    $foto = $row['CoverLandscape'];
                    $judul = $row['name'];
                    $rating = $row['rate'];
                    echo "<a href='stream.php?id=$id'style='text-decoration: none;'><div class='media-element'>
                    <img src='$foto'>
                    <div class='title'>
                        <h4>$judul</h4>
                        <p>Rating</p>
                        <img src='assets/img/star2.png' class='rating' width='20px'>
                        <h4 class='rating'>$rating</h4>
                    </div>
                    </div>
                    </a>";
                    $batas+=1;
                }
            }
        ?>
    </div>
    <!-- END SHOUNEN -->
    <h2 class="section-title text-white">Adventure</h2>
    <div class="media-scroller snaps-inline">
        <?php
            $sql = "SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='adventure');";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0){
                $batas = 0;
                while($row = $result->fetch_assoc() and $batas <= 10){
                    $id = $row['id'];
                    $foto = $row['CoverLandscape'];
                    $judul = $row['name'];
                    $rating = $row['rate'];
                    echo "<a href='stream.php?id=$id'style='text-decoration: none;'><div class='media-element'>
                    <img src='$foto'>
                    <div class='title'>
                        <h4>$judul</h4>
                        <p>Rating</p>
                        <img src='assets/img/star2.png' class='rating' width='20px'>
                        <h4 class='rating'>$rating</h4>
                    </div>
                    </div>
                    </a>";
                    $batas+=1;
                }
            }
        ?>
    </div>
    <h2 class="section-title text-white">Slice of Life</h2>
    <div class="media-scroller snaps-inline">
        <?php
            $sql = "SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='sliceoflife');";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0){
                $batas = 0;
                while($row = $result->fetch_assoc() and $batas <= 10){
                    $id = $row['id'];
                    $foto = $row['CoverLandscape'];
                    $judul = $row['name'];
                    $rating = $row['rate'];
                    echo "<a href='stream.php?id=$id'style='text-decoration: none;'><div class='media-element'>
                    <img src='$foto'>
                    <div class='title'>
                        <h4>$judul</h4>
                        <p>Rating</p>
                        <img src='assets/img/star2.png' class='rating' width='20px'>
                        <h4 class='rating'>$rating</h4>
                    </div>
                    </div>
                    </a>";
                    $batas+=1;
                }
            }
        ?>
    </div>
    <h2 class="section-title text-white">Comedy</h2>
    <div class="media-scroller snaps-inline">
        <?php
            $sql = "SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='comedy');";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0){
                $batas = 0;
                while($row = $result->fetch_assoc() and $batas <= 10){
                    $id = $row['id'];
                    $foto = $row['CoverLandscape'];
                    $judul = $row['name'];
                    $rating = $row['rate'];
                    echo "<a href='stream.php?id=$id'style='text-decoration: none;'><div class='media-element'>
                    <img src='$foto'>
                    <div class='title'>
                        <h4>$judul</h4>
                        <p>Rating</p>
                        <img src='assets/img/star2.png' class='rating' width='20px'>
                        <h4 class='rating'>$rating</h4>
                    </div>
                    </div>
                    </a>";
                    $batas+=1;
                }
            }
        ?>
    </div>
    <!-- JAVASCRIPT -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/search.js"></script>
    <script>
        var search = [];
        <?php
    $sql = "SELECT name FROM video";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $nama = $row['name'];
        echo "search.push('$nama');";
      }
    }
    ?>
    autocomplete(document.getElementById("myInput"), search);
    </script>
    </body>
<div id="copyright">
    <div class="wrapper">
        &copy; Copyright <b>ByMamaz</b> All Rights Reserved.
    </div>
</div>
</html>