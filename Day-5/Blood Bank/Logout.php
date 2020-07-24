<!DOCTYPE html>
<html>
<head>
	<title>Log Out | Blood Bank</title>
	<!-- Favicons -->
  <link href="images/hospital.jpg" rel="icon">
  <link href="images/hospital.jpg" rel="apple-touch-icon">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="text-center">
	<br>
	<br>
	<br>
	<style>
	form
	{
	max-width: 350px;
	padding: 15px;
	margin: auto;
	}
	body
	{
		background-color: #5FCF80
	}
	</style>

	
<form method="post" enctype="multipart/form-data">


<div class="form-group">
		<img src="images/hospital.jpg" height="64px" width="64px" alt="GoodWill Logo">
	</div>

  <div class="form-group">
    <h5 class="mb3 font-weight-normal"><center>Are you sure you want to exit?</center> </h5>
  </div>

	<div class="form-group">
    <button class="btn btn-danger btn-block" type="submit" name="yes">Yes</button>
    <button class="btn btn-success btn-block" type="submit" name="no">No</button>
	</div>
</form>

</body>
</html>

<?php
extract($_POST);
session_start();

if(isset($yes))
{
	unset($_SESSION['Email']);
	session_destroy();
  header("location:Index.php");
}
  elseif (isset($no))
  {
    header("location:BloodBank.php");
  }

?>