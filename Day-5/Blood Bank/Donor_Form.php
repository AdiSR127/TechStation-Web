

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


<?php     
  $link=mysqli_connect("localhost","root","","blood bank");
  if (isset($_POST['signin']))
    {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $bloodgroup=$_POST['bloodgroup'];
    $phoneno=$_POST['phoneno'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];

    $sql= $sql="insert into donors (First_Name, Last_Name, Email, Gender, Age, Blood_Group, Phone_Number, Address, City, State) values('$fname', '$lname', '$email', '$gender', '$age', '$bloodgroup', '$phoneno', '$address', '$city', '$state')";   
    mysqli_query($link, $sql);
    echo '<script> alert("Deatils Saved successfully!") </script>';
  }
?>


<head>
  <title>Become Donor | Blood Bank</title>
  <link href="images/hospital.jpg" rel="icon">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="images/hospital.jpg" rel="apple-touch-icon">
</head>
<body class="text-center">
  
  <style>
  
  table
  {
  max-width: 700px;
  padding: 15px;
  margin: auto;
  }
  body
  {
    background-color: #F7F7F7;
  }
  </style>

  
<form method="post" enctype="multipart/form-data">
    <div>
        <br>
        <h5 class="mb3 font-weight-normal"><center>Fill the details please!!</center> </h5>
    </div>

    <div class="form-group">
        <img src="images/hospital.jpg" height="80px" width="80px" alt="GoodWill Logo">
    </div>        
 

    <table align="center" width="700px" cellspacing="20px">
      <tr>
        <td>
          <div class="form-group">
            <input type="text" class="form-control" name="fname" placeholder="First Name" required="" autofocus="" >
          </div>
        </td>
        <td>
          <div class="form-group">
              <input type="text" class="form-control" name="lname" placeholder="Last Name" required="" autofocus="" width="500px">
          </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
          <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email Address" required="" width="350px">
          </div>
        </td>
    </tr>   
  <tr>
    <tr>
        <td colspan="2" align="center">
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" class="form-control" name="gender" value="Male">Male 
                &nbsp; &nbsp;
                <input class="form-check-input" type="radio" class="form-control" name="gender" value="Female">Female</div>
            </div>
        </td>
  </tr>
    <td colspan="2">
      <div class="form-group">
          <input type="text" class="form-control" name="age" placeholder="Age" required="" width="350px">
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div class="form-group">
        <select name="bloodgroup" class="form-control" required="" >
            <option selected="true" disabled="true">--Select your blood group--</option>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
            <option>O-</option>
            <option>AB+</option>
        </select>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div class="form-group">
        <input type="number" class="form-control" name="phoneno" placeholder="Phone Number" required="" width="350px" minlength="10">
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div class="form-group">
        <textarea class="form-control" name="address" required="" placeholder="Address"></textarea>
      </div>
  </tr>
  <tr>
    <td>
      <div class="form-group">
        <input type="text" class="form-control" name="city" placeholder="City" required=""  width="350px">
      </div>
    </td>
    <td>
      <div class="form-group">
        <input type="text" class="form-control" name="state" placeholder="State" required="" width="350px">
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="2">  
      <div class="form-group">
          <button type="submit" class="btn btn-success btn-block" name="signin">Sign Up!</button>
      </div>
    </td>
  </tr>
</table>  
</form>
</body>
</html>