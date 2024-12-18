<!DOCTYPE html>
<html lange="en">
<head>
    <script type="module" src="Signup.js"></script>
    <link rel="stylesheet" href="SignUp.css">
</head>
<body>
<div class="sizebg">
    <img id="laksa" src ="Laksa1rb.png" alt="laksa in signup">
</div>

<form class = "form-position" id="signup" method="post" action="Register.php">
    <h1>Sign Up</h1>
    <img id = user src="user.png" alt ="Iconsignup">
    <br><label for ="Email"> Email</label><br>  
    <input type = "text" id="Email" name="Email"><br>
    <label for = "Password"> Password</label><br>
    <input type = "Password" id="pwd" name="Password"><br>
    <label for = "Comfirm Password">Confirm Password</label><br>
    <input type = "password" id ="confirmpass" name ="Confirm Password"><br><br>

    <div class="button-container">
    <button class = "button" value = "Cancel">Cancel</button>
    <button class ="button2" value ="Confirm" name ="Confirm">Confirm</button>
    </div>

    
</form>

</body>
</html>