<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon" />
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/style.css">


</head>

<body class="{{getWebsiteOptions()['theme_color']}}"
>

    <div class="template-password">
        <div class="container">
            <div id="container" class="text-center">
                <div>
                    <div id="login">
                        <div>
                            <div class="logo mb-4">
                                <a href="#">
                                    <img src="{{url('front')}}/images/icon/logo.png" alt="Multikart_fashion" class="img-fluid">
                                </a>
                            </div>
                            <h2 class="mb-3">
                                Will be Opening Soon!
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="#" class="theme-form">
                                    <div class="col-md-12 mt-2">
                                        <h3>Enter Your Email: </h3>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-md-12">
                                            <input type="password" name="password" id="password" class="form-control" autofocus="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="actions">
                                                <button type="submit" class="btn btn-solid">notify me</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div id="footer" class="mt-4">
                            <div id="owner">
                                Are you the store owner? <a href="#">Log in here</a> or <a href="#">change your password
                                    settings</a>
                            </div>
                        </div>
                    </div>
                    <div id="powered">
                        <p>© 2018, Powered by Multikart.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- latest jquery-->
    <script src="{{url('front')}}/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="{{url('front')}}/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="{{url('front')}}/js/lazysizes.min.js"></script>

    <!-- slick js-->
    <script src="{{url('front')}}/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="{{url('front')}}/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{url('front')}}/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="{{url('front')}}/js/theme-setting.js"></script>
    <script src="{{url('front')}}/js/script.js"></script>

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>


</body>

</html>