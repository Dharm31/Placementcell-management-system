<!DOCTYPE html>
<html lang="em">
<head>
<?php
session_start();
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<title>My Example</title>
<link rel="stylesheet" href="home.css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#2C3E50" />
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<style>
button{
  padding-top: 15px;
  font-size: 20px;
  background-color: black;
  color: white;
  border: 5px solid black;
}
button:focus{
  background-color: white;
  color: black;
    /*background:olive;*/
  }

.border{background-color: black;}
@media screen and (max-width: 550px) {
    h1{
        font-size:18px;
    }
    header
    {
      font-size: 14px;
    }
    a{
      font-size: 10px;
    }
}
</style>
</head>
<script>
document.getElementById('focusmeplease').focus();
function validate1()
{
  var sr=document.myform1.src.value;
  var de=document.myform1.des.value;
  if(sr.length == de.length)
  alert("Please enter valid source and destination!");
}

</script>
<script>
$(function(){
    $(".target-active").find("[href=#home]").parent().addClass("active");
});
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<body style="margin-top:4px">
<header>
  <h1><img src="favicon.png" width="100" class="img-fluid img-responsive" style="left-margin:20">CUCEK PLACEMENT CELL<img src="favicon.png" class="img-fluid img-responsive" width="40" ></h1>
  <div class="date"><font color="hotpink"><marquee BEHAVIOR=ALTERNATE width="80%" height="30" scrollamount="5">Welcome tcucek</marquee></font>
  <?php echo date('d/m/y'); ?></div>
</header/>
<div class="container-fluid ">
  <div class="row">
    <div class="col-sm-12">
  <!--    <div class="card" style="max-width: 320px;">
     <div class="card-header text-center"><h3>Navigation</h3></div>
          <div class="card-block">
               <ul class="nav navbar-nav" style="font-size: 1.50em;">
                   <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Documents</a></li>
                    <li><a href="#" class="nav-link">Videos</a></li>
                    <li><a href="#" class="nav-link">Gallery</a></li>
                    <li><a href="#" class="nav-link">Download</a></li>
                </ul>
           </div>
</div>-->
<div class="border">
<a href="#"><button><i class="fa fa-home fa-1x" aria-hidden="true"></i></button></a>
<a href="login.php" ><button><i class="fa fa-book" aria-hidden="true" ></i>Student data</button></a>
<a href="login.php"><button><i class="fa fa-times" aria-hidden="true"></i>company login</button></a>
<a href="pnr1.php"><button><i class="fa fa-ticket" aria-hidden="true"></i>bulletin</button></a>
<a href="song.php"><button><i class="fa fa-video-camera" aria-hidden="true"></i>new</button></a>
<a href="feedback.php"><button><i class="fa fa-comments-o" aria-hidden="true"></i>Feedback</button></a>
<a href="contact.php" ><button><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</button></a>
<a href="About.php" ><button><i class="fa fa-cubes" aria-hidden="true"></i>About Us</button></a>
  <a href="signup1.php"><button><i class="fa fa-user-plus" aria-hidden="true"></i>Register</button></a>
  <a href="login.php"><button>Login <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
</div>
<font color="#DC143C"><marquee BEHAVIOR=ALTERNATE width="100%" height="23" bgcolor="#696969" scrollamount="5" vspace="15"><b>Have a Safe Journey!</b></marquee></font>
<form action="search.php" method="post" style="text-align:right;" onsubmit="validate1()" name="myform1">
<select name="src">
   <option>Patna</option>
   <option>Gorkhpur</option>
   <option>Lucknow</option>
   <option>asansol</option>
   <option>cuttack</option>
   <option>Bhopal</option>
  <option>visakhapatnam</option>
   <option>chennai central</option>
  <option>Ernakulam</option>
  <option>alappuzha</option>
   <option>kanpur central</option>
</select>to
<select name="des">
   <option>Ernakulam</option>
   <option>trivandrum</option>
   <option>Lucknow</option>
   <option>asansol</option>
   <option>Bhopal</option>
   <option>cuttack</option>
  <option>visakhapatnam</option>
   <option>chennai central</option>
  <option>Ernakulam</option>
  <option>alappuzha</option>
  <option>kanpur central</option>
</select>
<input type="submit" name="submit" value="Search">
</form>
<?php
include("slideshow.php");
include("footer.php"); ?>
</div></div></div>
</body>
</html>
