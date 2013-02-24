
<?php
include ("connection.php");
if(isset($_SESSION['user_id'])){
	$getuser = "select * from users where userid = '" . $_SESSION["user_id"] . "'";
	$userqry = mysql_query($getuser) or die(mysql_error());
	$userdata = mysql_fetch_assoc($userqry);


if(isset($_POST["app_vote"]))
{
	
}	

	function votechecker($userid)
	{
		$getallvotesbyusertxt = "select * from votes where userid = '" . $_SESSION["user_id"] . "'";
		$getallvotesbyuserqry = mysql_query($getallvotesbyusertxt) or die(mysql_error());
		$getallvotesbyuser = mysql_fetch_assoc($getallvotesbyuserqry);

		$votesbyuser = count($getallvotesbyuser);
		if($votesbyuser>5)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}
?>
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
		




<header class="top-header" style='height:70px;'>


<h1 class="title-bar"> POLL WEBSITE FOR MOBILE APPS </h1>

<?php echo "<a href='#'>" . $userdata["username"] . "</a>";
?>
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
</div>




  <form id='vote_form_apps' method='POST' action='index.php'>

	<div class="apps-icon" style='overflow-y: scroll; overflow-x:hidden; !important; width:1000px; height: 480px; left:50px; top:-25px;	'>
<?php
	$q=mysql_query("select * from mobile_app_img");
	$arr = array();
	while($r=mysql_fetch_assoc($q)){	
		if(in_array($r["mai_filename"], $arr))
		{

		}
		else
		{
		echo "
			<div class='apps-box' style='height: 150px; width: 150px; position:relative;'>
				<label for='app_vote_id{$r['mai_id']}'>
					<div class='apps-img' style='height: 148px; border: 1px solid #ccc; background: url(images/" . $r["mai_filename"] . "." . $r["mai_filetype"] . ") center; background-size: cover;'></div>
				</label>
				<span class='app_vote_name'>{$r['mai_filename']}</span>
				<input type='checkbox' name='app_vote' id='app_vote_id{$r['mai_id']}' class='app_v' value='" . $r["mai_id"] . "' />
			</div>
			";
			$arr[] = $r["mai_filename"];
		}
	}
?>
	</div>
	</form>


	<div class='navbar-bottom'>
		<a href='javascript:void(0);' onclick='submit_vote_apps()'>
			<center>VOTE NOW!!</center>
		</a>
	</div>
	<script>
		function submit_vote_apps(){
			$('#vote_form_apps').submit();
		}
	</script>
</body>



</html>