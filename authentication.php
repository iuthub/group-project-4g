<?php      
    include('connection.php');  
    $user = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($user);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $user);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where Username = '$user' and Password = '$password'";  
       $query=mysqli_query($con,$sql);

    $count=mysqli_num_rows($query);


    if ($count==0)
     {
        echo "Sorry Username or Password Wrong or BLocked";
    }
    else{
        include('newpost.html');
    } 
?>  