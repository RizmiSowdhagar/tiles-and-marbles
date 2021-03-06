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

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  margin-left: 20px;
  width: 70%;
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
		margin-right: 30%;
		margin-left: 33%;
		padding-bottom: 30px;
		background-color: white;
		height: 90%;
		width: 35%;
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
	<form action="connection2.php" style="max-width:500px;margin:auto">
  <h2 style="font-size: 25px; margin-top:20%; text-align: center;margin-bottom: 40px;">Create An Account</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="FirstName" name="frstnm">
    <input style="margin-left: 20px;" class="input-field" type="text" placeholder="LastName" name="lstnm">
  </div>
  
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="telephone" placeholder="Mobile Number" name="mob">
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email Address" name="email">
  </div>
  <div class="input-container">
  	<i class="fa fa-calendar icon"></i>
  	<select style="width: 110px;" name="month">
	<option value="month">Month</option>
	<option value="january">January</option>
	<option value="febuary">Febuary</option>
	<option value="march">March</option>
	<option value="april">April</option>
	<option value="may">May</option>
	<option value="june">June</option>
	<option value="july">July</option>
	<option value="august">August</option>
	<option value="september">September</option>
	<option value="october">October</option>
	<option value="november">November</option>
	<option value="december">December</option>
</select>
<select style="margin-left: 20px; width: 70px;" name="Date">
	<option value="date">Date</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
<select style="margin-left: 20px; width: 80px;" name="Year">
	<option value="year">Year</option>
	<option value="2019">2019</option>
	<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
</select>
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
  <div class="input-container">
    <i class="fa fa-check icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="conpsw">
  </div>
  <div class="input-container">
    <i class="fa fa-thumb-tack icon"></i>
    <input class="input-field" type="text" placeholder="Pincode" name="pin">
  </div>
  <div class="input-container">
    <i class="fa fa-map-marker icon"></i>
    <input class="input-field" type="text" placeholder="State" name="state">
  </div>
  <div class="input-container">
    <i class="fa fa-location-arrow icon"></i>
    <input class="input-field" type="text" placeholder="Address" name="add">
  </div>
  <div class="input-container">
    <i class="fa fa-mars icon"></i>
    <input style=" margin-top: 10px" class="input-field" type="radio" placeholder="male" name="gen"><i class="fa fa-venus icon"></i>
    <input style=" margin-top: 10px" class="input-field" type="radio" placeholder="female" name="gen">
 
  </div>	
    <div class="input-container">
  <input style="margin-top: 18px; margin-right: 13px;margin-left: 10px;" type="checkbox" name="agree"><p>By clicking here,I agree to the Terms and Conditions,Policies, & Privacy Policy</p></div>
  <button  style="margin-top: 30px; margin-left: 20px;" type="submit" class="btn" onClick="alert(' Thank You for Creating An Account')">SIGN UP</button>
   </div>
</form>
</div>
<div style="background-color: white; height: 90px;width: 100%; overflow: hidden; border-top: 1px solid black">
		    <center><h5 style="font-size: 20px;">Copyrights &copy; 2020,All Rights Reserved</h5></center>

		</div>

</body>
</html>