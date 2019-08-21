<?php

$connection = mysqli_connect("localhost", "root","", "test");

$name= $_POST['name'];
$emailid= $_POST['email'];
$password= $_POST['pass'];

$sel= "select * from user where email='$emailid'";

$run= mysqli_query($connection, $sel);    

$check_email= mysqli_num_rows($run);
if($check_email==1){
    echo "<h2>This email is already exist</h2>";
    exit();
}
else{
    $insert= "insert into user (name,email,password) values('$name', '$emailid', '$password')";
    $run_insert=mysqli_query($connection, $insert);
    if($run_insert)
    {
        echo "<h2>Registration Successfully</h2>";
    }
}
?>