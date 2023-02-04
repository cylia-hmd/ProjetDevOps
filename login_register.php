
<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!-- Title -->
    <title>Gallery</title>
    <?php include_once('head.php') ?>
</head>

<body>


    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        
    <?php include_once('navbar.php') ?>
    
      
        <!-- Mobile Header area End -->

       <!-- Breadcrumb area Start -->
       <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid mt--145">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Login &amp; Register</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Login Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-md-6 mb-sm--30">
                            <div class="login-box">
                                <h4 class="mb--35 mb-sm--20">Login</h4>
                                <form class="form form--login">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Username or email
                                            address <span class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="username_email"
                                            name="username_email">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password"
                                            name="password">
                                    </div>
                                    <div class="d-flex align-items-center mb--20">
                                        <div class="form__group">
                                            <input type="submit" value="Log in" class="btn btn-submit btn-style-1">
                                        </div>
                                        <div class="form__group">
                                            <label class="form__label checkbox-label" for="store_session">
                                                <input type="checkbox" name="store_session" id="store_session">
                                                <span>Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <a class="forgot-pass" href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="register-box">
                                <h4 class="mb--35 mb-sm--20">Register</h4>
                                <form class="form form--login">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Email address <span
                                                class="required">*</span></label>
                                        <input type="email" class="form__input form__input--3" id="email" name="email">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password"
                                            name="password">
                                    </div>
                                    <p class="privacy-text mb--20">Your personal data will be used to support your
                                        experience throughout this website, to manage access to your account, and for
                                        other purposes described in our privacy policy.</p>
                                    <div class="form__group">
                                        <input type="submit" value="Register" class="btn btn-submit btn-style-1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

        <?php include_once('footer.php') ?>

    </div>
    <!-- Main Wrapper End -->


    <?php include_once('scripts.php') ?>


</body>

</html>