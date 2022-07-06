<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM video WHERE id=$id";
    $result  = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        $path = $row['path'];
        $name = $row['name'];
        $watch = $row['watch'];
        $cover = $row['CoverPotrait'];
        $descr = $row['descr'];
    }
    $watch+=1;
    $sql = "UPDATE video SET watch=$watch WHERE id=$id";
    $result  = mysqli_query($conn,$sql);
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
    <title>Streaming</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/stream.css">
</head>
<body>
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
                    <input type="submit" name="searchsub" hidden>
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

    <section id="stream" class="sec1 text-center" style="color: #fff;">
        <div class="container-fluid">
        <div class="tv row">
            <div class="col-md-8">
                <video class="player" controls autoplay>
                    <source src="<?php echo $path?>" type="video/mp4">
                  Your browser does not support the video tag.
                  </video>
            </div>
        </div>
        <div class="row descbox">
            <div class="play-title">
                <p><?php echo $name?></p>
            </div>
            <div class="view">
                <i class="fa fa-eye"><?php echo $watch?> views</i> 
                <hr>
            </div>
            <div class="poster">
                <img src="<?php echo $cover?>">
                <span class="desc">
                    <label class="fs-4" for="desc">Deskripsi :</label>
                        <p>
                        <?php echo $descr?>
                        </p>
                </span>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="upnext">
            <p class="upnext-title">Up Next :</p>
            <?php
                $sql = "SELECT * FROM video WHERE id!=$id";
                $result  = mysqli_query($conn,$sql);
                if($result->num_rows>0){
                    $batas = 0;
                    while($row = $result->fetch_assoc() and $batas<=5){
                        $id = $row['id'];
                        $name = $row['name'];
                        $watch = $row['watch'];
                        $cover = $row['CoverPotrait'];
                        echo "<a href='stream.php?id=$id 'style='text-decoration: none;'><div class='watchnext d-flex justify-content-start'>
                        <img src='$cover'>
                        <div class='p-2 text-white'>
                            <p class='next-title'>$name</p>
                            <div class='view'>
                                <i class='fa fa-eye'>$watch views</i> 
                            </div>
                            </div>
                        </div></a>";
                        $batas+=1;
                    }
                }
            ?>
        </div>
    </div>
    </section>
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