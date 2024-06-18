<?php

$connection=mysqli_connect('localhost','root','','dodoma');
if($connection)
{
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['emailAddress'];
   $password=$_POST['passwrd'];

   //first: check data duplication
    $checkUser="SELECT * FROM users where email='$email'";
    $response=mysqli_query($connection,$checkUser);
    if(mysqli_num_rows($response)>0)
    {
        $status="0";
        echo $status;
    }
    else{
        //no duplication
        $insertUser="INSERT into users (fname,lname,email,password)values ('$fname','$lname','$email',$password)";
        $results=mysqli_query($connection,$insertUser);
        if($results)
        {
            $status="1";
            echo $status;
        }
        else
        {
            $status="failed";
            echo $status;
        }
    }
}
else
{
    echo 'no connection';
}

?>
