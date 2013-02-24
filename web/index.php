<!DOCTYPE html>
<html>
	<head>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css"  href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="css/bootsrap.min.css">
<link rel="stylesheet" type="text/css"  href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" type="text/css"  href="css/style.css">

		<script type='text/javascript' src='/functions/jquery.js'></script>
		<script type='text/javascript' src='/functions/index_func.js'></script>
		
		<script type='text/javascript' src='/js/bootstrap-modal.js'></script>

	</head>
<body>
	

<?php
//	include "registration_form.php";
?>
		




<header class="top-header">


<h1 class="title-bar"> POLL WEBSITE FOR MOBILE APPS </h1>


<a href="#myModal" role="button" class="btn-login" data-toggle="modal">Login</a>





 
<!-- Modal -->
<div id="myModal" class="modal hide fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3  id="myModalLabel">Login</h3>
  </div>


  <div class="modal-body">
    <p>
<?php
	include "login_form.php";
?>

<hr> <h4> <center> OR </h4> </hr>

<?php
  include"registration_form.php";

?>

    </p>
  </div>
 
</div>










</div>





<header class="left-header">

<h1 class="title-bar2">Apps </h1>

<form class="form-search">
  <input type="text" placeholder="Search" class="">
  </form>
<div class="nav-menu">

<ul class="nav nav-list">
  <li class="nav-header"></li>
  <li class="active"><a href="#">Entertainment</a></li>
  
 <li class="nav-header"></li>
  <li class="active"><a href="#">Social</a></li>
  
 <li class="nav-header"></li>
  <li class="active"><a href="#">Utilities</a></li>
  

  
</ul>

</div>	


</div>
	</div>
		</div>


<div class="apps-icon">


<div class="apps-box">
  asdasdasdsa
</div>
<div class="apps-box">
  asdasdasdsa
</div>
<div class="apps-box">
  asdasdasdsa
</div>
<div class="apps-box">
  asdasdasdsa
</div>
<div class="apps-box">
  asdasdasdsa
</div>
<div class="apps-box">
  asdasdasdsa
</div>




</div>



</header>


</body>



</html>