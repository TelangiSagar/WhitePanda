<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" type="text/css" href="external.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">



<style>

.lang{
font-family:calibri;
}
#box {
      background-color: rgb(250,253,252);
    background-position: right bottom, left top;
    background-repeat: no-repeat, repeat;
    padding: 20px;
    margin: 90px;
    width: 1090px;
}
#box1{
background-color: rgb(249,252,249);
background-position: right bottom, left top;
    background-repeat: no-repeat, repeat;
    padding: 55px;
   margin: 1px;
    margin-left: 100px;
    width: 300px;

}
#head1{
margin:90px;
height:1px;
}
#img1{
margin:2px;
height:60px;
border-radius:50%;
position: absolute;
    TOP: 580px;
    left: 110px;
}

.w3-btn {margin-bottom:10px;}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.row {
    margin-right: 200px;
    margin-left: -9px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

	
	body{
		background: #eeeeee;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {		
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px;
		border-top: 1px;
		border-left: 1px;
		border-right: 1px;
		box-shadow: 0 0 4px rgba(0,0,0,.2);
		margin-left:85px;
	}
	.nav-link img {
		border-radius: 50%;
		width: 43px;
		height: 43px;
		margin: -8px 0;
		float: left;
		margin-right: 50px;
		margin-top: 14px;
	}

	.navbar .nav-item i {
		font-size: 30px;
		margin-right: -7px;
	}
	.navbar .nav-item.open > a {
		background: none !important;
	}
	.navbar .badge {
		background: #f44336;
		font-size: 12px;
		border-radius: 20px;
		position: absolute;
		min-width: 10px;
		padding: 4px 5px 0;
		min-height: 18px;
		top: 14px;
	}
	.navbar ul.nav li a.notifications{
		position: relative;
		margin-right: 25px;
	}

	.navbar a.notifications .badge {
		margin-left: -8px;
	}

	.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
		background: transparent !important;
	}
.logo{
	margin-left:60px;
	margin-top:10px;
	
}



.sidebar {
  height: 100%;
  width: 85px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 16px;
  box-shadow: 0 0 4px rgba(0,0,0,.1);
  margin-top:0px;
}

.sidebar a {
  padding: 0px 0px 0px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  margin-left:30px;
  margin-top:90px;
  
}

.sidebar a:hover {
  color: ;
  );
}
.grid
{
	margin-top:80px;
}
.grid a:hover {
	border-right: 2px;
	border-right: dashed green;
}
.search
{
	margin-top:-60px;

}
.search a:hover {
	border-right: 2px;
	border-right: dashed green;
}
.store
{
	margin-top:-60px;
	
}
.store a:hover {
	border-right: 2px;
	border-right: dashed green;
}
.active{
	color:green;
}
.sidebar a:hover {
  color: grey;
}
.lang{
	margin-left:60px;
}
</style>
</head>
<body>

<div class="sidebar">
<div class="grid">
<a class="active" href="#grid"><i class="fas fa-th-large"></i></a>
</div>
<div class="search">
<a href="#search"><i class="fas fa-search"></i></a>  
</div>
<div class="store">
<a href="#store"><i class="fas fa-store"></i></a>
</div>
</div>
<div class="main">
<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
<img src="./images/whitepanda.png" class="logo" alt="" style="float:left;width:100px;height:42px;" > 		
	</div>

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<ul class="nav navbar-nav navbar-right ml-auto">	
			<li class="nav-item"><a class="nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">100</span></a></li>
			<a href="#" class="nav-link user-action"><img src="https://www.seekclipart.com/clipng/middle/103-1032140_graphic-transparent-1-vector-flat-small-user-icon.png" class="avatar" alt="Avatar"></a>
		</ul>
	</div>
</nav>
<div class="lang"  >
<div id="head1">
<font size="7"> Content Store </font>
</div>
<div id="box">
<h4 style="color:LightBlue;"> Got bulk orders or almost similar orders ? Fill the order brief in an excel sheet</h4>
<p style="color:grey"> If you're wondering about an easy way to place order in large numbers, we provide a way customized just for that.<br>
Download our excel sheet, and fill the order brief in the prescribed format and submt. In case you need any help, <u>we<br> are just a click away to assist you in placing your order</u></p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(250,253,252) w3-border w3-border-blue w3-round-large " style="font-size:14px; cursor:pointer;" >Order via Excel Sheet</button></b></p>
</div>
</div>

<div class="row">
  <div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px; left:170px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> Blog/ Article</b>     from $500</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>

<div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar1.jpg" alt="Avatar" style="width:65px; position: absolute;
    TOP: 580px;
    left: 540px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:lightskyblue;"><b> Newsletter</b><br>from $1000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>

<div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px; position: absolute;
    TOP: 580px;
    left: 910px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> Whitepaper</b><br>       from $2000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>
</div>

<div class="row">
  <div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px; position: absolute;
    TOP: 910px;
    left: 170px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> e-book</b> <br>         from $1000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>

<div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px;position: absolute;
    TOP: 910px;
    left: 540px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> Report/ Guide</b>     from $1000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>

<div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px;position: absolute;
    TOP: 910px;
    left: 910px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b>Prod. Description</b>     from $500</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>
</div>

<div class="row">
  <div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px;position: absolute;
    TOP: 1235px;
    left: 170px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> Website Content</b>     from $1000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>

<div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px;position: absolute;
    TOP: 1235px;
    left: 540px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> Video Script</b> <br>    from $1000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>

<div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px;position: absolute;
    TOP: 1235px;
    left: 910px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> Company Profile</b>     from $2000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>
</div>

<div class="row">
  <div class="column">
<a href="#demo2" data-toggle="collapse">
<div id="box1">
</a>
<img id="img1" src="./includes/avatar.jpg" alt="Avatar" style="width:65px;position: absolute;
    TOP: 1560px;
    left: 170px;">
<p style="font-size:20px; margin-left:45px; margin-top:-45px; color:black;"><b> Press Release</b>     from $2000</p>
<br><br><p style="color:gray; margin-left:-40px;margin-top:-20px; padding:-100px; text-align:sentence;"> Typically 450-400 words, an e-books is perfect for your target audience ranging from prospective customers to users</p>
<div class="w3-container">
<p><b><button class="w3-btn w3-rgb(249,252,249) w3-border w3-border-blue " style="font-size:14px; cursor:pointer; margin-left:-50px; width:100px;" >Order</button></b></p>
</div>
</div>
</div>
</div>
</div>
</div>   
</body>
</html> 
