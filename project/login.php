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
                                        <a href="register.php">회원가입</a>
                                        <a href="login.php">로그인</a>
                                        <a href="#">마이페이지</a>
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
        <section style="padding-top:200px;width:30%;">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">이메일</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="이메일을 적어주세요">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">비밀번호</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="비밀번호를 적어주세요">
                </div>
                <button type="submit" class="btn btn-primary">로그인</button>
            </form>
        </section>
        <footer>
            <img src="assets/img/002.png" width="350" height="113" style="bottom:0; position: fixed;">
        </footer>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>