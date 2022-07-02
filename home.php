<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/home.css">

</head>

<body class="bg-dark">

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
                
                <!-- dropdown menu -->
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

    <!-- HOME -->
    <section id="home" class="sec1 text-center" style="color: #fff;">
        <div class="overlay">

            <br><br><br><br><br>
            <div class=" text-center">
                <h1 style="font-size: 70px;">
                    <b>Watch Free HD</b><br>
                    <b>Anime Videos</b>
                </h1> <br>
                <p>Enjoy yout unlimited anime collection. We are the <br>
                    definitive source for the best curated 720/1080p <br>
                    HD anime videos, viewable by desktop, mobile <br>
                    phone and tablet, for free
                </p> <br>
            </div>

            <p>Stream Unlimited Anime Videos</p>

            <button class=" btn btn-outline-custom-sign-up" type="submit"><a class="text-decoration-none text-light"
                    href="regpg.html"><b>SIGN UP</b></a></button>
            <br> <br>
            <p style="opacity: 0.8;">Sponsored Ad</p>
            <p>Anime Stream is Now Free</p>
        </div>
    </section>
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
                    <div class="carousel-inner ">

                        <div class="carousel-item drk active">
                            <img src="assets/img/TRENDING/sxfuse.png" class="">

                            <div class="carousel-caption title-list" style="text-align: center;">
                                <h5>SPY X FAMILY</h5>
                                <p>Nonton Spy x Family Subtitle Indonesia <br>
                                    nonton Anime Spy x Family Sub Indo Untuk agen yang dikenal sebagai ‘Twilight’,
                                    tidak ada perintah yang terlalu tinggi jika demi perdamaian. Beroperasi sebagai
                                    mata-mata utama Westalis, Twilight bekerja tanpa lelah untuk mencegah para
                                    ekstremis memicu perang dengan negara tetangga Ostania. Untuk misi terakhirnya,
                                    ia harus menyelidiki politisi Ostania Donovan Desmond dengan menyusup ke sekolah
                                    putranya: Akademi Eden yang bergengsi.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item ">

                            <img src="assets/img/TRENDING/daluse.png" alt="...">

                            <div class="carousel-caption tublcok title-list d-none d-md-block">

                                <h5>DATE A LIVE IV</h5>
                                <p>Nonton Date a live IV Subtitle Indonesia
                                    Saitama yang tampaknya biasa dan tidak mengesankan memiliki hobi yang agak unik:
                                    menjadi
                                    pahlawan.
                                    Untuk mengejar impian masa kecilnya, dia berlatih tanpa henti selama tiga tahun
                                </p>
                            </div>

                        </div>
                        <div class="carousel-item drk">
                            <img src="assets/img/TRENDING/Kingdom .jpg" class="d-block" alt="...">
                            <div class="carousel-caption tublcok title-list  d-none d-md-block">
                                <h5>Kingdom Season 4</h5>
                                <p>Nonton Anime Kingdom Season 4 Sub indo yang maini ini adalh Musim keempat Anime
                                    Kingdom. Tujuh negara Kerajaan Tengah menghadapi dampak perang pasukan koalisi
                                    besar-besaran saat perselisihan internal bergerak ke garis depan..</p>
                            </div>
                        </div>
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
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Shikong zhi xi.png" alt="">
            <div class="title">
                <h4>Shikong zhi xi</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Onipan.jpg" alt="">
            <div class="title">
                <h4>Onipan</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Tomodachi game.jpg" alt="">
            <div class="title">
                <h4>Tomodachi game</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Zuihou de Zhaohuan Shi.jpg" alt="">
            <div class="title">
                <h4>Zuihou de zhaohian shi</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Mahoutsukai remeiki.jpg" alt="">
            <div class="title">
                <h4>Mahoutsukai remeiki</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Michikado mazoku 2.jpg" alt="">
            <div class="title">
                <h4>Michikado mazoku 2</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Love Live! Nijigasaki Gakuen School Idol Doukoukai.jpg" alt="">
            <div class="title">
                <h4>Love live nijigasaki</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Love all play.jpg" alt="">
            <div class="title">
                <h4>Love all play</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Let me check the walktrough first.jpg" alt="">
            <div class="title">
                <h4>Let me check the walktrough first</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/NEW RELEASES/Kyoukai saenki.jpg" alt="">
            <div class="title">
                <h4>Kyoukai saenki</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
    </div>
    <!-- END NEW RELEASES -->

    <!-- SUGGESTION -->
    <h2 class="section-title text-white">SUGGESTION</h2>
    <div class="media-scroller snaps-inline">
        <div class="media-element">
            <img src="assets/img/SUGESTION/BOKU NO HERO ACADEMIA.png" alt="">
            <div class="title">
                <h4>BOKU NO HERO ACADEMIA</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/INUYASHA.jpg" alt="">
            <div class="title">
                <h4>INUYASHA</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/BLEACH.jpg" alt="">
            <div class="title">
                <h4>BLEACH</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/JUJUTSU KAISEN.jpg" alt="">
            <div class="title">
                <h4>JUJUTSU KAISEN</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/GRAND BLUE.jpg" alt="">
            <div class="title">
                <h4>GRAND BLUE</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/FAIRY TAIL.jpg" alt="">
            <div class="title">
                <h4>FAIRY TAIL</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/HAIKYUU S4.jpg" alt="">
            <div class="title">
                <h4>HAIKYUU S4</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/DANSHI KOUKOUSHEI.jpg" alt="">
            <div class="title">
                <h4>DANSHI KOUKOUSHEI</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SUGESTION/GEKKAN SHOUJOU NOZAKI-KUN.png" alt="">
            <div class="title">
                <h4>GEKKAN SHOUJOU NOZAKI-KUN</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
    </div>
    <!-- END SUGGESTION -->

    <!-- RECENT -->
    <h2 class="section-title text-white">RECENT</h2>
    <div class="media-scroller snaps-inline">
        <div class="media-element">
            <img src="assets/img/RECENT/NON NO BIYORI.jpg" alt="">
            <div class="title text-white">
                <h4>NON NON BIYORI</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/SHOKUGEKI S1.png" alt="">
            <div class="title">
                <h4>SHOKUGEKI SEASON 1</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/SHOKUGEKI S2.jpg" alt="">
            <div class="title">
                <h4>SEHOKUGEKI SEASON 2</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/SHOKUGEKI S3.jpg" alt="">
            <div class="title">
                <h4>SEHOKUGEKI SEASON 3</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/KOBAYASHI SAN.jpg" alt="">
            <div class="title">
                <h4>KOBAYASHI</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/YOUJO SENKI.png" alt="">
            <div class="title">
                <h4>YOUJO SENKI</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/KARAKAI JOZU.jpg" alt="">
            <div class="title">
                <h4>KARAKAI JOZU</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/ATTACK ON TITAN.jpg" alt="">
            <div class="title">
                <h4>ATTACK ON TITAN</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/RECENT/ASSASINATION CLASSROOM.png" alt="">
            <div class="title">
                <h4>ASSASINATION CLASSROOM</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
    </div>
    <!-- END RECENT -->

    <!-- SHOUNEN -->
    <h2 class="section-title text-white">SHOUNEN</h2>
    <div class="media-scroller snaps-inline">
        <div class="media-element">
            <img src="assets/img/SHOUNEN/SWORD ART ONLINE.jpg" alt="">
            <div class="title text-white">
                <h4>SWORD ART ONLINE</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/BLOOD+.jpg" alt="">
            <div class="title">
                <h4>BLOOD+</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/KAZE NO STIGMA.jpg" alt="">
            <div class="title">
                <h4>KAZE NO STIGMA</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/VAMPIRE KNIGHT.jpg" alt="">
            <div class="title">
                <h4>VAMPIRE KNIGHT</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/DUNGEON NI DEAI WO MOTOMERU NO WA MACHIGATTEIRU DAROU KA.jpg" alt="">
            <div class="title">
                <h4>DUNGEON NI DEAI WO MOTOMERU</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/SHAKUGAN NO SHANA.png" alt="">
            <div class="title">
                <h4>SHAKUGAN NO SHANA</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/CAMPIONE  MATSUROWANU KAMIGAMI TO KAMIGOROSHI NO MAOU.jpg" alt="">
            <div class="title">
                <h4>CAMPIONE MATSUROWARU</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/HAKUOKI.jpg" alt="">
            <div class="title">
                <h4>HAKUOKI</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
        <div class="media-element">
            <img src="assets/img/SHOUNEN/SENGOKU BASARA.jpg" alt="">
            <div class="title">
                <h4>SENGOKU BASARA</h4>
                <p>rating</p>
                <img src="assets/img/star2.png" class="rating" width="20px">
                <h4 class="rating">7.8</h4>
            </div>
        </div>
    </div>
    <!-- END SHOUNEN -->

    <!-- JAVASCRIPT -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/search.js"></script>
</body>

</html>