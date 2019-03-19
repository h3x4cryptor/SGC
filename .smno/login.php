
<html>
<head>
    <?php include('./_partial/_scripts.php') ?>
    <?php include('./_partial/_styles.php') ?>
    <?php include('./_partial/_globalsettingsinit.php') ?>
    <?php include('./_partial/_appicon.php') ?>
    <?php include('./_partial/_title.php') ?>
</head>
<body>
   <!-- Left panel with reveal effect-->
        <?php include('./_partial/_leftnavpan.php')?>
    <!-- Views -->
    <div class="views">
        <!-- Your main view, should have "view-main" class -->
        <div class="view view-main">
               <?php include('./_partial/_topnavheader.php')?>
            <!-- Page Header start -->
            <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
            <div class="pages navbar-through toolbar-through">
                <!-- Page, "data-page" contains page name -->
                <div data-page="login" class="page">
                    <!-- Scrollable page content -->
                    <div class="page-content">
                        <div class="content-block">
                            <div class="container">
                            <br /><br /><br /><br /><br />
                               <center>
                               <section class="login">
                                    <div class="container">
                                    <br />
                                    <center><img src="img/logo.png" title="Logo" hieght="120" width="220"></img></center>
                                             <h3><i class="icon fa fa-lock"> Login:</h3></i>
                                           <form method="POST" action="signin.inc.php">
                                              <br />
                                              <input class="form-control" type="text" class="input" name="username" placeholder="Username..." /><br />
                                              <input class="form-control" type="password" class="input" name="pass" placeholder="Password..." /><br />
                                              <input class="btn btn-primary" type="submit" value="Login" name="loginbutton"/>
                                            </form>
                                            <br />
                                    <span style="font-size:10;"><p> Don't have an account? <a href="register.php"><i class="icon fa fa-user"> Signup HERE.</i></a></span>
                                    </div>
                                </section>
                                </center>
                                <!-- footer -->
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
                </div>
                <?php include('./_partial/_footer.php')?>
                <?php include('./_partial/_buttomtoolbar.php')?>
            </div>  
         </div>  
      </div>              
<script type="text/javascript" src="js/my-app.js"></script>
</body>
</html>
