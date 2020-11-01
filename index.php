<?php include'inc/connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bayfront</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <!-----------------navigation----------------->
 <nav class="nav">
<div class="nav-menu flex-row">
    <div class="nav-brand">
        <a href="#" class="text-gray">Bay Front</a>
        <img src="assets/logo.png">
    </div>
    <div class="toggale">
        <div class="togggle-icon">
           <i class="fas fa-bars"></i>
        </div>
    </div>
    <div>

            <ul class="nav-items">
                <li class="nav-link">
                    <a href="#">Home</a>
                </li>

                <li class="nav-link">
                    <a href="#">Room&Lifestyle</a>
                </li>
                <li class="nav-link">
                    <a href="#">Dining</a>
                </li>
                <li class="nav-link">
                    <a href="#">Surf</a>
                </li>
                <li class="nav-link">
                    <a href="#">Activities</a>
                </li>
                
            </ul>
        
    </div>
    <div class="social-icon text-gray">
     <a href="#"><i class="fab fa-facebook-f"></i></a>
     <a href="#"><i class="fab fa-instagram"></i></a>
     <a href="#"><i class="fab fa-twitter"></i></a>
     <a href="#"><i class="fab fa-google-plus-g"></i></a>

    </div>
</div>

 </nav>
    <!----x-------------navigation----------------->


    <!----------------------------/maun site section---------------->
<main>
<!-------------------site title------------------>

<section class="site-title">
<div class="site-background">
    <h1>Bay Front</h1>
    <h3>Amazing sea side hotel</h3>
    <a href="process.php">
<!--<button  class="btn" type="submit" name="btn1">SIGN-IN</button>-->
<button class="btn" type="submit" name="btn2">SIGN-UP / SIGN-IN</button>
    </a>
</div>

</section>


<!--------x-----------site title-----------x------->



</main>


    <!-----------x-----------------/manu site section--------x-------->

    <script src="js/script.js"></script>
</body>
</html>

<?php mysqli_close($connection); ?>


