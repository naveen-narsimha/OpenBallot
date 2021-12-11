<?php
    $db_hostname='127.0.0.1';
    $db_name='root';
    $db_password="";
    $db_username='test';
    $conn=mysqli_connect($db_hostname,$db_name,$db_password,$db_username);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="SELECT * FROM users where email='$email' && password='$password'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Login failed ".mysqli_error($conn);
        exit;
    } 
    while($row=mysqli_fetch_assoc($result))
    {
      if($row['email']=$email && $row['password']=$password)
      {
          echo "Hello ".$row['name'];
      }
      else
      {
          
        echo "Login failed ".mysqli_error($conn);
        exit;
    } 

      }
    }
    
?>