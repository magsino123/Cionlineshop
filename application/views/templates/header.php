<!DOCTYPE html>
<html>
<head>
	<script>
            var ScrollMsg= "Ci Online Shop"
            var CharacterPosition=0;
            function StartScrolling() {
            document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
            ScrollMsg.substring(0, CharacterPosition);
            CharacterPosition++;
            if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
            window.setTimeout("StartScrolling()",150); }
            StartScrolling();
        </script>
        <link rel="icon" type="image" href="<?php echo base_url().'assets/logo/ci.png'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<style>
    <style>
  
* {
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  line-height: 1.6;
  margin: 0;
  min-height: 100vh;
}
ul {
  margin: 0;
  padding: 0;
  list-style: none;
}


h2,
h3,
a {
  color: #34495e;
}

a {
  text-decoration: none;
}



.logo {
  margin-left: 90px;
  font-size: 1.45em;
  font-family: maiandra gd;
}

.main-nav {
  margin-top: 5px;

}
.logo a,
.main-nav a {
  padding: 10px 15px;
  text-transform: uppercase;
  text-align: center;
  display: block;
   font-family: maiandra gd;
   color: white;
}
.logo {
  
}
.main-nav a {
  color: white;
  font-size: .99em;

}

.main-nav a:hover {
  color: #718daa;

}



.header {
  padding-top: .5em;
  padding-bottom: .5em;
  border: 1px solid #a2a2a2;
  background-color: #3b5998;
  -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;


}


/* ================================= 
  Media Queries
==================================== */




@media (min-width: 769px) {
  .header,
  .main-nav {
    display: flex;
    background-color: white-brown;
    color: white;
  }
  .header {
    flex-direction: column;
    align-items: center;
      .header{
    width: 80%;
    margin: 0 auto;
    max-width: 1150px;
    position: fixed-top;
  }
  }

}

@media (min-width: 1025px) {
  .header {
    flex-direction: row;
    justify-content: space-between;
  }

}
.sidebar-nav    {
    text-align: center;
    color: white;
   padding-top: .5em;
  padding-bottom: .5em;
  border: 1px solid #a2a2a2;
  background-color: #3b5998;
  -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
a{
    color: white;
}
</style>
</style>
<body style="background-image: url('<?php echo base_url().'assets/logo/backci.png';?>'); background-size: cover;background-repeat:  no-repeat;">
    <nav class="sidebar-nav navbar navbar-dark bg-dark  header">
        <a href="#" style="color: white; font-family: maiandra gd; font-size: 20px;"><img style="width: 50px; height: 50px;" src="<?php echo base_url().'assets/logo/ci.png';?>"> Ci Online Shop</a>
  <a></a>
  <ul class="main-nav">
 <li> <a href="<?php echo base_url();?>main/main_page"><i class="fa fa-home"></i> Home</a></li>
  <li><a href="<?php echo base_url();?>product_list/shop"><i class="fa fa-shopping-bag"></i> Shop</a></li>
  <li><a href=""><i class="fa fa-question"></i> About us</a></li>
  <li><a href="<?php echo base_url();?>main/login"><i class="fa fa-pencil"></i> Login</a></li>
</ul>
</nav>
<div class="container">

<style>
    .sidebar-nav{
        background: #3b5998;
    }

     nav.sidebar-nav a {
  position:relative;
  z-index: 1;
}
nav.sidebar-nav  a:hover {
  color: #91640F;
}
nav.sidebar-nav a:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 100%;
  height: 1px;
  content: '.';
  color: transparent;
  background: #F1C40F;
  visibility: none;
  opacity: 0;
  z-index: -1;
}
nav.sidebar-nav  a:hover:after {
  opacity: 1;
  visibility: visible;
  height: 100%;
}



/* Keyframes */
@-webkit-keyframes fill {
  0% {
    width: 0%;
    height: 1px;
  }
  50% {
    width: 100%;
    height: 1px;
  }
  100% {
    width: 100%;
    height: 100%;
    background: #333;
  }
}

/* Keyframes */
@-webkit-keyframes circle {
  0% {
    width: 1px;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    height: 1px;
    z-index: -1;
    background: #eee;
    border-radius: 100%;
  }
  100% {
    background: #aaa;
    height: 5000%;
    width: 5000%;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 0;
  }
}

</style>