<?php 
include('include/dbconfig.php'); 
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="" />
        <title>카카오프렌즈 클론 코딩</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/gallery.theme.css">
        <link rel="stylesheet" href="assets/css/gallery.min.css">
    </head>
    <body>
        <header class="mb-5">
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-75 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" id="title">KAKAO FRIENDS</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" href="" id="menu">카테고리</a>
                                <div class="dropdown-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-2" id="submenu">
                                                <a href="#">전체 분류</a>
                                                <a href="#">Link 1</a>
                                                <a href="#">Link 2</a>
                                                <a href="#">Link 3</a>
                                            </div>
                                            <div class="col-4" id="submenu">
                                            </div>
                                            <div class="col-6" id="submenu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" id="menu">스토리</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" id="menu">뮤지엄</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" id="menu">매장안내</a>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="" id="menu">고객센터</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <span style="font-size:1.5rem;">
                                <i class="fa fa-search"></i>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span style="font-size:1.5rem;">
                                <div class="dropdown">
                                    <i class="fa fa-user"><a class="nav-link" href="" id="menu"></a></i>
                                    <div class="dropdown-content-user">
                                        <?php if(!isset($_SESSION['name'])){ echo '<a href="register.php">회원가입</a><a href="login.php">로그인</a>';}?>
                                        <?php if(isset($_SESSION['name'])){ echo '<a href="mypage.php">마이페이지</a>';}?>
                                    </div>
                                </div>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span style="font-size:1.5rem;"><i class="fa fa-shopping-cart"></i></span>
                        </li>
                        <li class="nav-item">
                            <span style="font-size:1.5rem;"><i class="fa fa-globe"></i></span>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section>
            <div class="gallery items-3">
                <div id="item-1" class="control-operator"></div>
                <div id="item-2" class="control-operator"></div>
                <div id="item-3" class="control-operator"></div>
            
                <figure class="item">
                    <div class="secondary-controls">
                        <div class="superfluous">
                            <nav style="width:100%">
                                <a href="#item-3"><i class="fa fa-arrow-left"></i></a>
                                <a href="#item-2"><i class="fa fa-arrow-right"></i></a>
                            </nav>
                        </div>
                    </div>
                </figure>
            
                <figure class="item">
                    <div class="secondary-controls">
                        <div class="superfluous">
                            <nav style="width:100%">
                                <a href="#item-1"><i class="fa fa-arrow-left"></i></a>
                                <a href="#item-3"><i class="fa fa-arrow-right"></i></a>
                            </nav>
                        </div>
                    </div>
                </figure>
            
                <figure class="item">
                    <div class="secondary-controls">
                        <div class="superfluous">
                            <nav style="width:100%">
                                <a href="#item-2"><i class="fa fa-arrow-left"></i></a>
                                <a href="#item-1"><i class="fa fa-arrow-right"></i></a>
                            </nav>
                        </div>
                    </div>
                </figure>
            
                <div class="controls">
                <a href="#item-1" class="control-button">•</a>
                <a href="#item-2" class="control-button">•</a>
                <a href="#item-3" class="control-button">•</a>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img id="card" src="assets/img/001.jpg">
                    </div>
                    <div class="col">
                        <img id="card" src="assets/img/001.jpg">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img id="card" src="assets/img/001.jpg">
                    </div>
                    <div class="col">
                        <img id="card" src="assets/img/001.jpg">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <hr>
            <div class="container">
                <h1 id="subtitle">새로 나온 신상품</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/001.jpg">
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="assets/img/002.jpg">
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000</p>
                        <button>담기</button>
                    </div>
                    <div class="col-2">
                        <img src="assets/img/002.jpg">
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000</p>
                        <button>담기</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="assets/img/002.jpg">
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000</p>
                        <button>담기</button>
                    </div>
                    <div class="col-2">
                        <img src="assets/img/002.jpg">
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000</p>
                        <button>담기</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="assets/img/002.jpg">
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000</p>
                        <button>담기</button>
                    </div>
                    <div class="col-2">
                        <img src="assets/img/002.jpg">
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000</p>
                        <button>담기</button>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <img src="assets/img/002.png" width="350" height="113">
        </footer>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>