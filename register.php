<?php
session_start();
if(isset($_SESSION['auth']))
{
	header("Location:index.html");
}
else
{
	?>
<?php ob_start();
require "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanjidas Catering</title>
    <link rel="stylesheet" href="style1.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <style>
    .signup-left,
    .signup-right {
        border-radius: 25px;
        background: #E5A060;
        color: white;
    }

    .register h2 {
        color: white;
        font-size: 58px;
    }

    .form-item input {
        width: 80%;
        padding: 12px 20px;
        margin: 8px 15px;
        box-sizing: border-box;
        border: none;
        background-color: black;
        color: white;
        /* background: transparent; */
        /* background: rgb(135, 123, 123); */
        /* color: #df0e0e; */
        /* border-bottom: 0px solid white; */
    }

    #agree-term {
        margin-left: -160px;
    }

    .agree-div {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .agree-text {
        margin-left: -200px;
    }

    .form-item i {
        color: white;
        font-size: 25px;
        margin-left: 12px;
    }

    .btn3 {
        margin-left: 200px;
        color: white;
    }

    .signup-right img {
        border-radius: 15px;
        padding-bottom: 10px;
        padding-right: 10px;
    }

    nav {
        width: 100%;
        height: 80px;
        font-family: alegreya, serif;
        font-size: medium;
    }

    .logo {
        height: 290px;
        margin-right: 100px;
        margin-bottom: 10px;

    }

    /* background image nav */
    .home-img {
        background-image: url(images/banner/home.jpg);
    }

    .service-img {
        background-image: url(images/banner/banner3.png);
    }

    .menu-img {
        background-image: url(images/pic.png);
    }

    .price_list-img {
        background-image: url(images/corporate.png);
    }

    .shop-img {
        background-image: url(images/banner/shop.png);
    }

    .slide-1 {
        /* background-image: url(images/banner/desh-catering-itemized-price-list-dhaka.jpg); */
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
        transition-duration: 0.3s, 0.3s, 0.3s, 0.3s;
        transition-timing-function: ease, ease, ease, ease;
        transition-delay: 0s, 0s, 0s, 0s;
        transition-property: background, border, border-radius, box-shadow;
        position: relative;
        background-attachment: fixed;

    }

    .bannerBlackOverlay {
        min-height: 100vh;
        width: 100%;
        background: rgba(0.2, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .bannerTitle {
        font-weight: 1000;
        font-size: 100px;
        color: #fff;
        text-align: center !important;
        position: relative;
    }

    .bannerBtn {
        background-color: #08af57;
        padding: 20px 40px;
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 600;
    }

    .cate-name {
        color: #f4cd78;
        font-family: alegreya sans, Sans-serif;
        font-size: 58px;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 1.3em;
        letter-spacing: .5px;
        margin-top: 200px;
    }

    /* index */

    .pri-cate {
        position: relative;
        height: 100%;
        width: 100%;
        background: rgba(79, 79, 79, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .pri-cate>div {
        font-weight: 1000;
        font-size: 10px;
        color: #fff;
        text-align: center !important;
        position: relative;
    }


    .cate-name2 {

        color: #fff;
        font-family: alegreya sans sc, Sans-serif;
        font-size: 35px;
        font-weight: 600;
        text-transform: uppercase;
        font-style: oblique;
        line-height: 1.2em;
        letter-spacing: 2.9px;
        margin-top: 50px;

    }

    .card-img-overlay>h3 {
        color: #ffce42;
        font-family: open sans, Sans-serif;
        font-size: 50px;
        font-weight: 550;
    }

    .card-img-overlay>p {
        text-align: center;
        color: #fff;
        font-size: 25px;
        font-weight: 300;
        line-height: 1.8em;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .home-container {
        margin-top: 40px;
        text-align: center;

    }
    </style>
</head>

<body class="gradient-background">

    <header>
        <!-- <div class="container"> -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top">
            <div class="container">
                <button class="navbar-toggler me-5 pe-5" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-bar justify-content-between" id="navbarTogglerDemo01">
                    <img src="images/logo.png" class="logo" alt="">
                    <ul class="navbar-nav mb-lg-0 mt-1">
                        <a class="navbar-brand px-3" href="index.html">HOME</a>
                        <a class="navbar-brand px-3" href="Services.html">SERVICES</a>
                        <a class="navbar-brand px-3" href="Menus.html">MENUS</a>
                        <a class="navbar-brand px-3" href="Price_list.html">PRICE LIST</a>
                        <a class="navbar-brand px-2" href="FAQ.html">FAQ</a>
                        <a class="navbar-brand px-3" href="shop.html">SHOP</a>
                        <a href="localhost:3360"><button class="navbar-brand btn bg-success text-light px-3"
                                type="submit">LOGIN</button></a>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main>

        <section>
            <div class="container register mt-5">
                <h2 class="form-title text-center">New Customer Registration</h2>
                <div class="row">
                    <div class="signup-left col-lg-6 col-sm-6">
                        <form id="form" action="" method="post" class="mt-5">
                            <div class="form-item">
                                <label for="name"><i class="fa-solid fa-user"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Full Name">
                            </div>
                            <div class="form-item">
                                <label for="uname"><i class="fa-solid fa-user"></i></label>
                                <input type="text" name="uname" id="uname" placeholder="Your User Name" />
                            </div>
                            <div class="form-item">
                                <label for="email"><i class="fa-solid fa-at"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-item">
                                <label for="number"><i class="fa-solid fa-phone"></i></label>
                                <input type="number" name="number" id="number" placeholder="Your Contact Number" />
                            </div>
                            <div class="form-item">
                                <label for="pass"><i class="fa-solid fa-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-item">
                                <label for="re_pass"><i class="fa-solid fa-lock"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat Your Password" />
                            </div>
                            <div class="agree-div">
                                <input type="checkbox" name="agree-term" id="agree-term" />
                                <label for="agree-term" class="agree-text">I agree all statements in <a href="#">Terms
                                        of service</a></label>
                            </div>
                            <!-- <input type="button" value="submit" onclick="register()"> -->
                            <button class="btn btn3" type="submit" name="submit">Register</button>
                            <span id="response">

                            </span>
                        </form>
                    </div>
                    <div class="signup-right col-lg-6 col-sm-6">
                        <img src="images/reg.gif" width="550px" height="350px" alt="" class="mt-5">
                    </div>
                </div>
            </div>

        </section>

        <?php
	if(isset($_POST['submit']))
    {
        try{
			$name=$_POST['name'];
            $uname=$_POST['uname'];
		$email=$_POST['email'];
        $number=$_POST['number'];
		$pass=$_POST['pass'];
	
		if(empty($name))
		{
			echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
		}
        else if(empty($uname))
        {
            echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
        }
		else if(empty($email))
		{
			echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
		}
        else if(empty($number))
        {
            echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
        }
        else if(empty($pass))
        {
            echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
        }
        else if(strcmp($pass,$_POST['re_pass'])!=0)
        {
            echo '<p style="text-align:center;color:red">Password Does Not Match!!!</p>';
        }
        // else if(strcasecmp ($pass, $re_pass) != 0)
        // {
        //     echo '<p style="text-align:center;color:red">Password Not Matched!!!</p>';
        // }
		else
		{
			$insert_query="INSERT INTO user(Name, User_Name, Email, Number, Password) VALUES('$name','$uname','$email','$number','$pass')";
			$mydb= new database();
			$response=$mydb->insertdata($insert_query);
		    if($response==true)
		    {
			    header("Location:login.php");
	        }
		    else
		    {
		        echo '<p style="text-align:center;color:red">Unable To Register!!!</p>';
		    }
	    }
	}
	catch(Exception $e)
		    {
		    	 echo '<p style="text-align:center;color:red;font-weight:bold">Email Already In Use!!!</p>';
		    }
	}
	?>
        <?php } ?>
    </main>
    <footer>
        <p class="text-center copyright" style="margin-top: 100px;">@Copyright <span
                class=" text-success">Sanjida's</span>
            Catering
            Service
        </p>
    </footer>
    <!-- connecting javascript  -->
    <!-- <script src="script.js"></script> -->
</body>

</html>