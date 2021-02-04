<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
        overflow: auto;
        background:linear-gradient(50deg,#FBF709 ,#3498DB);
	}
	div.head{
		overflow: hidden;
		background-color: #D1F2EB ;
		height: 130px;
		width: 100%;
		margin: auto;
		outline: 2px solid black;
		padding: 0;
	}
	h1{
		position: relative;
		font-size: 30px;
		font-style: normal;
		top: 40px;
		left: 10px;
		font-family: Castellar;
		text-transform: uppercase;
		margin-left: 50px;
	}
	a.menu, li.menu{
		list-style-type: none;
		font-size: 20px;
		display: inline;
		padding-right: 20px;
		float: right;
		top: 0;
		position: relative;
		color: black;
		text-decoration: none;
		text-transform: uppercase;
	}
	i{
		padding-right: 5px;
		color: black;
	}
	a.menu:hover{
		border: 1px solid black;
		padding: 10px;
		border-radius:8px;
	}
	.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 70%;
  margin-left: 15%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
  margin-left: 10px;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  margin-left: 55px;
  width: 68%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
div.body{
		overflow: hidden;
		position: relative;
		text-align: center;
		margin-top: 10%;
		margin-bottom: 10%;
		margin-right: 35%;
		margin-left: 35%;
		padding-bottom: 30px;
		background-color: white;
		height: 90%;
		width: 30%;
	}
</style>
<body>
	<div class="head">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScH9_MSI6kDowtetZc7cFKE-QNQztcVx2ceA&usqp=CAU" width="150" height="200" style="position: relative; float: left;">
		<h1>square pride</h1>
			<ul class="menu">
				<li class="menu"><a class="menu" href="login.html"><i class="fa fa-sign-in" ></i>log in</a></li>
			    <li class="menu"><a class="menu" href="signup.html"><i class="fa fa-sign-in" ></i>sign up</a></li>
			    <li class="menu"><a class="menu" href="about-us.html"><i class="fa fa-address-book-o"></i>about us</a></li>
			    <li class="menu"><a class="menu" href="home.html"><i class="fa fa-home" ></i>home</a></li>
			</ul>
			</div>
	<div  class="body">
		<i style="text-align: center; margin-top: 60px; border-radius: 40px; " class="fa fa-user-circle icon"></i>
	<form action="connection1.php" method="POST" style="max-width:500px;margin:auto">
  <h2 style="font-size: 25px; margin-top:20%; text-align: center;margin-bottom: 40px;">Login</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="us">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pw">
  </div>
  <div style="position: relative;float: right;right: 60px; "><a style="text-decoration: none; color: grey" href="#">Forgot Password</a></div>

  <input style="margin-top: 30px" type="submit" class="btn"><a style="color: white; text-decoration: none;" href="home.html" onClick="alert('You Are Logged In')"> LOGIN</a></form>
  <p style="color: grey; text-align: center;margin-top: 30px">Or SignUp with</p>
  <div><a style="font-size: 35px; padding-bottom: 15px; position: relative; float:left;left: 38%;" href="https://www.facebook.com/"><i style="color: #3b5998;" class="fa fa-facebook-square"></i></a>
				<a style="font-size: 35px; padding-bottom: 15px; position: relative; float:left;left: 40%; " href="https://twitter.com/?lang=en"><i style="color:#17A7EE" class="fa fa-twitter-square" ></i></a>
				<a style="font-size: 35px; padding-bottom: 15px; position: relative; float:left;left: 42%; " href="https://www.google.com/intl/en_in/gmail/about/"><i style="color:red" class="fa fa-google" ></i></a><br></div>
				<div style=" position: relative; text-align: center;"><p style="color: grey; text-align: center;padding-top: 70px; position:relative;">Or SignUp using<br>
					<a style="text-decoration:underline;color: grey;"href="signup.html">SIGN UP</a></p></div>

     </div>
     <div style="background-color: white; height: 90px;width: 100%; overflow: hidden; border-top: 1px solid black">
		    <center><h5 style="font-size: 20px;">Copyrights &copy; 2020,All Rights Reserved</h5></center>

		</div>




</body>
</html>