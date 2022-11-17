<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="sign-up">
   <h1>Sign-Up Form</h1>
        <form action="process.php" method='post'>
            <label >Username: </label>
            <input type="text" placeholder="Username" class="box" name="username"><br><br>
            <label >Email: </label>
            <input type="email" placeholder="Email" class="box" name="email"><br><br>
            <label >Password: </label>
            <input type="password" placeholder="Password" class="box" name="password"><br><br>
            <label >Confirm Password: </label>
            <input type="password" placeholder="Confirm Password" class="box" name="cpassword"><br><br>
            <input type="submit" value="SignUp" name="Click">
        </form>
        <hr>
        <h5>OR</h5>
        <div class="logo">
        <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa-brands fa-linkedin" id="linkedin"></i></a>
        <a href="https://www.google.com/" target="_blank"><i class="fa-brands fa-google" id="google"></i></a>      
        <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github" id="github"></i></a>  
                 
        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook" id="facebook"></i></a>
        </div>
        <div class="names"> 
            <span>Linkedin</span>
            <span>Google</span>
            <span>Github</span>
            <span>Facebook</span>
        </div>


   </div>
  
</body>
</html>