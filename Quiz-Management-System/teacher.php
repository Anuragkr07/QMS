<?php
    $con=mysqli_connect("localhost","root","","qms");
    if(!$con)
    {
    echo "error";
    }

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['psw'];
    $repeatpass=$_POST['psw-repeat'];
    if($repeatpass!=$password)
    {
        echo " Passwords doesn't match";
    }
    else
    {
    $sql="INSERT INTO teacher(firstname,lastname,email,password) values('$fname','$lname','$email','$password')";
    
    if(!mysqli_query($con,$sql))
    {
    echo "not inserted";
    }
    else
    {
    header("refresh:0;url=login-teacher.html");
    }
}
    ?>