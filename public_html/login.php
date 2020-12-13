<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Báo Đây!.">
        <meta name="author" content="ChiThien|HoangHuy">


        <!-- App title -->
        <title>Báo Đây | Admin Login</title>

        <!-- App css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/core.css" rel="stylesheet" type="text/css">
        <link href="css/pages.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="https://kit.fontawesome.com/95a19bc703.js" crossorigin="anonymous"></script>
        
        

    </head>

    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.php" class="text-success">
                                            <span><img src="images/Logo.png" alt="" height="90"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <!-- <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off"> -->
                                                <p>
                                                    <label for="user_login">Tên người dùng hoặc Địa chỉ Email</label>
                                                    <input type="text" name="username" id="user_login" aria-describedby="login_error" class="form-control input" value="">
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <!-- <input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off"> -->
                                                <div class="user-pass-wrap">
                                                    <label for="user_pass">Mật khẩu</label>
                                                    <div class="password-group">
                                                        <input type="password" name="password" id="user_pass"
                                                            class="form-control password-input" value="" size="20">
                                                        <button onclick="showHidePass('user_pass','btn-show-hide','eye')" type="button" id="btn-show-hide" class="btn-hide" data-toggle="0"
                                                            aria-label="Hiện mật khẩu"><i id="eye" class="fas fa-eye"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-6">
                                                <a class="forgot-pw" href="#"><label for="">Quên mật khẩu?</label></a>
                                            </div>
                                            <div class="col-xs-6">
                                                <p class="submit">
                                                    <input type="submit" name="login" class="btn btn-primary btn-lg"
                                                        value="Đăng nhập">
                                                </p>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                            <div class="text-center account-footer m-t-30">
                                <a href="http://baoday.000webhostapp.com/">
                                    <label for="account-footer"> Quay lại trang chủ Báo Đây !</label>
                                </a>   
                            </div>
                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/showHidePass.js"></script>

        <!-- App js -->
        <!-- Show Hide Pwd -->
        
    </body>
</html>