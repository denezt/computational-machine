<?php
# WARNING: Trivial Unsecure Access Example

$password = $_GET["password"];
$logout = $_GET["logout"];
$active=0;

if ( $logout ){
	$active = 0;
	$_SESSION["active"] = 0;
}

switch($status){
case 1:
	$active=1;
	break;
default:
	if ( $password == $entry_password ){
		$active=1;
		$_SESSION["active"]=1;
	}
	break;
}

$command="printf 'Running Rate: 94000 CMP/s'";
/* End of Script */
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Computation Machine | DB Entries</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ($active > 0){ ?>
	<meta http-equiv="refresh" content="2;url=/"/>
	<?php } ?>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
    		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    		.row.content {height: 550px}

   		 /* Set gray background color and 100% height */
    		.sidenav {
      		background-color: #f1f1f1;
      		height: 100%;
   		 }
    		/* On small screens, set height to 'auto' for the grid */
    		@media screen and (max-width: 767px) {
      			.row.content {height: auto;}
    		}
  	</style>

	<style rel="stylesheet" type="text/css">
		.error-message{
			color: red;
		}
	</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#">Computation Machine</a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="#">Home</a></li>
				<?php if ($active) { ?>
      				<li><a href="logout.php">Logout</a></li>
				<?php } ?>
    			</ul>
    			<button class="btn btn-danger navbar-btn" onclick="window.reload(void);">Resync</button>
  			</div>
		</nav>

		<div>
		<?php
			if ($active){
				echo "<div class='well'>Current Count: " . exec($command) . "</div>";
			} else {
				echo "<h5 class='error-message'>No Access Granted</h5>";
			}

		?>
		</div>
	</body>
</html>
