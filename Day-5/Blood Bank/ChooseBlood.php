

<?php
extract($_POST);
session_start();

if(isset($_SESSION['Email']))
{
$A=1;
} 
else
{
  header("location:Login_User.php");
}
?>



<head>
  <title>Choose Blood | Blood Bank</title>
  <!-- Favicons -->
  <link href="images/hospital.jpg" rel="icon">
  <link href="images/hospital.jpg" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="text-center">
  
  <style>
  #tab1
  {
  max-width: 500px;
  padding: 15px;
  margin: auto;
  }
  body
  {
    background-color: #5FCF80;
  }
  </style>

  
<form method="post" enctype="multipart/form-data">
  <br>
  

  <div class="form-group">
    <img src="images/Hospital.jpg" height="64px" width="64px" alt="GoodWill Logo">
  </div> 
  
  <div class="form-group">
    <h5 class="mb3 font-weight-normal"><center>Please select the blood group to be searched !</center> </h5>
</div>
  <table id="tab1" width="500px" align="center">
    <tr><td colspan="2">
      <div class="form-group">
    <select name="bloodgroup" class="form-control" autofocus >
    <option selected="true" disabled="true">--Select the blood group--</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>O+</option>
        <option>O-</option>
        <option>AB+</option>
        <option>AB-</option>
    </select>
</div>
      
    </td></tr>
    <tr>
      <td>
          
<div class="form-group">
    <input type="text" class="form-control" name="state" placeholder="State" required=""  width="350px">
  </div>
      </td>
      <td><div class="form-group">
    <input type="text" class="form-control" name="city" placeholder="City" required="" width="350px">
  </div>  </td>
    </tr>
    <tr>
      <td colspan="2"><div >
  <button class="btn btn-primary btn-block" type="submit" name="sbtbtn">Proceed</button>
  </div></td>
    </tr>
  </table>

  
  
</form>

</body>
</html>


<?php 
extract($_POST);
if (isset($sbtbtn))
{
	$link=mysqli_connect("localhost","root","","blood bank");
	$qry="select First_Name,Last_Name,Gender,Blood_Group,Email from donors where Blood_Group='$bloodgroup' and City='$city' and State='$state'";
	
	$resultSet=mysqli_query($link,$qry);
	$tab=<<<demo
	<table border="1px" align="center" width="800px" cellspacing="15px" cellpadding="15px" bgcolor="white">
	<thead>
	<tr>
	<td align='center'><b>Name</b></td>
	<td align='center'><b>Gender</b></td>
	<td align='center'><b>Blood Group</b></td>
	<td align='center'><b>Click to see full details</b></td>
	</tr>
	</thead>
demo;
	
	while ($r=mysqli_fetch_assoc($resultSet))
	 {
	    $tab.="<tr><td align='center'>$r[First_Name] $r[Last_Name] </td><td align='center'>$r[Gender]</td><td align='center'>$r[Blood_Group]</td><td align='center'><a href='Donor.php?id=$r[Email]'>Contact Details</a></td>" ;		 
     } 	
$tab.="</table>";
echo $tab;
}


?>
	
	