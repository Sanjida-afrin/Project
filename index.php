<?php ob_start();
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    .date {
      width: 50px;
      text-align: center;
      color: #33475b;
      background-color: #f5f8fa;
      border: 1px solid #cbd6e2;
    }

    .compulsary:after {
      margin-left: 4px;
      color: red;
      content: "*";
    }

    #text-some {
      height: 80px;
      color: #33475b;
      background-color: #f5f8fa;
      border: 1px solid #cbd6e2;
    }

    .form-control {
      display: inline-block;
      width: 100%;
      height: 40px;
      padding: 9px 10px;
      font-size: 16px;
      font-weight: 400;
      line-height: 22px;
      color: #33475b;
      background-color: #f5f8fa;
      border: 1px solid #cbd6e2;
      box-sizing: border-box;
      border-radius: 3px;
    }

    .top {
      width: 100%;
      margin-bottom: 3px;
      line-height: normal;
      font-size: 14px;
      color: #33475b;
      font-weight: bold;
    }

    .form-head {
      display: block;
      font-size: 2em;
      margin-block-start: 0.67em;
      margin-block-end: 0.67em;
      margin-inline-start: 0px;
      margin-inline-end: 0px;
      margin-top: 20px;
      font-weight: bold;
    }

    .small-letter {
      margin-bottom: 6px;
      color: #7c98b6;
      font-size: 11px;
    }
    .error{
      position: absolute;
      color: red;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <section class="m-5">
    <div class=" form-fill">
      <div class="text-center top">
        <h1 class="form-head">REQUEST FOR QUOTATION</h1>
        <p style="color: #7390ad; font-size: 16px;">Please fill out the form below and hit 'Submit' <br> <br>
          We will get back to you ASAP</p>
      </div>
      <div>
      <form id="form" action="" method="post" class="m-5">
        <!-- <form class="m-5"> -->
          <div class="mb-3">
            <label for="exampleInputFullname" class="form-label">Full Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputFullname" aria-describedby="FullnameHelp">

          </div>
          <div class="mb-3">
            <label for="exampleInputmobile" class="form-label compulsary">Mobile phone number</label>
            <input name="number" type="text" class="form-control" id="exampleInputmobile" onkeyup="validMobile()">
            <span class="error" id="number-error"></span>
          </div>
          <div class="mb-3 mt-5">
            <label for="exampleInputEmail1" class="form-label compulsary">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" onkeyup="validEmail()">
            <span class="error" id="email-error"></span>
          </div>
          <!-- <label for="exampleInputEvent" class="form-label mt-5">Event Type</label>
          <div>
            <div class="form-check">
              <input name="flexRadioDefault" class="form-check-input" type="radio" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Private/Social
              </label>
            </div>
            <div class="form-check">
              <input name="flexRadioDefault" class="form-check-input" type="radio"  id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Corporate
              </label>
            </div>
          </div> -->
          <label for="exampleInputDate" class="form-label mt-3">Event Date</label>
          <div style="color:#7c98b6 ;">

            <input type="text" id="date" name="date" class="date form-label" style="width:55px ;" placeholder="YYYY"><span
              class="ms-1">/</span>
            <input type="text" id="date" name="date" class="date form-label" placeholder="MM"> <span>/</span>
            <input type="text" id="date" name="date" class="date form-label" placeholder="DD">
          </div>
          <!-- <label for="exampleInputDate" class="form-label mt-3 compulsary">Select Your Requirements</label>
          <div >
            <div class="form-check">

              <input class="form-check-input" type="checkbox" value="" id="flexfood " >
              <label class="form-check-label" for="flexfood"> 
                Only Food
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Cutlery & Crockery
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexwaiter" >
              
              <label class="form-check-label" for="flexwaiter">
                Waiter
              </label>

            </div>
          
          </div> -->
          <div class="mt-4">
            <label for="requirement" class="mt-3 compulsary">Write down your menu and other requirements</label>
            <p class="small-letter">Be specific about quantity of your menu items and others (cutlery, crockery, buffet
              dish, and waiter, etc)</p>
            <textarea name="text" id="text-some" class="w-100 form-control" cols="30" rows="10"onkeyup="validBox()"></textarea>
           
          </div> <span class="error" id="box-error"></span>
          <div class="mt-4">
            <label for="total" class="compulsary mt-3">Total Number of Guest</label>
            <p class="small-letter">Order Quantity</p>
            <input name="gnum" type="text" class="form-control" onkeyup="validTotal()" id="totalguest">
            <span class="error" id="total-error"></span>
          </div>
          <button name="submit" type="submit" class="btn btn-danger my-5 px-4">Submit</button>
        </form>
      </div>
    </div>
  </section>

  <?php
	if(isset($_POST['submit']))
    {
        try{
			$name=$_POST['name'];
      $number=$_POST['number'];
      $email=$_POST['email'];
      $date=$_POST['date'];
      $text=$_POST['text'];
      $gnum=$_POST['gnum'];
	
		if(empty($name))
		{
			echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
		}
    else if(empty($number))
  {
     echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
    }
		else if(empty($email))
		{
			echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
		}
    else if(empty($date))
  {
     echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
    }
    else if(empty($text))
  {
     echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
    }
    else if(empty($gnum))
  {
     echo '<p style="text-align:center;color:red">Please Provide All Information!!!</p>';
    }
		else
		{
      $insert_query="INSERT INTO quotation(Name, Number, Email, Date, Text, Guest) VALUES ('$name','$number','$email','$date','$text','$gnum')";
			// $insert_query="INSERT INTO user(Name, User_Name, Email, Number, Password) VALUES('$name','$uname','$email','$number','$pass')";
			$mydb= new database();
			$response=$mydb->insertdata($insert_query);
		    if($response==true)
		    {
			    header("Location:index.php");
	        }
		    else
		    {
		        echo '<p style="text-align:center;color:red">Unable To Submit!!!</p>';
		    }
	    }
	}
	catch(Exception $e)
		    {
		    	 echo '<p style="text-align:center;color:red;font-weight:bold">Email Already In Use!!!</p>';
		    }
	}
	?>

<script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>