<?php
    $conn=mysqli_connect('localhost','root','','trial');
    if(!$conn){
        echo("Check ur Connection");
    }
    else{
        echo("Connected");
    }
?>