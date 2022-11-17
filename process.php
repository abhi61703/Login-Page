<?php
    require_once('connection.php');
    if(isset($_POST['Click'])){
        $Username=mysqli_real_escape_string($conn,$_POST['username']);
        $Email=mysqli_real_escape_string($conn,$_POST['email']);
        $Password=mysqli_real_escape_string($conn,$_POST['password']);
        $CPassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
        
        if(empty($Username) || empty($Email) || empty($Password) || empty($CPassword)){
            echo(" Fill the Blank Spaces");
        }
        if($Password!=$CPassword){
            echo 'Password Not Matched';
        }
        else{
            $sql="insert into Login_Page(Username,Email,Password) values ('$Username','$Email','$Password')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "</br>";
                echo "Value Entered";
            }
            else{
                echo "</br>";
                echo "Check ur Query";
            }
        }

        

    }






?>