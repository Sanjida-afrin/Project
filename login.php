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
    <title>sanjidas Catering</title>
    <link rel="stylesheet" href="style1.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
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

            <div class="full">


                <div class="loginbox">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <img src="images/logo.png" class="pic">
                        <h1>Customer Login</h1>

                        <p>Username</p>
                        <input type="text" name="uname" placeholder="Enter Username">
                        <p>Password</p>
                        <input type="password" name="pass" placeholder="Enter Password">
                        <p id="psw"><a href="#">Forgot password?</a></p>
                        <!-- <br> -->
                        <!-- <input class="btn" type="submit" name="submit" value="Log In"> -->
                        <!-- <button class="btn btn3" type="submit" name="submit" >Submit</button> -->
                        <button name="submit" id="one">Submit</button>
                        <br><br>
                        <button onclick="signup()" id="two"><a href="register.php">Create Account</a></button>
                    </form>
                </div>


            </div>
        </section>

        <?php
	if(isset($_POST['submit']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
        echo $uname;
		if(empty($uname))
		{
			echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
		}
		else if(empty($pass))
		{
			echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
		}
		else
		{
			$fetch_query="SELECT *FROM user where User_Name = '$uname' AND Password= '$pass'";
			$mydb= new database();
			$response=$mydb->fetchdata($fetch_query);
			$data=mysqli_fetch_assoc($response);
		    if(mysqli_num_rows($response)> 0)
		    {
			    $_SESSION['username']=$data['User_Name'];
			    $_SESSION['auth']='1';
                echo $_SESSION['username'];
			    header("Location:register.php");
	        }
		    else
		    {
		        echo '<p style="text-align:center;color:red;font-weight:bold">Wrong Credentials</p>';
		    }
	    }
	}
	?>
        <?php } ?>

    </main>
    <footer>
        <p class="text-center mt-5 copyright">@Copyright <span class="text-success">Sanjida's</span> Catering Service
        </p>
    </footer>

</body>

</html>