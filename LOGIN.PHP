


<?PHP
session_start();


include('connection.php');


  if($_SERVER['POST_METHOD'] == 'POST')
  {
//    collect users data

$user_name = $_post['user_name'];
$password = $_post['password'];

  if(!empty($user_name) && !empty($password))
  {
    // read from data base
    $query ="SELECT * form table WHERE email ='$email' limit 1";
    $query =($con, $query);

    if($result)
    {

    if(mysqli_num_rows($result) > 0){


        $user_data = mysqli_fetch_array($result);

        if($user_data['password'] === $password)
    {
        header('location:index.php'),
    }else{
        $error [] "Incorrect username or password";
    }

    }else{
        $error [] "user not exit on Yanga Web-sever";

    }


}

  }else{
    $error [] "Enter some valid information";

  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($error))
    
        foreach($error as $error)
        echo'<span>''.$error.'</span>';
    
    
    ?>
</body>
</html>