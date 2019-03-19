
<html>
<head>
    <?php include_once('./_partial/_scripts.php') ?>
    <?php include_once('./_partial/_styles.php') ?>
    <?php include_once('./_partial/_globalsettingsinit.php') ?>
    <?php include_once('./_partial/_appicon.php') ?>
    <?php include_once('./_partial/_title.php') ?>
</head>
<body>
   <!-- Left panel with reveal effect-->
        <?php include_once('./_partial/_leftnavpan.php')?>
    <!-- Views -->
    <div class="views">
        <!-- Your main view, should have "view-main" class -->
        <div class="view view-main">
               <?php include_once('./_partial/_topnavheader.php')?>
               <?php include_once('./_partial/_pageheader.php')?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>



<section class="blockquote">
    <blockquote class="blockquote">
                                    <?php if (isset($_SESSION['username'])) {
                                        echo  "You're logged in...<br/>Welcome back ";
                                        echo $_SESSION['username'];
                                        echo "<br/> Your email is: ";
                                        echo $_SESSION['email'];
                                        echo '<form action="upload.inc.php" method="post" enctype="multipart/form-data">
                                        Select image to upload:
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        <input type="submit" value="Upload Image" name="submit">
                                        </form>';
                                        echo '<a href="forms.php">Forms</a>';
                                        
                                      }                       
                                       
                                    ?>
                                    </blockquote>
                                </section>
                <!-- footer -->
        </div>
                <?php include_once('./_partial/_footer.php')?>
                <?php include_once('./_partial/_buttomtoolbar.php')?>
              </div>  
        </div>  
<script type="text/javascript" src="js/my-app.js"></script>
</body>
</html>
