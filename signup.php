
<?PHP
session_start();


include('connection.php');


  if($_SERVER['POST_METHOD'] == 'POST')
  {
//    collect users data

$user_name = $_post['user_name'];
$email = $_post['email'];
$password = $_post['password'];
$cpassword = $_post['cpassword'];


  if(!empty($user_name) && !empty($password))
  {

    if($pas)
    // read from data base
    $query ="INSERT * form table WHERE email ='$email' limit 1";
    $query =($con, $query);

  }else{
    $error [] "Enter some valid information";

  }
}

<!DOCTYPE ht