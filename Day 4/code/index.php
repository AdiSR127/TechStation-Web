

<html>
    <head>
        <title>Blood Bank</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    
    
    <script>
      function validate(){
        var x = document.forms["myform"]["password"].value;
        var y = document.forms["myform"]["name"].value;
        var z = document.forms["myform"]["email"].value;
        if(x=="" || y=="" || z==""){
          alert("All Details Must be Filled");
          return false;
        }
      } 

    </script>
    
  
  
  
  
  
  </head>
	  <body>
    <div class="transbox" >
    <form name= "myform" method="POST" action="validate.php" onsubmit="return validate()"><br><br>
    <h1> Register Here</h1>
    <label for : "name">Name</label><br><br>
    <input type="text" name="name" ><br><br>
    <label for : "email">Email ID</label><br><br>
    <input type="text" name="email"><br><br>
    <label for : "password">Password<label><br><br>
    <input type="password" name="password"><br><br><br>
    <input type="submit" value="Sign In"><br>
	
  	<br><br><br><br>
	 </form>
   </div>
   </body>
   </html>