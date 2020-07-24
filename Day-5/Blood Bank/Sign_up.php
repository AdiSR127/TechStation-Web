<?php     
  $link=mysqli_connect("localhost","root","","Blood Bank");
  if (isset($_POST['signin']))
    {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $password=md5($pass);
    //$sql1="select * from users where Username='$username'";
    $sql2="select * from users where Email='$email'";
    //$que=mysqli_query($link, $sql1);
    $que1=mysqli_query($link, $sql2);
    //$res=mysqli_num_rows($que);
    $res1=mysqli_num_rows($que1);
    if($res1>0)
    {
      $email_error="* This email id is already registered.";
    }
    else
    {
    $sql="insert into users (Username, Email, Password) values('$username', '$email', '$password')";   
    mysqli_query($link, $sql);
    $success_msg="You have successfully signed up!";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sign up | Blood Bank</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/hospital.jpg" rel="icon">
  <link href="images/hospital.jpg" rel="apple-touch-icon">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

 <link href="css/cancss.css" type="text/css" rel="stylesheet">

</head>

<body style="background: rgb(245, 248, 248)" >
<div class="container-fluid bg" >
     <div class="cnge">
    <form class="form-container" style="background-color: #FFFFFF" method="post" enctype="multipart/form-data" onsubmit="return validation()">
        <center><img src="images/hospital.jpg" alt=""  height="80px" width="80px  class="img-fluid"></center>
        <center><h4 class="text-center" style="color:#000000"s class="">Blood Bank</h4></center>
        <div class="form-group">
         <h5 class="text-muted" class=font-weight-light" style="color: #000000">Sign Up </h5>
     
         <label for="exampleInputEmail1" style="color: #000000">Name</label>
          <input type="text" class="form-control"  name="username" id="user"  placeholder="Enter Full Name">
          <?php if (isset($name_error)){?>
           <span class="text-danger"> <?php echo $name_error; }?></span>
          <span id="usernamespan" class="text-danger "></span>
          <small id="emailHelp" class="form-text text-muted"></small>
           </div>
         <div class="form-group">
          <label for="exampleInputEmail1" style="color: #000000">Email ID</label>
          <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" id="emailid" placeholder="Enter Email">
          <?php if (isset($email_error)){?>
           <spam class="text-danger"> <?php echo $email_error; }?></spam>
          <span id="emailidspan" class=" text-danger"></span>
          <small id="emailHelp" class="form-text text-muted"></small>
         </div>
         <div class="form-group">
          <label for="exampleInputPassword1" style="color: #000000">Password</label>
          <input type="password" class="form-control"  name="password" id="pass" placeholder="Enter Password">
          <span id="passwordspan" class=" text-danger"></span>
         </div>
       
       <br>
       <div class="actn-btn">
       <center><button type="submit" class="btn btn-success " name="signin">Sign Up</button></center></div> <br>
        
       <?php if (isset($success_msg)){?>
               <center> <spam class="text-success"> <?php echo $success_msg; }?></spam></center>
     </form> 


    </div>

</div>

  <script type="text/javascript">
    

    function validation(){

      var user = document.getElementById('user').value;
      var emails = document.getElementById('emailid').value;
      var pass = document.getElementById('pass').value;
  




      if(user == ""){
        document.getElementById('usernamespan').innerHTML ="* Please enter the username";
        return false;
      }
      if((user.length < 6) || (user.length > 20)) {
        document.getElementById('usernamespan').innerHTML ="*Username length must be between 6 and 20";
        return false; 
      }
      if(!isNaN(user)){
        document.getElementById('usernamespan').innerHTML ="* Enter a valid username, containing characters ";
        return false;
      }
        if(emails == ""){
        document.getElementById('emailidspan').innerHTML ="* Please enter the Email Id";
        return false;
      }
      if(emails.indexOf('@') <= 0 ){
        document.getElementById('emailidspan').innerHTML ="Please enter a valid email Id";
        return false;
      } 
      if(pass == ""){
        document.getElementById('passwordspan').innerHTML ="*Please enter the password";
        return false;
      }
      if((pass.length <= 8) || (pass.length > 20)) {
        document.getElementById('passwordspan').innerHTML ="*Passwords lenght must be between  8 and 20";
        return false; 
      }
    }

  </script>


</body>
</html>